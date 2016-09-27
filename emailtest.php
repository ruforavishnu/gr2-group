<?php
$filename = $_SERVER['DOCUMENT_ROOT'] .'/libs/PHPMailer/PHPMailerAutoload.php';
echo $filename.'<br/>';
if(file_exists($filename))
{
	echo 'file exists';
}
else
{

	echo 'file does not exists';
}

require_once($filename);
require_once($_SERVER['DOCUMENT_ROOT'] .'/libs/PHPMailer/class.phpmailer.php');
require_once($_SERVER['DOCUMENT_ROOT'] .'/libs/PHPMailer/class.smtp.php');

//require "PHPMailerAutoload.php";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "smtp@gmail.com"; // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "vishnuajith310@gmail.com"; // SMTP account username example
$mail->Password   = "#Vishnu@123";        // SMTP account password example

$mail->From = "vishnuajith310@gmail.com.com";
$mail->FromName = "Vishnu Php test";

//To address and name
$mail->addAddress("vishnuajith310@gmail.com", "vish");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";


if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
?>