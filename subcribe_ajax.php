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

    if($subscriber->subscriberExists($email)){
        $output['status'] = false;
        $output['message'] = "You have already subscribe to mailing list!";
    }else{

    }
}