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
        $query = $database->query($sql);
    }


    public function subscriberExists($email){ //Method to check if subscriber exists!
        global $database;
        $query = "SELECT null FROM subscription WHERE email = '$email'";
        $stmt = $database->query("$query");
        $rows = $stmt->num_rows;
        return $rows;
    }
}