<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$userMail = new PHPMailer();

$message = include 'emailContent.html';;
$email = $_POST['Email'];

$userMail->isSMTP();

$userMail->SMTPAuth   = true;
$userMail->Host = 'cameronscholes.com';
$userMail->Port = 587;
$userMail->Username = "no-reply@cameronscholes.com";
$userMail->Password = "Selby2017!";

$userMail->SetFrom("no-reply@cameronscholes.com", "Cameron Scholes");
$userMail->addAddress($email);

$userMail->Subject = "New Enquiry";
$userMail->isHTML = true;
$userMail->Body = $message;
$userMail->AltBody = $message;

$userMail->send();





if(!$userMail->Send()) {
  echo "Mailer Error: " . $userMail->ErrorInfo;
} else {
  header('location: ../contact.php');

} ?>
