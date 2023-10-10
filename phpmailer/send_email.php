<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

session_start();

if(isset($_POST['send'])){

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

   
    //Load composer's autoloader

    $mail = new PHPMailer(true);                            
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'estilosalon2022@gmail.com';     
        $mail->Password = 'm r q z j w y i u u n e n f t s';             
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'tls';                           
        $mail->Port = 587;                                   

        //Send Email
        $mail->setFrom('estilosalon2022@gmail.com');
        
        //Recipients
        $mail->addAddress($email);              
        $mail->addReplyTo('estilosalon2022@gmail.com');
        
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
		
       $_SESSION['result'] = 'Confirmation has been sent!';
	   $_SESSION['status'] = 'ok';
    } catch (Exception $e) {
	   $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
	   $_SESSION['status'] = 'error';
    }
	
	header("location: index.php");

}


