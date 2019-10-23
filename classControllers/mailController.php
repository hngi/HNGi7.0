<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require '../config/database.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

function sendNewAdminMail($email, $password, $subject, $body)
{
  global $mail;


  try {
    //Server settings
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username = 'alisataylorm.m@gmail.com';
    $mail->Password = 'alisa1074';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('alisataylorm.m@gmail.com', 'HNG SUPPER ADMIN');
    $mail->addAddress("$email");     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('no-reply@gmail.com', 'No-Reply');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "$body
                  <tr>
    <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                       <b style='color:seablue;'>Email: $email <br> Password: $password</b> <br> <a href='https://hngi7.herokuapp.com/admin_login.php'>Follow this link to login</a>
                      </td>
                  </tr>
<tr>
<td bgcolor='#808080' style='padding: 30px 30px 30px 30px;'>
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
  <tr>
    <td style='color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;' width='75%'>
      &reg; HNGi 7.0, 2019<br/>
      </td>
    <td align='right' width='25%'>
      <table border='0' cellpadding='0' cellspacing='0'>
        <tr>
          <td style='font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;'>
            <a href='http://www.twitter.com/' style='color: #ffffff;'>
              <img src='https://cdn3.iconfinder.com/data/icons/flat-icons-web/40/Twitter-512.png' alt='Twitter' width='38' height='38' style='display: block;' border='0' />
            </a>
          </td>
          <td style='font-size: 0; line-height: 0;' width='20'>&nbsp;</td>
          <td style='font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;'>
            <a href='http://www.twitter.com/' style='color: #ffffff;'>
              <img src='https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/facebook_circle-512.png' alt='Facebook' width='38' height='38' style='display: block;' border='0' />
            </a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>";

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}



//for contact us form
function contactMail($email, $ticket, $name, $subject, $body)
{
  global $mail;


  try {
    //Server settings
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username = 'alisataylorm.m@gmail.com';
    $mail->Password = 'alisa1074';                              // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('alisataylorm.m@gmail.com', $name);
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
    $mail->Body    =  "<html>
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
                  <img src='https://res.cloudinary.com/phiileo/image/upload/v1571147073/brand-logo_tx0mdt.png' alt='HNGi 7.0' width='300' height='150' style='display: block;' />
                </td>
              </tr>
              <tr>
                <td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
                  <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                    <tr>
                      <td style='color: #153643; font-family: Arial, sans-serif; font-size: 24px;'>
                        <b>Dear, $name</b>
                      </td>
                    </tr>
                    <tr>
                      <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                        Your ticket has been created with the id #ticket-$ticket.
                      </td>
                      </tr>
                                    <tr>
                      <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                        Message:$body
                                        </td>
                                    </tr>
              <tr>
                <td bgcolor='#808080' style='padding: 30px 30px 30px 30px;'>
                  <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                    <tr>
                      <td style='color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;' width='75%'>
                        &reg; HNGi 7.0, 2019<br/>
                        </td>
                      <td align='right' width='25%'>
                        <table border='0' cellpadding='0' cellspacing='0'>
                          <tr>
                            <td style='font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;'>
                              <a href='http://www.twitter.com/' style='color: #ffffff;'>
                                <img src='https://cdn3.iconfinder.com/data/icons/flat-icons-web/40/Twitter-512.png' alt='Twitter' width='38' height='38' style='display: block;' border='0' />
                              </a>
                            </td>
                            <td style='font-size: 0; line-height: 0;' width='20'>&nbsp;</td>
                            <td style='font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;'>
                              <a href='http://www.twitter.com/' style='color: #ffffff;'>
                                <img src='https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/facebook_circle-512.png' alt='Facebook' width='38' height='38' style='display: block;' border='0' />
                              </a>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </body>
    </html>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->addReplyTo($email, $name);

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
