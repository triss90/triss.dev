<?php
// Include and initialize PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer;

// Check input
function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST) && isset($_POST['h-captcha-response']) && isset($_POST['your-name']) && isset($_POST['your-email']) && isset($_POST['message'])) {

    // Clean input
    $postName = filter_var(check_input($_POST['your-name']),FILTER_SANITIZE_STRING);
    $postEmail = filter_var(check_input($_POST['your-email']), FILTER_SANITIZE_STRING);
    $postMessage = filter_var(check_input($_POST['message']), FILTER_SANITIZE_STRING);

    // Tell PHPMailer to use SMTP
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'mail.smtp2go.com';
    $mail->Port = 2525;
    $mail->SMTPAuth = true;
    $mail->Username = 'servicepoint';
    $mail->Password = 'dmE3dDFzdmFtaDAw';

    // Generate mail
    $mail->setFrom($postEmail, $postName);
    $mail->addReplyTo($postEmail, $postName);
    $mail->addAddress('tristan@white.chat', 'Tristan White');
    $mail->Subject = 'triss.dev - ' . $postName;
    $mail->Body = $postMessage;

    // Send mail
    if (!$mail->send()) {
        header('Location: https://triss.dev/contact/?m='.$mail->ErrorInfo);
        die();
    } else {
        header('Location: https://triss.dev/contact/?m=✅ Message sent successfully! Tristan will get back to you shortly.');
        die();
    }

} else {
    header('Location: https://triss.dev/contact/?m=🚫 That is not allowed!');
    die();
}
