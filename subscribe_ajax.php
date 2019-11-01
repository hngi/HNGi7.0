<?php
/**
 * Created by PhpStorm.
 * User: Hollyphat
 * Date: 10/29/2019
 * Time: 10:40 AM
 */

require_once "classControllers/init.php";

$subscriber = new Subscribers();

if(isset($_POST['add'])){

    $output = array();
    $email = $database->escape_string($_POST['email']);

    if($email == ""){
        $output['status'] = false;
        $output['message'] = "Kindly enter your email address"; //Prevent submission of empty field to the database
    }elseif ($subscriber->subscriberExists($email)){
        $output['status'] = false;
        $output['message'] = "You have already subscribe to mailing list!";
    }else{
        $subscriber->saveSubscriber($email); //save subscriber
        $output['status'] = true;
        $output['message'] = "Your Subscription to HNGi7 has been confirmed successfully";
    }

    echo json_encode($output, JSON_PRETTY_PRINT);
    exit();
}