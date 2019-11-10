<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 10/29/2019
 * Time: 10:31 AM
 */

class Subscribers
{
    public function saveSubscriber($email){ //Method to save subscriber
        global $database;
        $sql = "INSERT INTO subscription(email) VALUES('$email')";
        if($query = $database->query($sql)){
            @$this->send_welcome_email($email);
        }

    }


    public function subscriberExists($email){ //Method to check if subscriber exists!
        global $database;
        $query = "SELECT null FROM subscription WHERE email = '$email'";
        $stmt = $database->query("$query");
        $rows = $stmt->num_rows;
        return $rows;
    }

    public function send_welcome_email($email){ //function to send welcome message to subscriber!
        $subject = "HNGi7 Internship Subscription";
        $message = "Thank You for signing up to receive updates on the HNG Internship 7.0";
        $message .= "<br>You will be receiving periodic updates about the internship";
        send_general_email($subject,$email,$message);
    }


    public function fetch_list(){ //function to fetch all list
        global $database;
        $sql = "SELECT email FROM subscription ORDER BY id DESC";
        $query = $database->query($sql);
        $result = $query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

    public function saveNewsletter($title, $content, $image){ //Create function to save newsletter
        global $database;

        $title = $database->escape_string($title);
        $content = $database->escape_string($content);
        $image = $database->escape_string($image);
        $sql = "INSERT INTO newsletter SET title = '$title', content = '$content', image = '$image'";
        $database->query($sql);
    }

    public function fetch_newsletter(){ //function to fetch all newsletter
        global $database;
        $sql = "SELECT * FROM newsletter ORDER BY id DESC";
        $query = $database->query($sql);
        $result = $query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

    public function fetch_the_newsletter($id){ //function to fetch single newsletter
        global $database;
        $sql = "SELECT * FROM newsletter WHERE id = '$id'";
        $query = $database->query($sql);
        $result = $query->fetch_assoc();

        return $result;
    }

    public function  delete_news_update($id){ //function to delete news update
        global $database;
        if(is_array($id)){
            foreach ($id as $the_id){
                $database->query("DELETE FROM newsletter WHERE id = '$the_id'"); //Delete multiple news at once
            }
        }else{
            $database->query("DELETE FROM newsletter WHERE id = '$id'"); //Delete single news
        }
    }

}