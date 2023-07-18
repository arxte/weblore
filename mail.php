<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

use JetBrains\PhpStorm\Language;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\STMP;

require "phpmailer/src/Exception.php";
require "phpmailer/src/PHPMailer.php";
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";
$mail->setLanguage("ru", "phpmailer/language/");

$mail->Username = "info@weblore.kz";
$mail->Password = "Ilyasov0315";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;

$mail->setFrom("info@weblore.kz");
$mail->addAddress("weblore.kz@gmail.com");

$mail->isHTML(true);

$mail->Subject = "Номер телефона";
$mail->Body = $_POST['telephone'];

if (!$mail->send()) {
  echo 'error';
} else {
  echo 'norm';
}
