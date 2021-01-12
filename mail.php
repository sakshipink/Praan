<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$purpose = $_POST['purpose'];
$formcontent="From: $name \n Message: $message";
$recipient = "ssdeshp8@ncsu.edu";
$subject = "Contact Form : $purpose";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: Contact___1.html");
?>