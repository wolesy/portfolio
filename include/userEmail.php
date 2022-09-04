<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer();

$message = include 'emailContent.html';;
$email = $_POST['Email'];

$mail->isSMTP();

$mail->SMTPAuth   = true;
$mail->Host = 'cameronscholes.com';
$mail->Port = 587;
$mail->Username = "no-reply@cameronscholes.com";
$mail->Password = "Selby2017!";

$mail->SetFrom("no-reply@cameronscholes.com", "Cameron Scholes");
$mail->addAddress($email);

$mail->Subject = "New Enquiry";
$mail->isHTML = true;
$mail->Body = $message;
$mail->AltBody = $message;

$mail->send();





if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  header('location: ../contact.php');

} ?>
