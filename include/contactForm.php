<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer();

$message = $_POST["Message"]."<br>\n From: ".$_POST["Name"]."<br>\n Email: ".$_POST['Email']."<br>\n Number: ".$_POST["Number"];
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
$mail->isHTML = true;
$mail->Body = $message;
$mail->AltBody = $message;

if(!$mail->send()){
  echo $mail->ErrorInfo;
}else{
  $userMail = new PHPMailer();


  $email = $_POST['Email'];

  $userMail->isSMTP();

  $userMail->SMTPAuth   = true;
  $userMail->Host = 'cameronscholes.com';
  $userMail->Port = 587;
  $userMail->Username = "no-reply@cameronscholes.com";
  $userMail->Password = "Selby2017!";

  $userMail->SetFrom("no-reply@cameronscholes.com", "Cameron Scholes");
  $userMail->addAddress($email);

  $userMail->Subject = "Thank you for getting in touch!";
  $userMail->isHTML = true;
  $userMail->Body = file_get_contents('emailContent.html');
  $userMail->AltBody = $message;







  if(!$userMail->Send()) {
    echo "User mailer Error: " . $userMail->ErrorInfo;
  } else {
    echo '<script>alert("Your email has been sent, thank you for getting in touch!");location="../contact.php";</script>';



  }
}
?>
