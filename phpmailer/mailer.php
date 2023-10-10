<?php
require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';
//Define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'estilosalon2022@gmail.com';                     // SMTP username
    $mail->Password   = 'o q n z x w q i v h c l n r b h';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    // Recipients
    $mail->setFrom('estilosalon2022@gmail.com', 'Estilo Salon');
    $mail->addAddress($_POST['email']);     // Add a recipient
    $mail->addReplyTo($_POST['email'], $_POST['name']);
   

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Payment Confirmation';
    $mail->Body    = $_POST['message'];
    $mail->AltBody = strip_tags($_POST['message']);

    $mail->send();
  echo '<script>alert("Message has been sent!"); window.location.href = "notif.html";</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
