
<?php
require_once "classControllers/init.php";
$admin = new AdminClass;
if (isset($_POST["set-btn"])) {
  $code = uniqid(true);
  $email = $database->escape_string($_POST["email"]);
  $query = $database->query("SELECT * FROM admins WHERE email = '$email'");
  $row = mysqli_fetch_assoc($query);
  $fullname = $row["firstname"] . ' ' . $row["lastname"];
  $count = mysqli_num_rows($query);
  if ($count > 0) {
    $fullname = $fullname;
    $url = "http://hngi7.hng.tech/setpassword.php?code=$code";
    $subject = 'YOUR PASSWORD REQUEST LINK';
    $body = "<html>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        </head>
        <body style='margin: 0; padding: 0;'>
          <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tr>
              <td style='padding: 10px 0 30px 0;'>
                <table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border: 1px solid #cccccc; border-collapse: collapse;'>
                  <tr>
                    <td align='center' bgcolor='#fff' style='padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;'>
                      <img src='https://res.cloudinary.com/phiileo/image/upload/v1571147073/brand-logo_tx0mdt.png' alt='Creating Email Magic' width='300' height='150' style='display: block;' />
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
                      <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                        <tr>
                          <td style='color: #153643; font-family: Arial, sans-serif; font-size: 24px;'>
                            <b>Dear,  $fullname .</b>
                          </td>
                        </tr>
                        <tr>
                          <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                                            You recieve this email because you request for a reset password link, Kindly find below a link to reset your password.<br> Thank you.
                          </td>
                                        </tr>";
    $admin->Setpassword($email, $code);
    SetPasswordMail($subject, $body,$email,$url,$fullname);
    $mess = '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: green; color: #fff; width: 80% !important; text-align: center;">A reset password link has been sent to your email thank you!</p>';
  }else{
     $errors = '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: #F7CFCF; color: #6A0E0D; width: 80% !important; text-align: center;">Wrong email entered</p>';
  }
  
 

    
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FORGOT PASSWORD</title>
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
    <section class="jumbo">
    <?php include('fragments/site_header.php'); ?>


    </section>

    <div class="form-area">

      <form class="form-container" method="post">

        <h2 class="login-heading">SET PASSWORD?</h2>
        <?php
          if(!empty($errors) ){

              echo $errors;

          }
          if(!empty($mess) ){

              echo $mess;

          }

        ?>
        <p id="result"></p>

        <input type="email" name="email" id="email" placeholder="enter your Email"/>
        <button type="submit" onclick="signup()" name="set-btn">PROCEED</button>


      </form>
    </div>


    <footer>
    <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722444/hng-brand-logo_gnplmq.svg">
    <nav>
      <section>
        <h2 class="skyblue-text">Quick Links</h2>
        <div id="link-list">
          <a href="join-intern.php" class="skyblue-text">Join HNG</a>
          <a href="index.php" class="skyblue-text">About HNG</a>
          <a href="donate.html" class="skyblue-text">Become a Sponsor</a>
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
  </html>
