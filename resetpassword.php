
<?php
require_once "classControllers/init.php";
$admin = new AdminClass;
if (isset($_GET["code"])) {
  
  if (isset($_POST['reset_password'])) {

    $code = $_GET["code"];
    $password = $_POST['password'];
    $retype =  $_POST['confirm_password'];
    if ($retype != $password) {
      
      $err = '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: #F7CFCF; color: #6A0E0D; width: 80% !important; text-align: center;">Password not match</p>';
    }
    $message = $admin->createNewPassword($password, $code);
     $getmess = '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: green; color: #fff; width: 80% !important; text-align: center;"></p>';
    header("location: admin_login.php?getmess".$getmess);
  }
}else{
   exit("Can't find page");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESET PASSWORD</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dekillerj/image/upload/v1570648980/brand-logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" href="css/join-intern.css">

    <script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>

   

  </head>
  <body>
    <?php include('fragments/site_header.php'); ?>
    <section class="jumbo">


    </section>

    <div class="form-area">

      <form class="form-container" method="post">

        <h2 class="login-heading">RESET PASSWORD?</h2>
         <?php
         
          if(!empty($err) ){

              echo $err;

          }

        ?>
        <p id="result"></p>

        <input type="password" name="password" id="email" placeholder="enter your Pawword" required/>
         <input type="password" name="confirm_password" id="email" placeholder="enter your Retype Password" required/>
        <button type="submit" onclick="signup()" name="reset_password">RESET PASSWORD</button>


      </form>
    </div>


    <footer>
    <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722444/hng-brand-logo_gnplmq.svg">
    <nav>
      <section>
        <h2 class="skyblue-text">Quick Links</h2>
        <div id="link-list">
          <a href="join-intern" class="skyblue-text">Join HNG</a>
          <a href="index" class="skyblue-text">About HNG</a>
          <a href="donate" class="skyblue-text">Become a Sponsor</a>
          <a href="MentorSetUpPage2" class="skyblue-text">Sign up as Mentor</a>
          <a href="faq" class="skyblue-text">FAQ</a>
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
  </html>
