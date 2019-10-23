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
      $mess = 'Message Sent you get a feedback from us thank you!';

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
<?php
    include_once "fragments/site_header.php";
?>

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
 <?php
    include_once "fragments/site_footer.php";
?>
</body>

</html>