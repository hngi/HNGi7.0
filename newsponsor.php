<?php
require 'classControllers/init.php';

$sponsor = new classSponsor;
$validation = new Validation();

if (isset($_POST['contact-btn'])) {

  function random_strings($length_of_string) { 
		
    return substr ((date('dmys')), 0, $length_of_string); 
  } 
  //use this as an example to get form input data
  $logo = $database->escape_string($_POST["sponsor_logo"]);
  $name = $database->escape_string($_POST["name"]);
  $email = $database->escape_string($_POST["email"]);
  $address = $database->escape_string($_POST["sponsor_address"]);
  $message = $database->escape_string($_POST["message"]);
  $ticket = random_strings(10);
  //validation of data
  $msg = $validation->check_empty($_POST, array('sponsor_logo','name', 'email', 'sponsor_address', 'message'));
  $check_email = $validation->is_email_valid($_POST['email']);
  // checking empty fields
  if ($msg != null) { } elseif (!$check_email) {
    $msg2 = 'Please provide correct email Address.';
  } else {

    //here is method that will submit mail to database table and you can find it in adminClass
    $message = $sponsor->sponsorsignup($logo,$name, $email, $address, $message);
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="css/newsponsor.css">
  <link rel="stylesheet" type="text/css" href="css/header-footer.css">
  <link rel="icon" type="img/png" href="images/hng-favicon.png">
</head>

<body>
  <?php include('fragments/site_header.php'); ?>

  <section class="container-fluid">
    <div class="wrap">
      <div class="header">
        <h1>Sponsor Registration</h1>
        <p> Fill the form below to become a sponsor</p>
      </div>

      <form class="inputs-wrap" method="post" action="newsponsor.php">
        <div id="contact-message">
          <?php

if (!empty($error)) {
  echo "<h4 class='text-danger text-center'>" . $error . "</h4>";
}
if (!empty($mess)) {
  echo "<center><h4 class='text-success text-center success' style='background: #D3ECDB; color: #2B5036; padding: 10px;'>" . $mess . "</h4></center>";
}
if (!empty($msg)) {
  echo "<h4 class='text-danger text-center' style='color: red;'>" . $msg . "</h4>";
}
if (!empty($msg2)) {
  echo "<h4 class='text-danger text-center' style='color: red;'>" . $msg2 . "</h4>";
}
if (!empty($message)) {
  echo "<h4 class='alert alert-success text-center'>" . $message . "</h4>";
}

?>
        </div>
        <label for="sponsor_logo">Upload Your logo</label>
        <input type="file" placeholder="sponsor logo" name="sponsor_logo" required>
        <input type="text" placeholder="Name" name="name" required>
        <input type="email" placeholder="Email" name="email" required>
        <input type="text" placeholder="Business Address" name="sponsor_address" required>
        <textarea id="" placeholder="Tell us about youself" cols="" rows="10" name="message" required></textarea>
        <input type="submit" id="submit" value="REGISTER" name="contact-btn">
      </form>
    </div>
  </section>
  <?php  include "fragments/site_footer.php";?>
</body>

</html>
