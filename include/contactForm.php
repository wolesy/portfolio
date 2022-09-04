<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer();

$message = $_POST["Message"]."\n From: ".$_POST["Name"]."\r\n Email: ".$_POST['Email']."\r\n Number: ".$_POST["Number"];
$email = $_POST['Email'];

$mail->isSMTP();

$mail->SMTPAuth   = true;
$mail->Host = 'smtp.mailgun.org';
$mail->Port = 587;
$mail->Username = "postmaster@sandbox3263ba336daa4f72b79dd3a9f4cfdd46.mailgun.org";
$mail->Password = "f25c5b5e2f9ccd9d2a2c8e8b25dc1379-07e2c238-750878f0";

$mail->SetFrom("postmaster@sandbox3263ba336daa4f72b79dd3a9f4cfdd46.mailgun.org", "Cameron Scholes");
$mail->AddReplyTo("cameron.scholes@hotmail.com", "Cameron Scholes");
$mail->addAddress("cameron.scholes@hotmail.com");

$mail->Subject = "New Enquiry";
$mail->isHTML = false;
$mail->Body = $message;
$mail->AltBody = $message;

$mail->send();





if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo '<script>alert("Your email has been sent, thank you for getting in touch!"); location="../contact.php";</script>';

}
?>
