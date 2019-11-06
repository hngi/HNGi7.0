<?php
require_once "classControllers/init.php";
$request = new Certificate;

if (isset($_POST["certificate-btn"])) {
  $error = '';
  $request->name = $_POST["name"];
  $request->email = $_POST["email"];
  $request->slack_username = $_POST["slack_username"];
  $request->year = $_POST["year"];
  if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["slack_username"]) || empty($_POST["year"])) {
    $error = "All feild are required";
  }else {
    $resp = $request->requestCertificate();
    $request_mess = '<p style="text-align:center;">Application successful , you will be inform when your certificate is ready thank you!</a>';
    
  }
  
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Request For Certificate</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/header-footer.css">
  <link rel="stylesheet" type="text/css" href="css/request_certificate.css">
  <link rel="icon" type="img/png" href="images/hng-favicon.png">
</head>

<body>
  <div class="heading">
    <?php include('fragments/site_header.php'); ?>

    <div class="container main-header-content">
      <h1 class="text-center main-heading">Request for your HNG Certificate</h1>
      <p class="text-center mt-4 mb-1">Thanks for taking part in the HNG Internship and making it to the end.</p>
      <p class="text-center">Kindly fill the form below.</p>

    </div>

  </div>

  <main class="main">
    <div class="container  pb-5">
      <form class="main-form" method="post">
        <small class="please-note text-center mb-5 ">Kindly note that this Certificate will be issued to only those who completed the
          program.</small>
        <?php
        
        ?>
        <div id="">
          <?php
          if (!empty($request_mess)) {
            echo "<center><h4 class='text-success text-center success' style='background: #D3ECDB; color: #2B5036; padding: 6px; width:66%;'>" . $request_mess . "</h4></center>";
          }
          if (!empty($error)) {
            echo "<h4 style='text-align:center; color: red;'>$error</h4>";
          }
         
          ?>
        </div>
          <div class="form-group ">
            <div class="mx-auto row">
              <label class="mx-auto col-md-8 pl-0" for="name">Your Full Name</label>
            </div>
            <div class="mx-auto row">
              <input type="text" class=" mx-auto col-md-8 form-control" placeholder="Enter your Name"  required name="name" id="name">
            </div>
          </div>

          <div class="form-group ">
            <div class="mx-auto row">
              <label class="mx-auto col-md-8 pl-0" for="email">Your Email</label>
            </div>
            <div class="mx-auto row">
              <input type="email" class=" mx-auto col-md-8 form-control" placeholder="Enter your email address" required name="email" id="email">
            </div>
          </div>

          <div class="form-group ">
            <div class="mx-auto row">
              <label class="mx-auto col-md-8 pl-0" for="text">Slack username</label>
            </div>
            <div class="mx-auto row">
              <input type="text" class=" mx-auto col-md-8 form-control" placeholder="Enter your Slack username" required name="slack_username" id="name">
            </div>
          </div>

          <div class="form-group ">
            <div class="mx-auto row">
              <label class="mx-auto col-md-8 pl-0" for="year">What Date did you finish?</label>
            </div>
            <div class="row mx-auto">
              <input type="date" class=" mx-auto col-md-8 form-control" placeholder="Enter the Date you were an intern" required name="year" id="year">
            </div>

          </div>


          <input type="submit" class="btn submit-btn px-5 mt-4 mx-auto" value="Submit" name="certificate-btn">

      </form>
    </div>
  </main>

  <?php include "fragments/site_footer.php"; ?>
</body>

</html>