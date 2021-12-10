<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap/bootstrap-formhelpers.min.css" rel="stylesheet" />
    <link href="css/main.min.css" rel="stylesheet" />
	<link href="css/override.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animations.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/bootstrap/bootstrap-formhelpers.min.js"></script>
    <script src="js/built.min.js"></script>
    <script src="js/musicplayer-min.js"></script>

    <title>Phonic Pressure</title>

</head>
<body>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mailSent = false;
$phoneErr = $emailErr = $userMessageErr = $nameErr ="";
$name = $userEmail = $userMessage = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $post = true;

    if(isset($_GET['email'])) {
        $emailTemplate = $_GET['email'];
    } else {
        $emailTemplate = '';
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $post = false;
    } else {
        $userEmail = test_input($_POST["email"]);

        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $post = false;
        }
    }

    if (empty($_POST["message"])) {
        $userMessageErr = "Message is required";
        $post = false;
    } else {
        $userMessage = test_input($_POST["message"]);
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
        $post = false;
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $post = false;
    } else {
        $name = test_input($_POST["name"]);
    }

    if ($post != false) {

        $_POST['submit'] = "success";

        $mail = new PHPMailer( true );

        try {

            $email = "matteo@mscwebservices.net";
            $userMessage = $_POST["message"];

            $mail->SMTPDebug = 0;

            $mail->Username = 'matteo@mscwebservices.net';
            $mail->Password = 'Q5i#jSbmaF';

            $mail->SMTPSecure = 'tls';
            $mail->Host = "mail.mscwebservices.net";  // specify main and backup server
            $mail->Port = '25';
            $mail->IsSMTP(); // set mailer to use SMTP
            $mail->SMTPAuth = true;     // turn on SMTP authentication
            //$mail->AuthType = 'XOAUTH2';
            //$mail->SMTPSecure = "ssl";

            $mail->CharSet = "UTF-8";

            //Set who the message is to be sent from
            //For gmail, this generally needs to be the same as the user you logged in as
            $mail->setFrom($email);

            $mail->AddAddress($email);

            //$mail->AddAddress("ellen@example.com");                  // name is optional
            $mail->AddReplyTo($userEmail);

            $mail->WordWrap = 50;                                 // set word wrap to 50 characters
            //$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
            //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
            $mail->IsHTML(true);                                  // set email format to HTML

            $mail->Subject = "Phonic Pressure contact form";

            $message = "Name: " . $name .
                "<br>Email: " . $userEmail .
                "<br>Phone: " . $phone .
                "<br>Message: " . $userMessage;

            $mail->Body = $message;
            $mail->AltBody = $message;

            /*if (!$mail->Send()) {
                echo "Message could not be sent. <p>";
                //echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "success";
            }*/

            $mail->send();
            //echo 'Message has been sent';
            $mailSent = true;

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

