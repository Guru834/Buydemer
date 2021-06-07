<?php
error_reporting(1);
//require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require 'vendor/autoload.php';
 require "config.php";
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$fromEmail = $_POST['Email'];
$toEmail = 'guruansh284@gmail.com';
$clientName = $_POST['FullName'];
$companyName = $_POST['CompanyName'];
$message = $_POST['Message'];
$phone = $_POST['Phone'];

//echo $fromEmail .'<br>'. $toEmail .'<br>'. $clientName .'<br>'. $companyName .'<br>'. $message .'<br>'. $phone . '<br>Now seperate things down<br>';

$email = new \SendGrid\Mail\Mail(); 

$email->setFrom('gurus5229@gmail.com', "Buydemer");
$email->setSubject("Offer from Buydemer");
$email->addTo("guruansh284@gmail.com", "The user with the ad");
$email->addContent("text/plain", "The message of the user");
$email->addContent(
    "text/html", "<strong>Name: </strong> <h9>$clientName</h9> <br> <strong>Company-Name:</strong><h9>  $companyName</h9> <br> <strong>Phone:</strong><h9>  $phone</h9> <br> <strong>Email:</strong><h9>  $fromEmail</h9>
    <br><br><br><h9>  $message</h9><br>"
);
//print_r($email);
$sendgrid = new \SendGrid( SENDGRID_API_KEY );

try {
    $response = $sendgrid->send($email);
    header("Location: http://localhost/Buydemer/Buydemer/HTML/congratscontact.html");

    //print $response->statusCode() . "\n";
    //print($response->headers());
    //print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
