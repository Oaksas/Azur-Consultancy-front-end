<?php

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];

$message = $_POST['message'];

$emailFrom = 'YNCCC ';
$emailSubject = $subject;
$emailBody = 'Sender : '.
$name."\n E-mail :".
$email."\n Message : ".
$message."\n";

$to = 'aman.getnet2@gmail.com';
$headers = 'From :'. $emailFrom ."\r\n";
$headers.='Reply-To : '.$email. "\r\n"; 
mail($to,$emailSubject,$emailBody,$headers);
header("Location: contact.php");

?>