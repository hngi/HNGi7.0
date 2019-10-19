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
          if ($msg != null) {
          } elseif (!$check_email) {
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
  <link rel="stylesheet" href="css/contactform.css">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">

</head>

<body>
  
<?php include('fragments/site_header.php'); ?>


  <div class="form1">
    <form class="form is-login" method="post">
      <h2 class="heading">Not a Frequently Asked Question?<br>Contact us below</h2>
      
        <?php
            if(!empty($error)){
                echo "<h4 class='text-danger text-center'>".$error."</h4>";
            }
             if(!empty($mess)){
                echo "<h4 class='text-success text-center' style='color: green;'>".$mess."</h4>";
            }
            if (!empty($msg)) {
              echo "<h4 class='text-danger text-center' style='color: red;'>".$msg."</h4>";
            }
            if (!empty($msg2)) {
              echo "<h4 class='text-danger text-center' style='color: red;'>".$msg2."</h4>";
            }
        ?>
      
      <div class="form__field">
        <i class="material-icons"> perm_identity </i>
        <input type="text" name="name" placeholder="Name">

      </div>
      <div class="form__field">
        <i class="material-icons">email</i>
        <input type="email" name="email" placeholder="Email">

      </div>
      <div class="form__field">
        <i class="material-icons">subject</i>
        <input type="text" name="subject" placeholder="Subject">
      </div>
      <div class="form__field">
        <i class="material-icons">create</i>
        <textarea minlength="20" name="message" placeholder="Write a message"></textarea>
      </div>
      <input type="submit" class="submit" name="contact-btn" value="SEND MESSAGE">
    </form>
  </div>

  
  <?php include('fragments/site_footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>

</html>