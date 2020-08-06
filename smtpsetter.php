<?php
ob_start();
session_start();
require 'PHPMailer-master/PHPMailerAutoload.php';

global $mail;
$mail= new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'sg2plcpnl0158.prod.sin2.secureserver.net';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "vivekb085@letsmail.co.in";                            // SMTP username
$mail->Password = "vb02071995";                           // SMTP password
$mail->SMTPSecure = 'tls';                     


