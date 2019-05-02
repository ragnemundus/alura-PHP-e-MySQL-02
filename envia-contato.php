<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

// Variaveis do form html
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = 2;             // Enable verbose debug output
  $mail->isSMTP();                  // Set mailer to use SMTP
  $mail->Host       = 'localhost';  // Specify main and backup SMTP servers
  $mail->Port       = 1025;         // TCP port to connect to
  $mail->SMTPAuth   = false;        // Enable SMTP authentication
  $mail->SMTPSecure = false;        // Disable TLS or SSL

  //Recipients
  $mail->setFrom('sistema@local.host', 'Sistema');
  $mail->addAddress("{$email}", "{$nome}");
  
  // Content
  $mail->isHTML(true);
  $mail->Subject = "Email de contato da loja";
  $mail->Body    = "<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>";
  $mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

  $mail->send();
  $_SESSION["success"] = "Mensagem enviada com sucesso.";
  header("Location: /");
} catch (Exception $e) {
  $_SESSION["danger"] = "Erro ao enviar mensagem: " {$mail->ErrorInfo};
  header("Location: contato.php");
}

die();