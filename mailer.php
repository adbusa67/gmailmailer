<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/PHPMailer/src/Exception.php';
require '/PHPMailer/src/PHPMailer.php';
require '/PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';

	try {
    //Server settings
    $mail = new PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    //$mail->SMTPDebug = 1; 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'ssl'; 
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);                           
    $mail->Username = ''.$_POST["se"].'';                 
    $mail->Password = ''.$_POST["sp"].'';    

    //Recipients
    $mail->setFrom(''.$_POST["se"].'');
	$nr = ''.$_POST["rn"].'';
	for($i=1;$i<=$nr;$i++)
	{
		$mail->addAddress(''.$_POST["r".$i].'');
	}
    $mail->addCC(''.$_POST["cc"].'');
    $mail->addBCC(''.$_POST["bcc"].'');

    //Attachments
    $mail->addAttachment(''.$_POST["attachment"].'');         // Add attachments

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = ''.$_POST["sub"].'';
    $mail->Body    = ''.$_POST["content"].'';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}	

?>