<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
try {
//Sender
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'phucphgch220497@fpt.edu.vn';
$mail->Password = 'rlflffmybqhktafx';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
//Recipient
$mail->setFrom('phucphgch220497@fpt.edu.vn');

$mail->addAddress('phucphgch220497@fpt.edu.vn');
//Content
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $content;
//Send mail
$mail->send();
//redirect to success page
header('Location: mail_success.html.php');
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: { $mail->ErrorInfo}";
}