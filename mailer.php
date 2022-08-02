<?php
ini_set('display_errors', '1');
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

//Load Composer's autoloader
require 'vendor/autoload.php';

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$message = $_REQUEST["message"];

$mail = new PHPMailer(true);

//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
/*$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "mail.mscwebservices.net";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = 'matteo@mscwebservices.net';  // SMTP username
$mail->Password = '&kQ@G=!yV%0S'; // SMTP password
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
//Set the encryption mechanism to use - STARTTLS or SMTPS
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

$mail->AddAddress("matteo@mscwebservices.net");

$mail->setFrom('matteo@mscwebservices.net');*/

$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = 'phonicpressure@gmail.com';  // SMTP username
$mail->Password = 'dosfhrzgkinuuwfo'; // password generated through app password in gmail account
$mail->SMTPSecure = "tls";
$mail->Port = 587;
//Set the encryption mechanism to use - STARTTLS or SMTPS
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

$mail->AddAddress("phonicpressure@gmail.com");

$mail->setFrom('phonicpressure@gmail.com');

$mail->AddReplyTo($email, $name);

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                // set email format to HTML

$mail->Subject = "Contact Form Submitted";

$message = "Name: " . $name .
           "<br>Email: " . $email .
           "<br>Phone: " . $phone .
           "<br>Message: " .  $message;


$mail->Body = $message;
$mail->AltBody = $message;


if (!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo "success";
}
