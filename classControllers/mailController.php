<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require '../config/database.php';

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
                       <b style='color:seablue;'>Email: $email <br> Password: $password</b> <br> <a href='https://hngi7.hng.tech/forgotpassword'>Follow this link to request for a password</a>
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
function forGetPasswordMail($url,$subject,$email,$fullname)
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
    $mail->setFrom('alisataylorm.m@gmail.com',$url);
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
                      
                       <p>You recently requested to reset your password for your HNGi account.<br>
                        Use the link below to reset it.<br>
                        This password reset is only valid for the next 24 hours.
                        Reset your password $fullname<br><br></p>

                       <p>For security, If you did not request a password reset, please ignore this email or <a href='http://hngi7.hng.tech/contactform'> Contact support</a> if you have questions.</p>

                       <p>If you’re having trouble clicking the link above, copy and paste the URL below into your web browser.

                       <br> <a href='http://hngi7.hng.tech/admin_login'>Follow this link to login</a></p>
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
// mail function to send mail to aspiring mentors that applied
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
    $mail->Subject = "Thank you for your application";
    $mail->Body    =  '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width" name="viewport"/>
<!--[if !mso]><!-->
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
<!--<![endif]-->
<style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}

		table,
		td,
		tr {
			vertical-align: top;
			border-collapse: collapse;
		}

		* {
			line-height: inherit;
		}

		a[x-apple-data-detectors=true] {
			color: inherit !important;
			text-decoration: none !important;
		}
	</style>
