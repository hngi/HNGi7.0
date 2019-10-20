<?php
require 'classControllers/init.php';

$contact_mail = new AdminClass;
$validation = new Validation();

if (isset($_POST['contact-btn'])) {

  //use this as an example to get form input data
  $name = $database->escape_string($_POST["name"]);
  $email = $database->escape_string($_POST["email"]);
  $subject = $database->escape_string($_POST["subject"]);
  $message = $database->escape_string($_POST["message"]);
  //validation of data
  $msg = $validation->check_empty($_POST, array('name', 'email', 'subject', 'message'));
  $check_email = $validation->is_email_valid($_POST['email']);
  // checking empty fields
  if ($msg != null) { } elseif (!$check_email) {
    $msg2 = 'Please provide proper email.';
  } else {

    //here is method that will submit mail to database table and you can find it in adminClass
    $send = $contact_mail->contactFormMailer($name, $email, $subject, $message);
    if ($send) {
      $name = $name;
      $subject = $subject;
      $body = $message;
      //here is the function to send mail to admin email
      contactMail($email, $name, $subject, $body);
      $mess = 'Message Sent, Thank you!';
    }
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FAQ2</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
  <link rel="icon" type="img/png" href="images/hng-favicon.png">
  <link rel="stylesheet" type="text/css" href="css/header-footer.css">
  <link rel="stylesheet" href="css/newContact.css">
  <link rel="stylesheet" href="css/faq.css">

</head>

<body>
  <header>
    <a href="index.php"><img id="hng-logo" src="https://res.cloudinary.com/phiileo/image/upload/v1571147073/brand-logo_tx0mdt.png"></a>
    <input type="checkbox" id="mobile-bars-check" />
    <label for="mobile-bars-check" id="mobile-bars">
      <!--img src="images/bars-icon.png" height="23px"-->
      <div class="stix" id="stik1"></div>
      <div class="stix" id="stik2"></div>
      <div class="stix" id="stik3"></div>
    </label>
    <nav>
      <a href="index.php" class="header-links">Home</a>
      <a href="hng6.php" class="header-links">HNG 6.0</a>
      <a href="mentorpage.php" class="header-links">Mentors</a>
      <a href="contactform.php" class="header-links">Contact</a>
      <a href="join-intern.php" id="join-hng" class="def-button">Join HNGi 7.0</a>
    </nav>
  </header>

  <section class="freq-n">
    <div class="container">
      <div class="wrap" style="width: 100%;">
        <div class="header">
          <h1>Not a Frequently Asked Question?</h1>
          <h1> contact us below</h1>
        </div>
        <form class="inputs-wrap" method="post">
          <div id="contact-message">
            <?php

            if (!empty($error)) {
              echo "<h4 class='text-danger text-center'>" . $error . "</h4>";
            }
            if (!empty($mess)) {
              echo "<h4 class='text-success text-center success' style='color: green;'>" . $mess . "</h4>";
            }
            if (!empty($msg)) {
              echo "<h4 class='text-danger text-center' style='color: red;'>" . $msg . "</h4>";
            }
            if (!empty($msg2)) {
              echo "<h4 class='text-danger text-center' style='color: red;'>" . $msg2 . "</h4>";
            }
            ?>
          </div>
          <input type="text" placeholder="Name" name="name" required>
          <input type="email" placeholder="Email" name="email"  required>
          <input type="text" placeholder="Subject" name="subject"  required>
          <textarea id="" cols="" rows="10" name="message" required></textarea>
          <input type="submit" id="submit" value="SEND MESSAGE" name="contact-btn">
        </form>
      </div>
    </div>
  </section>
  <!--
    <footer class="tripp">
            <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722444/hng-brand-logo_gnplmq.svg">
        <nav class="footer-nav">
            <div class="row">
                <div class="col-sm-3 pb-3">
                    <h2 class="skyblue-text">Quick Links</h2>
                    <div id="link-list">
                        <a href="join-intern.php" class="skyblue-text">Join HNG</a>
                        <a href="index.php" class="skyblue-text">About HNG</a>
                        <a href="faq.php" class="skyblue-text">Become a Sponsor</a>
                        <a href="MentorSetUpPage2.php" class="skyblue-text">Sign up as Mentor</a>
                        <a href="faq.php" class="skyblue-text">FAQ</a>
                    </div>
                </div>
                <div class="col-sm-3 pb-3" id="contact-section">
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
                    </div>
                    <div class="col-sm-3 pb-3">
                        <h2 class="skyblue-text">Office Address</h2>
                        <p id="address">
                            3 Birrel Avenue <br /> Sabo, Yaba, <br /> Lagos state
                        </p>
                    </div>
                    <div class="col-sm-3 pb-3">
                        <h2 class="skyblue-text">Follow Us</h2>
                        <div id="socials">
                            <a href="https://twitter.com" title="Follow on Twitter!"><img
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/twitter-logo_m1mgzi.svg"></a>
                            <a href="https://facebook.com"><img title="Follow on Facebook!"
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/facebook-logo_bw1hal.svg"></a>
                            <a href="https://dribble.com"><img title="Follow on Dribble!"
                                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/dribble-logo_w4vwuz.svg"></a>
                        </div>
                    </div>
                </div>
        </nav>
        </footer>
    
        
        
            <p class="center-text darkblue-text">&copy 2019, HNG Internship. All rights reserved.</p>
        -->





  <footer>
    <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722444/hng-brand-logo_gnplmq.svg">
    <nav>
      <section>
        <h2 class="skyblue-text">Quick Links</h2>
        <div id="link-list">
          <a href="join-intern.php" class="skyblue-text">Join HNG</a>
          <a href="index.php" class="skyblue-text">About HNG</a>
          <a href="donationpage.html" class="skyblue-text">Become a Sponsor</a>
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