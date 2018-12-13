<?php
  require_once('class.phpmailer.php');
  include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
  $email=$_POST['email'];
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "spardha2k18.pqs";  // GMAIL username
  $mail->Password   = "Spardha2k18#PQS";            // GMAIL password

  $mail->SetFrom('spardha2k18.pqs@gmail.com', 'PQS'); // Change the name as you want
  $mail->Subject    = "PQS FORGOT PASSWORD";
  $mail->Body = "you are requested for changing the password please visit the administrator ";
  $mail->AddAddress($email);
  $mail->Send();
  echo(file_get_contents("forgot_feedback.html"));
  ?>