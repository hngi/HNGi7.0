<?php

session_start();
if(!isset($_SESSION['hng-admin'])){
    header("location:login.php");
    exit();
}
require 'classControllers/init.php';
$admin = new AdminClass();
$my_role = $_SESSION['hng-admin']['role'];

if($my_role != 1){
    //not a super admin
    $_SESSION['err_msg'] = "<div class='alert alert-warning'>This task is only available for a super admin!</div>";
    header("location:test_home.php");
    exit();
}

$firstname = $database->escape_string($_POST['fname']);
$lastname = $database->escape_string($_POST['name']);
$email = $database->escape_string($_POST['email']);
$password = $database->escape_string($_POST['password']);
$enc_password = sha1($password);
$role = $database->escape_string($_POST['role']);

if($admin->adminExist($email) == 1){
    $_SESSION['err_msg'] = "<div class='alert alert-warning'>Admin already exists!</div>";
    header("location:add_admin.php");
    exit();
}else{
    if($admin->createAdmin("$email","$firstname","$lastname","$email","$role","$enc_password")){
        $_SESSION['err_msg'] = "<div class='alert alert-success'>Admin added successfully!</div>";
        header("location:add_admin.php");
        exit();
    }else{
        $_SESSION['err_msg'] = "<div class='alert alert-info'>Unable to add new admin</div>";
        header("location:add_admin.php");
        exit();
    }
}