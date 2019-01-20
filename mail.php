<?php
if(isset($_POST["submit"])) {
$recipient = "sunnygorle1234@gmail.com"; //my email
echo $subject = 'Email message from Point Plumbing';

echo $email = $_POST["_replyto"];
echo  $message = $_POST["message"];
echo  $sub = $_POST["_subject"];

 $mailBody="Sub: $sub\nEmail: $email\n\n$message"; 

 mail($recipient, $subject, $mailBody, "From: $name <$email>");

echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

}
?>
