<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $POST['Subject'];
$message = $_POST['Message'];
$formcontent="From: $name \n Subject: $subject \n Message: $message";
$recipient = "c.sabyasachi99@gmail.com";
$subject = "Website-Sikonic-Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! We will get back to you soon.";
?>