<style id="media-query" type="text/css">
		@media (max-width: 625px) {

			.block-grid,
			.col {
				min-width: 320px !important;
				max-width: 100% !important;
				display: block !important;
			}

			.block-grid {
				width: 100% !important;
			}

			.col {
				width: 100% !important;
			}

			.col>div {
				margin: 0 auto;
			}

			img.fullwidth,
			img.fullwidthOnMobile {
				max-width: 100% !important;
			}

			.no-stack .col {
				min-width: 0 !important;
				display: table-cell !important;
			}

			.no-stack.two-up .col {
				width: 50% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num8 {
				width: 66% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num3 {
				width: 25% !important;
			}

			.no-stack .col.num6 {
				width: 50% !important;
			}

			.no-stack .col.num9 {
				width: 75% !important;
			}

			.video-block {
				max-width: none !important;
			}

			.mobile_hide {
				min-height: 0px;
				max-height: 0px;
				max-width: 0px;
				display: none;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide {
				display: block !important;
				max-height: none !important;
			}
		}
	</style>
</head>
<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;">
<!--[if IE]><div class="ie-browser"><![endif]-->
<table bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#FFFFFF"><![endif]-->
<div style="background-color:#FFFFFF;">
<div class="block-grid two-up" style="Margin: 0 auto; min-width: 320px; max-width: 605px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#FFFFFF;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:605px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="302" style="background-color:transparent;width:302px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:0px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 302px; display: table-cell; vertical-align: top; width: 302px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:20px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<div align="center" class="img-container center autowidth fullwidth" style="padding-right: 0px;padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><a href="https://beefree.io" tabindex="-1" target="_blank"> <img align="center" alt="Image" border="0" class="center autowidth fullwidth" src="https://res.cloudinary.com/dsuxbd237/image/upload/v1572306521/xbepbuqwelogh0mrvxvk.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; width: 100%; max-width: 302px; display: block;" title="Image" width="302"/></a>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align="center" width="302" style="background-color:transparent;width:302px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:20px; padding-bottom:20px;"><![endif]-->
<div class="col num6" style="max-width: 320px; min-width: 302px; display: table-cell; vertical-align: top; width: 302px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:20px; padding-bottom:20px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<table cellpadding="0" cellspacing="0" class="social_icons" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table activate="activate" align="center" alignment="alignment" cellpadding="0" cellspacing="0" class="social_table" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: undefined; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;" to="to" valign="top">
<tbody>
<tr align="center" style="vertical-align: top; display: inline-block; text-align: center;" valign="top">
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 3px; padding-left: 3px;" valign="top"><a href="https://www.facebook.com/" target="_blank"><img alt="Facebook" height="32" src="https://res.cloudinary.com/dsuxbd237/image/upload/v1572306522/vwd2oxsgq81q0zbl4ndw.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="Facebook" width="32"/></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 3px; padding-left: 3px;" valign="top"><a href="https://twitter.com/" target="_blank"><img alt="Twitter" height="32" src="https://res.cloudinary.com/dsuxbd237/image/upload/v1572306522/hfgm5ukxig7rr4v8iztz.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="Twitter" width="32"/></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 3px; padding-left: 3px;" valign="top"><a href="https://instagram.com/" target="_blank"><img alt="Instagram" height="32" src="https://res.cloudinary.com/dsuxbd237/image/upload/v1572306522/goacthlpvdx4dkidcbb0.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="Instagram" width="32"/></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 3px; padding-left: 3px;" valign="top"><a href="https://www.linkedin.com/" target="_blank"><img alt="LinkedIn" height="32" src="https://res.cloudinary.com/dsuxbd237/image/upload/v1572306522/pz36orc1rifwlgrwhrj6.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="LinkedIn" width="32"/></a></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:#f0f0f0;">
<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 605px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f0f0f0;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:605px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="605" style="background-color:transparent;width:605px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 605px; display: table-cell; vertical-align: top; width: 605px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<div align="center" class="img-container center autowidth">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center autowidth" src="https://res.cloudinary.com/dsuxbd237/image/upload/v1572306521/xbepbuqwelogh0mrvxvk.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 514px; display: block;" title="Image" width="514"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
<div style="color:#333333;font-family:"Lato", Tahoma, Verdana, Segoe, sans-serif;line-height:1.2;padding-top:25px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-size: 12px; line-height: 1.2; font-family: "Lato", Tahoma, Verdana, Segoe, sans-serif; color: #333333; mso-line-height-alt: 14px;">
<p style="font-size: 24px; line-height: 1.2; text-align: center; mso-line-height-alt: 29px; margin: 0;"><span style="font-size: 24px;"><strong>Thank you for your application</strong></span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
<div style="color:#A5A5A6;font-family:"Lato", Tahoma, Verdana, Segoe, sans-serif;line-height:1.5;padding-top:0px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-size: 12px; line-height: 1.5; font-family: "Lato", Tahoma, Verdana, Segoe, sans-serif; color: #A5A5A6; mso-line-height-alt: 18px;">
<p style="font-size: 14px; line-height: 1.5; text-align: center; mso-line-height-alt: 21px; margin: 0;">Dear' . $name . ', your application to be a mentor was successful, and is being reviewed. We will kindly get back to you shortly. <br>You can visit our website by clicking on the button below. Thank you</p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<div align="center" class="button-container" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:27pt; width:155.25pt; v-text-anchor:middle;" arcsize="12%" strokeweight="1.5pt" strokecolor="#B2D476" fillcolor="#B2D476"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Tahoma, Verdana, sans-serif; font-size:14px"><![endif]-->
<div style="text-decoration:none;display:block;color:#ffffff;background-color:#6d95e0;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;width:30%; width:30%;;border-top:2px solid #6d95e0;border-right:0px solid #6d95e0;border-bottom:6px solid #6d95e0;border-left:0px solid #6d95e0;padding-top:0px;padding-bottom:0px;font-family:"Lato", Tahoma, Verdana, Segoe, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:20px;padding-right:20px;font-size:14px;display:inline-block;">
<span style="font-size: 12px; line-height: 2; mso-line-height-alt: 24px;"><span style="font-size: 14px; line-height: 28px;"><a href="https://hngi7.hng.tech">Visit us</a></span></span>
</span></div>
<!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
</div>
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:#ffffff;">
<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 605px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#ffffff;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:605px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="605" style="background-color:transparent;width:605px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 605px; display: table-cell; vertical-align: top; width: 605px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 15px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
<div style="color:#959595;font-family:"Lato", Tahoma, Verdana, Segoe, sans-serif;line-height:1.5;padding-top:15px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
<div style="font-size: 12px; line-height: 1.5; font-family: "Lato", Tahoma, Verdana, Segoe, sans-serif; color: #959595; mso-line-height-alt: 18px;">
<p style="font-size: 14px; line-height: 1.5; text-align: center; mso-line-height-alt: 21px; margin: 0;">This is a sample template from <strong>BEE editor </strong></p>
<p style="font-size: 14px; line-height: 1.5; text-align: center; mso-line-height-alt: 21px; margin: 0;">Create beautiful email messages at no cost.</p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
</td>
</tr>
</tbody>
</table>
<!--[if (IE)]></div><![endif]-->
</body>
</html>';
    $mail->AltBody = 'Thank you for applying to be a mentor, your application is being reviewed. We will get back to you shortly.';
    $mail->addReplyTo($email, $name);

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}