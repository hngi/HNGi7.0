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
        $message = "Hi thank you for subscribing to HNGi7 Internship update!";
        $message .= "<br>You will be receiving periodic update about the internship";
        send_general_email($subject,$email,$message);
    }


    public function fetch_list(){ //function to fetch all list
        global $database;
        $sql = "SELECT email FROM subscription ORDER BY id DESC";
        $query = $database->query($sql);
        $result = $query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }
}