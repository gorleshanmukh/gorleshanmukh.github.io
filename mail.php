<?php
   if( $_GET["_subject"] && $_GET["_replyto"] && $_GET["message"] ) {
	  
	$subject = $_GET["_subject"];
	$email = $_GET["_replyto"];
	$msg = $_GET["message"];
require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true; 
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "sunnygorle1234@gmail.com";
   $mail ->Password = "aezakmigta5";
   $mail ->SetFrom($email);
   $mail ->Subject = $subject;
   $mail ->Body = $msg;
   $mail ->AddAddress("sunnygorle1234@gmail.com");

   if(!$mail->Send())
   {
       echo "Mail Not Sent";

   }
   else
   {
       echo "Mail Sent";
   }


 }
?>

