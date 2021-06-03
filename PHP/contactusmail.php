<?php

$fromEmail = $_POST['Email'];
$toEmail = 'guruansh284@gmail.com';
$clientName = $_POST['FullName'];
$companyName = $_POST['CompanyName'];
$message = 'Message';
$phone = $_POST['Phone'];
$subject = 'An offer from Buydemer';
$headers = "From: The Sender Name <gurus5229@gmail.com>\r\n";
$headers .= "Reply-To: replyto@gurus5229@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";

mail($toEmail, $subject, $message, $headers);
echo 'sent';
echo $toEmail;
echo $message;
echo $headers;
?>



