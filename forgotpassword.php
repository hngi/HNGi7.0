
<?php
require_once "classControllers/init.php";
$admin = new AdminClass;
if (isset($_POST["recover-btn"])) {
  $code = uniqid(true);
  $email = $database->escape_string($_POST["email"]);
  $query = $database->query("SELECT * FROM admins WHERE email = '$email'");
  $row = mysqli_fetch_assoc($query);
  $fullname = $row["firstname"] . ' ' . $row["lastname"];
  $count = mysqli_num_rows($query);
  if ($count > 0) {
     $url = "http://hngi7.hng.tech/resetpassword.php?code=$code";
    $subject = 'YOUR PASSWORD REST LINK';
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
                                            You recieve this email because you request for a reset password link, Kindly find bellow a link to reset your password.<br> Thank you.
                          </td>
                                        </tr>";
    $admin->forGetpassword($email, $code);
    forGetPasswordMail($subject, $body,$email,$url,$fullname);
    $mess = '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: green; color: #fff; width: 100% !important; text-align: center;">A reset password link has been sent to your email thank you!</p>';
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
  <title>Forgot Password</title>
  <link rel="shortcut icon" href="https://res.cloudinary.com/dekillerj/image/upload/v1570648980/brand-logo.png" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="icon" type="img/png" href="images/hng-favicon.png">
  <link rel="stylesheet" type="text/css" href="css/header-footer.css">
  <link rel="stylesheet" href="css/loginadmin.css">
    <script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>
  <style>
        #email {
          margin-bottom: 20px;
          width: 100%;
          padding: 10px;
        }
  </style>
   

  </head>
  <body><section class="jumbo">
    <?php include('fragments/site_header.php'); ?>
    </section>
    <section class="container-fluid">
    

    <div class="form-area">

      <form class="form-container" method="post">

        <h2 class="login-heading">FORGOT PASSWORD?</h2>
        <?php
          if(!empty($errors) ){

              echo $errors;

          }
          if(!empty($mess) ){

              echo $mess;

          }

        ?>
        <p id="result"></p>

        <input type="email" name="email" id="email" placeholder="Enter your Email"/> <br>
        <button type="submit" onclick="signup()" name="recover-btn">RECOVER PASSWORD</button>


      </form>
    </div>

          </section>      
          <?php include('fragments/site_footer.php'); ?>
        </body>
  </html>
