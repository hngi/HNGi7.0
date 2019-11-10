<?php
require_once "classControllers/init.php";
$sponsor = new sponsors;

if (isset($_POST["sponsor-btn"])) {
  $errors = [];
  $sponsor->sponsor_name = $_POST["sponsor_name"];
  $sponsor->sponsor_email = $_POST["sponsor_email"];
  $sponsor->business_address = $_POST["business_address"];
  $sponsor->about_you = $_POST["about_you"];
  $image = $_FILES['file']['name'];
  $target_file = 'uploads/sponsor-img/' .  $image;
  // Allow certain file formats
  // if ( $image != "jpeg" &&  $image != "png" &&  $image != "jpg") {
  //   $errors[] = "Sorry, only JPG, JPEG, PNG  files are allowed.";
  
  // }
/*  if (empty($_POST["sponsor_name"]) || empty($_POST["sponsor_email"]) || empty($_POST["business"]) || empty($_POST["about_you"])) {
    $errors[] = "All feild are required";
  }*/

  if (empty($error)) {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
      $resp = $sponsor->addSponsors($target_file);
      $sponsor_mess = '<p style="text-align:center;">Registration Succesful. You will here from us soon thank you!</a>';
    } 
  } else {
    $errors[] = "Upload not successful";
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>New Sponsor</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
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


      <form class="inputs-wrap" method="post" enctype="multipart/form-data">
        <div id="contact-message">
          <?php

          if (!empty($sponsor_mess)) {
            echo "<center><h6 class='text-success text-center success' style='background: #D3ECDB; color: #2B5036; padding: 10px;'>" . $sponsor_mess . "</h6></center>";
          }
          if (!empty($errors)) {
            foreach ($errors as $error) {
              echo "<h6 class='text-danger text-center'>" . $error . "</h6>";
            }
          }
          ?>
        </div>
        <label for="sponsor_logo">Upload Your logo</label>
        <input type="file" placeholder="Sponsor Logo" name="file" required>
        <input type="text" placeholder="Name" name="sponsor_name" required>
        <input type="email" placeholder="Email" name="sponsor_email" required>
        <input type="text" placeholder="Business Address" name="business_address" required>
        <textarea id="" placeholder="Tell us about youself" cols="" rows="10" name="about_you" required></textarea>
        <input type="submit" id="submit" value="REGISTER" name="sponsor-btn">
      </form>
    </div>
  </section>
  <?php include "fragments/site_footer.php"; ?>
</body>

</html>