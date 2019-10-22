<?php require 'classControllers/init.php';
$interns = new Admins;
if (isset($_POST['login'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $login = $interns->adminLogin($email, $password);
  $errors = '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: #F7CFCF; color: #6A0E0D; width: 80% !important; text-align: center;">Wrong Credentials</p>';
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dekillerj/image/upload/v1570648980/brand-logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" href="css/join-intern.css">

    <script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>

    <script>

      function signup() {

        var email = $('#email').val();
        var password = $('#password').val();

        $.post($login.'?login=yes", {
            email: email,
            password: password
        },
        function(data){
            $('#result').html(data);
        });
      }

    </script>

  </head>
  <body>
    <?php include('fragments/site_header.php'); ?>
    <section class="jumbo">


    </section>

    <div class="form-area">

      <form class="form-container" method="post">

        <h2 class="login-heading">Login as an Admin</h2>
        <?php
          if(!empty($errors) ){

              echo $errors;

          }

        ?>
        <p id="result"></p>

        <input type="email" name="email" id="email" placeholder="enter your Email" required/>
        <input type="password" name="password" id="password" placeholder="enter your password" required>

        <button type="submit" onclick="signup()" name="login">LOG IN</button>
        <!--<a href="">Forgot Password?</a>-->

      </form>
    </div>


    <?php
        include_once "fragments/site_footer.php"; //update admin login site footer
    ?>
  </body>
</html>
