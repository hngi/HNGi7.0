<?php
require 'classControllers/init.php';

$contact_mail = new AdminClass;
$validation = new Validation();

if (isset($_POST['contact-btn'])) {

  function random_strings($length_of_string) { 
		
    return substr ((date('dmys')), 0, $length_of_string); 
  } 
  //use this as an example to get form input data
  $name = $database->escape_string($_POST["name"]);
  $email = $database->escape_string($_POST["email"]);
  $subject = $database->escape_string($_POST["subject"]);
  $message = $database->escape_string($_POST["message"]);
  $ticket = random_strings(10);
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

      contactMail($email, $ticket, $name, $subject, $body);
      $mess = '<p style="text-align:center;">Message Sent! you will get a feedback from us thank you!</a>';

    }
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Newsletter</title>

    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="css/dashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/newsletter.css">

</head>

<body>
        <?php include('fragments/sidebar.php'); ?>
        <div class="container">
  <!-- first card -->
        <div class="cards">
        <div class="image">
                <img src ="images/image 3.png" alt="image" class="image">
        </div>
        <div class="heading"> 
                <h3 style="color: white"><strong>Mark Essien</strong></h3> 
                <h5 style="color: white">Steps Down as <br>
                HNG Internship CEO</h5>
                <p>Get inspired by these fantastic email newsletter examples from real companies. ... newsletters to inspire you to make the best email newsletter for your company possible. ..... </p>
        </div> 
        <div class="para">
          <p>Originally published Mar 3, 2019 10:30:00 PM, updated July 23 2019.</p>
          <button> <a href="#" class="button">READ MORE</a></button>
        </div>

        </div>
<!-- second card -->
        <div class="cards">
        <div>
                <img src ="images/image 7.png" alt="image" class="image">
        </div>    
        <div class="heading"> 
                <h3><strong>Mark Essien</strong></h3> 
                <h5>Steps Down as <br>
                HNG Internship CEO</h5>
                <p>Get inspired by these fantastic email newsletter examples from real companies. ... newsletters to inspire you to make the best email newsletter for your company possible. ..... </p>
        </div>   
        <div class="para">
                <p>Originally published Mar 3, 2019 10:30:00 PM, updated July 23 2019.</p>
                <button> <a href="#" class="button">READ MORE</a></button>
        </div>

        </div>

<!-- third card -->
        <div class="cards">
        <div>
                <img src ="images/image 8.png" alt="image" class="image">
        </div>    
        <div class="heading"> 
                <h3><strong>Mark Essien</strong></h3> 
                <h5>Steps Down as <br>
                HNG Internship CEO</h5>
                <p>Get inspired by these fantastic email newsletter examples from real companies. ... newsletters to inspire you to make the best email newsletter for your company possible. ..... </p>
        </div>   
        <div class="para">
                <p>Originally published Mar 3, 2019 10:30:00 PM, updated July 23 2019.</p>
                <button> <a href="#" class="button">READ MORE</a></button>
        </div>
        </div>

        </div>
</body>
<script  type="text/javascript" src="js/sidebar.js"></script>
</html>







