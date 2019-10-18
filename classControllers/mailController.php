<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require '../config/database.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

function sendMail($email, $body, $subject, $url)
{
  global $mail;


  try {
    //Server settings
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hnginterns9@gmail.com';                     // SMTP username
    $mail->Password   = 'California008';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('eshy008@gmail.com', 'Team-Asclepius');
    $mail->addAddress("$email");     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('no-reply@gmail.com', 'No-Reply');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $url = $url;
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "<html><body>
                  <p style='color: #f40;'>'.$body.'</p>  
    </body></html>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}


//for contact us form
function contactMail($email, $name, $subject, $body)
{
  global $mail;


  try {
    //Server settings
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hnginterns9@gmail.com';                     // SMTP username
    $mail->Password   = 'California008';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress("$email");     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('no-reply@gmail.com', 'No-Reply');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');

      // Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      // Content
    ;
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    =  "<html><body>
                  <p style='color: #f40;'>'.$body.'</p>  
    </body></html>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->addReplyTo($email, $name);

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
