<?php require 'classControllers/init.php';
$interns = new Admins;
if (isset($_POST['login'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $login = $interns->adminLogin($email, $password);
  $errors = '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: #F7CFCF; color: #6A0E0D; width: 98% !important; text-align: center;">Wrong Credentials</p>';
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login</title>
  <link rel="shortcut icon" href="https://res.cloudinary.com/dekillerj/image/upload/v1570648980/brand-logo.png" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="icon" type="img/png" href="images/hng-favicon.png">
  <link rel="stylesheet" type="text/css" href="css/header-footer.css">
  <link rel="stylesheet" href="css/loginadmin.css">
  <script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script>
    function signup() {

      var email = $('#email').val();
      var password = $('#password').val();

      $.post($login.
          '?login=yes', {
          email: email,
          password: password
        },
        function(data) {
          $('#result').html(data);
        });
    }
  </script>
  <style>
  .inputWithIcon i{
    margin-left: 2.5px;
  }
  </style>
</head>

<body>
  <?php include('fragments/site_header.php'); ?>

 <section class="container-fluid">

    <form class="form-container" method="post">

      <h2 class="login-heading">Login as an Admin</h2>
      <?php
      if (!empty($errors)) {

        echo $errors;
      }
      if(isset($_GET['getmess'])){

        echo '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: green; color: #fff; width: 98% !important; text-align: center;>'.$_GET['getmess'].'</p>';

        
      }

      if (isset($_GET["blocked"])) {
        echo  '<p style="margin: 5px; padding: 5px 10px 5px 10px; background: #F7CFCF; color: #6A0E0D; width: 100% !important; text-align: center;">Your account has been de-activated, Please contact a super admin.</p>';
      }

      ?>
      <p id="result"></p>
      <div class="inputWithIcon">
      <i class="fa fa-envelope"></i>
      <input type="email" name="email" id="email" placeholder="Enter your Email" required />
      </div>

      <div class="inputWithIcon">
        <i class="fa fa-key"></i>
        <input type="password" name="password" id="password" placeholder="Enter your Password" required>
      </div>

      <button type="submit" onclick="signup()" name="login">LOG IN</button>
      <a href="forgotpassword.php" class="text-danger small-text">Forgot Password?</a>
    </form>
  </section>
    <?php include('fragments/site_footer.php'); ?>

</body>

</html>
