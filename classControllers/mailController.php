<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//require 'config/constants.php';




// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

function sendNewAdminMail($email, $subject, $body)
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
                        <b style='color:seablue;'>Email: $email <br></b> <br> <a href='https://hngi7.hng.tech/forgotpassword.php'>Follow this link to request for a password</a>
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
                      
                        $body
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



//for contact us form
function forGetPasswordMail($url, $subject, $email, $body)
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
    $mail->setFrom('alisataylorm.m@gmail.com', 'HNG 7.0');
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
    $mail->Body    = "<html>
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
                        <b>Dear, user </b>
                      </td>
                    </tr>
                  <tr>
    <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                      
                       <p>$body</p>

                       <p>For security, If you did not request a password reset, please ignore this email or <a href='http://hngi7.hng.tech/contactform.php'> Contact support</a> if you have questions.</p>

                       <p>If you’re having trouble clicking the link above, copy and paste the URL below into your web browser.

                       <br> <a href='http://hngi7.hng.tech/admin_login.php'>Follow this link to login</a></p>
                     <p> Thanks,<br>
                      The User Suppport Team.</p>

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



function send_general_email($subject, $email, $message, $bcc = false) //Add blind copy to email
{ //function to send
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

    $url = "https://" . $_SERVER['HTTP_HOST'];

    //Recipients
    $mail->setFrom('alisataylorm.m@gmail.com', "HNGi7");
    $mail->addAddress("$email");     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('no-reply@gmail.com', 'No-Reply');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    if (is_array($bcc)) {
      foreach ($bcc as $bc) {
        $mail->addBCC("$bc");
      }
    }

      // Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      // Content
    ;
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "<html>
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
                          <b>Dear, User </b>
                        </td>
                      </tr>
                    <tr>
      <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                        
                        <p>$message</p>
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

//Function to send New Interns Mail on Successful Registration
function sendInternMail($email, $fullname, $body)
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
    $mail->setFrom('alisataylorm.m@gmail.com', 'HNGi7');
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
    $mail->Subject = "WELCOME TO HNG INTERNSHIP";
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
                        <b>Dear, $fullname</b>
                      </td>
                    </tr>
                   
              <tr>
                <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                
                  <p>$body</p>
                </td>
              </tr>
               <tr>
                <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                
                 <p>FOR futher enquiry contact us with the link below and If you’re having trouble clicking the link above, copy and paste the URL below into your web browser. <a href='http://hngi7.hng.tech/contactform.php'> Contact support</a> if you have questions.</p>
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
    $mail->addReplyTo($email, $fullname);

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}


//Function to send disapproval message to Interns Mail on Registration status
function  rejectInternMail($email, $fullname, $body)
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
    $mail->setFrom('alisataylorm.m@gmail.com', 'HNGi7');
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
    $mail->Subject = "HNG INTERNSHIP";
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
                        <b>Dear, $fullname</b>
                      </td>
                    </tr>
                   
              <tr>
                <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                
                  <p>$body</p>
                </td>
              </tr>
               <tr>
                <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                
                 <p>FOR futher enquiry contact us with the link below and If you’re having trouble clicking the link above, copy and paste the URL below into your web browser. <a href='http://hngi7.hng.tech/contactform.php'> Contact support</a> if you have questions.</p>
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
    $mail->addReplyTo($email, $fullname);

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

//Function to send approval message to Interns Mail on Registration status
function acceptInternMail($email, $fullname, $body)
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
    $mail->setFrom('alisataylorm.m@gmail.com', 'HNGi7');
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
    $mail->Subject = "HNG INTERNSHIP";
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
                        <b>Dear, User</b>
                      </td>
                    </tr>
                   
              <tr>
                <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                
                  <p>$body</p>
                </td>
              </tr>
               <tr>
                <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                
                 <p>FOR futher enquiry contact us with the link below and If you’re having trouble clicking the link above, copy and paste the URL below into your web browser. <a href='http://hngi7.hng.tech/contactform.php'> Contact support</a> if you have questions.</p>
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
    $mail->addReplyTo($email, $fullname);

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}


//Function to send disapproval message to Interns Mail on Registration status
function   rejectMentorMail($body, $fullname, $email)

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

    $mail->setFrom('alisataylorm.m@gmail.com', "HNG INTERNSHIP");
    $mail->addAddress($email);     // Add a recipient
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

    $mail->Subject = "Thank you for your application";

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
                        <b>Dear, user</b>
                      </td>
                    </tr>
                   
              <tr>
                <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                
                  <p>$body</p>
                </td>
              </tr>
               <tr>
                <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                
                 <p>FOR futher enquiry contact us with the link below and If you’re having trouble clicking the link above, copy and paste the URL below into your web browser. <a href='http://hngi7.hng.tech/contactform.php'> Contact support</a> if you have questions.</p>
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
    $mail->addReplyTo($email, $fullname);

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

//Function to send approval message to Interns Mail on Registration status
function   acceptMentorMail($body, $fullname, $email)
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
    $mail->setFrom('alisataylorm.m@gmail.com', 'HNGi7');
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
    $mail->Subject = "WELCOME TO HNGi7";
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
                        <b>Dear, user</b>
                      </td>
                    </tr>
                   
              <tr>
                <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                
                  <p>$body</p>
                </td>
              </tr>
               <tr>
                <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
                
                 <p>FOR futher enquiry contact us with the link below and If you’re having trouble clicking the link above, copy and paste the URL below into your web browser. <a href='http://hngi7.hng.tech/contactform.php'> Contact support</a> if you have questions.</p>
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
                              <a href='https://twitter.com/hnginternship?s=09' style='color: #ffffff;'>
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
    $mail->addReplyTo($email, $fullname);
    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
// mentor setup mail
function mailMentor($email, $name)
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
    $mail->setFrom('alisataylorm.m@gmail.com', "HNG INTERNSHIP");
    $mail->addAddress($email);     // Add a recipient
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
    $mail->Subject = "Thank you for your application";
    $mail->Body    =  "<html>

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
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

                    <p> Thank you for applying to be a mentor, your application is being reviewed. We will get back to you shortly.</p>
                  </td>
                </tr>
                <tr>
                  <td style='padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>

                    <p>For futher enquiry contact us with the link below and If you’re having trouble clicking the link above, copy and paste the URL below into your web browser. <a href='http://hngi7.hng.tech/contactform.php'> Contact support</a> if you have questions.</p>
                  </td>
                </tr>
                <tr>
                  <td bgcolor='#808080' style='padding: 30px 30px 30px 30px;'>
                    <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                      <tr>
                        <td style='color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;' width='75%'>
                          &reg; HNGi 7.0, 2019<br />
                        </td>
                        <td align='right' width='25%'>
                          <table border='0' cellpadding='0' cellspacing='0'>
                            <tr>
                              <td style='font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;'>
                                <a href='https://twitter.com/hnginternship?s=09' style='color: #ffffff;'>
                                  <img src='https://cdn3.iconfinder.com/data/icons/flat-icons-web/40/Twitter-512.png' alt='Twitter' width='38' height='38' style='display: block;' border='0' />
                                </a>
                              </td>
                              <td style='font-size: 0; line-height: 0;' width='20'>&nbsp;</td>
                              <td style='font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;'>
                                <a href='https://twitter.com/hnginternship?s=09' style='color: #ffffff;'>
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
      </td>
    </tr>
  </table>
</body>

</html>";
    $mail->AltBody = 'Thank you for applying to be a mentor, your application is being reviewed. We will get back to you shortly.';
    $mail->addReplyTo($email, $name);

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
