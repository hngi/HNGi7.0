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
      $linkPort = $database->escape_string($_POST['linkPort']); 
      $linkCV = $database->escape_string($_POST['linkCV']);
      $exp = $database->escape_string($_POST['exp']);
      $interest = $database->escape_string($_POST['interest']);
      $location = $database->escape_string($_POST['location']);
      $empStatus = $database->escape_string($_POST['empStatus']);
      $about = $database->escape_string($_POST['about']);
      $date = $database->escape_string($_POST['date']);
      $insertInterns = $intern->internSignup();

      $success = '<div class="alert alert-success" role="alert" style="background: green; padding: 5px 10px 5px 10px; width: 80% !important; text-align: center; color: white; ">
                Your registration was  successful. We will get back to you as soon as possible.
            </div>';
      
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
  <link rel="icon" type="img/png" href="images/hng-favicon.png">
  <link rel="stylesheet" type="text/css" href="css/header-footer.css">
  <link rel="stylesheet" href="css/join-intern.css">
  <script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <style>
    
    #socials a {
        display: inline-block;
        margin-top: 10px;   
    }
    
  </style>

</head>

<body>
  <?php include('fragments/site_header.php'); ?>
  <section class="jumbo">
    <h2 class="heading">Join as an intern</h2>
    <p class="para">
      Complete the form below to begin your journey as an intern.
    </p>
    <p class="para2">To become a mentor <a href="MentorSetUpPage2.php">Click here</a></p>
  </section>

  <div class="form-area">

    <?php
    $errMsg = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strpos($errMsg, 'join-intern.php?Submitted') !== false) {
      echo "<div style='text-align:center; font-size:1.3em; color:#084482'>Thank You for completing the form, we will get back to You soon!</div>";
    }
    ?>

    <?php
   
    if ($status == 1) {
      ?>
      <form class="form-container" action="" method="post" id="myForm">

        <?php
         
          
          if(isset($success) ){
            
              echo $success;
            
          }
           
          ?>

        <input type="text" name="fullname" id="fullname" required placeholder="Fullname" />
        <input type="email" name="email" id="email" required placeholder="Email" />
        <input type="text" name="phoneNo" id="phoneNo" required placeholder="Phone number" />
        <input type="url" name="linkPort" id="linkPort" required placeholder="Link to portfolio (if you have any)" />
        <input type="url" name="linkCV" id="linkCV" required placeholder="Link to your CV (Linkedin profile or any other link)" />
        <input type="text" name="exp" id="exp" required placeholder="How many years experience do you have" />
        <input type="text" name="interest" id="interest" required placeholder="What area are you interested in" />
        <input type="text" name="location" id="location" required placeholder="What state are you currently  located in?" />
        <input type="text" name="empStatus" id="empStatus" required placeholder="What is  your current employment status?" />
        <textarea name="about" id="about" required cols="30" rows="10" placeholder="Briefly tell us about yourself"></textarea>
        <input type='hidden' name='date' id="date" value='<?= date('Y-m-d H:i:s'); ?>'>

        <p id="result"></p>

        <input type="submit" name="submit" value="SUBMIT" class="submitBtn"/>
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
  <!--div class="footer-container">
      <footer class="footer">
        <a href="index.html"><img class="footer-logo" src="https://res.cloudinary.com/dekillerj/image/upload/v1570648980/brand-logo.png" alt="HNG logo" /></a>
        <div class="footer-items">
          <div class="quickLinks">
            <h2 class="footer-header">Quick Links</h2>
            <ul class="footer-links">
              <a href="join-intern.html"><li class="footer-item">Join HNG</li></a>
              <a href="how-it-works.html"><li class="footer-item">About HNG</li></a>
              <a href="MentorSetUpPage2.html"><li class="footer-item">Become a Sponsor</li></a>
              <a href="MentorSetUpPage2.html"><li class="footer-item">Signup as a mentor</li></a>
            </ul>
          </div>
          <div class="contact-us">
            <h2 class="footer-header">Contact Us</h2>
            <p class="contact-us__item">
              Phone: <br />
              +234(0) 812 345 6789
            </p>
            <p class="contact-us__item">
              Email: <br />
              Interns@hng.tech
            </p>
          </div>
          <div>
            <h2 class="footer-header">Office Address</h2>
            <p class="office-address">
              3 Birrel Avenue,<br />
              Sabo, Yaba<br />
              Lagos State
            </p>
          </div>
          <div>
            <h2 class="footer-header">Follow us</h2>
            <i class="fab fa-twitter social-icon"></i>
            <i class="fab fa-facebook-square social-icon"></i>
            <i class="fab fa-dribbble social-icon"></i>
          </div>
        </div>
        <p class="footer-p">&copy; 2019, HNG Internship. All rights reserved</p>
      </footer>
    </div-->

  <footer>
    <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722444/hng-brand-logo_gnplmq.svg">
    <nav>
      <section>
        <h2 class="skyblue-text">Quick Links</h2>
        <div id="link-list">
          <a href="join-intern.php" class="skyblue-text">Join HNG</a>
          <a href="index.php" class="skyblue-text">About HNG</a>
          <a href="MentorSetUpPage2.php" class="skyblue-text">Become a Sponsor</a>
          <a href="MentorSetUpPage2.php" class="skyblue-text">Sign up as Mentor</a>
          <a href="faq.php" class="skyblue-text">FAQ</a>

        </div>
      </section>
      <section id="contact-section">
        <h2 class="skyblue-text">Contact Us</h2>
        <div>
          <a href="tel:+2348123456789">
            <strong>
              Phone: <br />
            </strong>
            +234 812 345 6789
          </a>
          <br />
          <a href="mailto:interns@hng.tech">
            <strong>
              Email: <br />
            </strong>
            interns@hng.tech
          </a>
        </div>
      </section>
      <section>
        <h2 class="skyblue-text">Office Address</h2>
        <p id="address">
          3 Birrel Avenue <br /> Sabo, Yaba, <br /> Lagos state
        </p>
      </section>
      <section>
        <h2 class="skyblue-text">Follow Us</h2>
        <div id="socials">
          <a href="https://twitter.com" title="Follow on Twitter!"><img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/twitter-logo_m1mgzi.svg"></a>
          <a href="https://facebook.com"><img title="Follow on Facebook!" src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/facebook-logo_bw1hal.svg"></a>
          <a href="https://dribble.com"><img title="Follow on Dribble!" src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/dribble-logo_w4vwuz.svg"></a>
        </div>
      </section>
    </nav>
    <p class="center-text darkblue-text">&copy 2019, HNG Internship. All rights reserved.</p>
  </footer>
</body>

</html>