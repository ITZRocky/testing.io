<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['username'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rohithv.18cs@saividya.ac.in'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'lakshmi1234'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('rohithv.18cs@saividya.ac.in'); // Gmail address which you used as SMTP server
    $mail->addAddress('vrohith2710@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Subject: $subject <br>Message : $message</h3>";

    $mail->send();
}
header("Location:index.html")
?>
      