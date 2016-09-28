<?php

echo 'sending email<br/>';

	$filename = $_SERVER['DOCUMENT_ROOT'] .'/libs/PHPMailer/PHPMailerAutoload.php';
	require $filename;

$name =  $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];

echo 'name:'.$name;
echo '<br/>';
echo 'email:'.$email;
echo '<br/>';
echo 'phone:'.$phone;
echo '<br/>';


$target_dir = $_SERVER['DOCUMENT_ROOT'] ."/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) 
    {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }
     else 
     {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) 
{
	unlink($target_file);
    //echo "Sorry, file already exists,overwriting it";
   // $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf"
&& $imageFileType != "odt" ) {
    echo "Sorry, only DOC, DOCX, PDF & ODT files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else
 {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. <br/>now sending attmt";
		echo 'beginning to send email';
		$mail = new PHPMailer;

		$mail->isSMTP();
		$mail->Host = 'localhost';
		//$mail->Port = 25;
		                        // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
		


		$mail->setFrom('vishnuajith310@gmail.com', 'From Tasaheel Group');
		$mail->addAddress('vishnuajith310@gmail.com', 'To Tasaheel Group');     // Add a recipient
		$mail->addReplyTo('vishnuajith310@gmail.com', 'Reply To Tasaheel Group');
		

		$mail->addAttachment($target_file);         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'User uploaded his resume';
		$mailbody = 'User:'.$name.'<br> Email:'.$email.'<br> Phone number:' .$phone;

		$mail->Body    =  $mailbody;
		$mail->AltBody = $name. 'has sent his resume, His email is'.$email+' and phone is '+$phone+'';
		echo '<br/>---------------';
		var_dump($mailbody);
		echo '<br/>---------------<br/>';
		if(!$mail->send()) 
		{
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} 
		else 
		{
		    echo 'Message has been sent';
		}
	}
		
}

?>