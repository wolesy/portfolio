<html>
<head>
<title>Testing Global and Local Variables</title>
</head>
<body>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer();

$message = $_POST["Message"].?><br><?php"\n From: ".$_POST["Name"].?><br><?php"\n Email: ".$_POST['Email'].?><br><?php"\n Number: ".$_POST["Number"];
$email = $_POST['Email'];

$mail->isSMTP();

$mail->SMTPAuth   = true;
$mail->Host = 'cameronscholes.com';
$mail->Port = 587;
$mail->Username = "no-reply@cameronscholes.com";
$mail->Password = "Selby2017!";

$mail->SetFrom("no-reply@cameronscholes.com", "Cameron Scholes");
$mail->addAddress("hello@cameronscholes.com");

$mail->Subject = "New Enquiry";
$mail->isHTML = false;
$mail->Body = $message;
$mail->AltBody = $message;

$mail->send();





if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo '<script>alert("Your email has been sent, thank you for getting in touch!");</script>';

} ?>
