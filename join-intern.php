<?php
date_default_timezone_set('Africa/Lagos');
require_once 'classControllers/init.php';
    $intern = new Intern;
    $lockForm = new LockRegForm();
    $status = $lockForm->checkStatus();
    if (isset($_POST['submit'])) {
      $fullname = $database->escape_string($_POST['fullname']);
      $email = $database->escape_string($_POST['email']);
      $phoneNo = $database->escape_string($_POST['phoneNo']);
      $linkCV = $database->escape_string($_POST['linkCV']);
      $interest = $database->escape_string($_POST['interest']);
      $location = $database->escape_string($_POST['location']);
      $empStatus = $database->escape_string($_POST['empStatus']);
      $about = $database->escape_string($_POST['about']);
      $date = $database->escape_string($_POST['date']);
      $insertInterns = $intern->internSignup();
      
      
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Join as an intern</title>
  <link rel="shortcut icon" href="https://res.cloudinary.com/dekillerj/image/upload/v1570648980/brand-logo.png" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/header-footer.css">
  <link rel="stylesheet" href="css/join-intern.css">
  <link rel="icon" type="img/png" href="images/hng-favicon.png">
  <script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

  <style>
        h2.heading {
          color: #084482;
          font-weight: bolder;
          margin-top: 50px;
        }
        p.para {
          width: 100%;
          text-align: center;
          margin-top: 20px;
          margin-bottom: 100px;
        }
  </style>
</head>

<body>
    <section class="navigation">
      <?php include('fragments/site_header.php'); ?>
    </section>

    <section class="container-fluid1">
    <section class="jumbo">

      <h2 class="heading">Join as an Intern</h2>
      <p class="para">
        Complete the form below to begin your journey as an Intern.<br>
        To become a mentor <a href="MentorSetUpPage2.php">Click here</a>
      </p>
    </section>

  <div class="form-area">

    <?php
    $errMsg = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strpos($errMsg, 'join-intern.php?successful') !== false) {
      // echo "<div style='text-align:center; font-size:1.3em; color:#084482'>Thank You for completing the form, we will get back to You soon!</div>";
      echo '<div style="margin:auto 30vw; background: green; padding: 5px 10px 5px 10px; width: 40vw !important; text-align: center; color: white; ">
                Your registration was  successful and an email has been sent to your mail. We will get back to you as soon as possible.
            </div>';
}
    $errMsg = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strpos($errMsg, 'join-intern.php?failed') !== false) {
      // echo "<div style='text-align:center; font-size:1.3em; color:#084482'>Thank You for completing the form, we will get back to You soon!</div>";
      echo '<div style="margin:auto 30vw; background: red; padding: 5px 10px 5px 10px; width: 40vw !important; text-align: center; color: white; ">
                Your registration failed because Email already exist.
            </div>';
    }
    ?>

    <?php
    if ($status == 1) {
      ?>
      <form class="form-container" action="" method="post" id="myForm">


        <input type="text" name="fullname" id="fullname" required placeholder="Full Name" />
        <input type="email" name="email" id="email" required placeholder="E-mail Address" />
        <input type="text" name="phoneNo" id="phoneNo" required placeholder="Phone Number" />
        <input type="url" name="linkCV" id="linkCV" required placeholder="Link to your CV (LinkedIn Profile or any other link)" />
        <select class="interest" name="interest" multiple>
          <option value="" disabled selected hidden>What area are you interested in?</option>
          <option value="Backend">Backend</option>
          <option value="DevOps">DevOps</option>
          <option value="Digital Marketing">Digital Marketing</option>
          <option value="Frontend">Frontend</option>
          <option value="Machine Learning">Machine Learning</option>
          <option value="Mobile Development">Mobile Development</option>
          <option value="UI/UX Design">UI/UX Design</option>
        </select>
        <input type="text" name="location" id="location" required placeholder="What state are you currently located in?" />
        <select name="empStatus" id="empStatus" class="empStatus" required>
          <option value="" disabled selected hidden>What is your current employment status?</option>
          <option value="Recently Employed (3 months or less)">Recently Employed (3 months or less)</option>
          <option value="Employee">Employee</option>
          <option value="Self-employed">Self-employed</option>
          <option value="Freelance">Freelance</option>
          <option value="Unemployed">Unemployed</option>
        </select>
        <textarea name="about" id="about" required cols="30" rows="10" placeholder="Briefly tell us about yourself"></textarea>
        <input type='hidden' name='date' id="date" value='<?= date('Y-m-d H:i:s'); ?>'>

        <p id="result"></p>

        <button type="submit" name="submit" value="Submit" class="submitBtn btn">
          Submit
        </button>
      </form>
    <?php
    } else {
      ?>
      <div style="width: 100%; margin: 0 auto; text-align: center; padding: 30px; color: #6F0503; ">
        <h1>Registration is now Closed</h1>
      </div>
    <?php
    }
    ?>


  </div>
   <?php include "fragments/site_footer.php"; ?>
  </section>
</body>

</html>
