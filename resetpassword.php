
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
    header("location: login.php?getmess=Your password was reset succefully");
  }
}else{
  
   exit('Page does not exist');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dekillerj/image/upload/v1570648980/brand-logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

        <input type="password" name="password" id="email" placeholder="enter your Password" required/>
         <input type="password" name="confirm_password" id="email" placeholder="Retype Password" required/>
        <button type="submit" onclick="signup()" name="reset_password">RESET PASSWORD</button>


      </form>
    </div>

    <?php include('fragments/site_footer.php'); ?>

        </body>
  </html>
