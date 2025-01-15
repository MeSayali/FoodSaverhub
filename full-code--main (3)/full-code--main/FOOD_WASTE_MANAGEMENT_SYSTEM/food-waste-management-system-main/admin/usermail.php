<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Mail\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\Mail\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\Mail\PHPMailer-master\src\SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $to_email = $_GET["sakshijaysingpure5@gmail.com"];
    $predefined_message = $_GET["message"];
    $subject = "Pickup The donation"; // You can set your subject here
    $body = $predefined_message; // Use the predefined message as the body

    $mail = new PHPMailer(true);
    $message = "";

    try {
        //Server settings
        $mail->SMTPDebug = 0; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'sakshijaysingpure5@gmail.com'; // SMTP username
        $mail->Password = 'brrmbkhluiiuuxvv'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption; PHPMailer::ENCRYPTION_STARTTLS encouraged
        $mail->Port = 587; // TCP port to connect to, use 465 for PHPMailer::ENCRYPTION_SMTPS above

        //Recipients
        $mail->setFrom('sakshijaysingpure5@gmail.com', 'Say No To Food Wastage');
        $mail->addAddress($to_email); // Add a recipient

        // Content
        $mail->isHTML(false); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();
        $message = "Email successfully sent to $to_email...";
    } catch (Exception $e) {
        $message = "Email sending failed. Error: {$mail->ErrorInfo}";
    }

    // Display the message
    echo $message;
}
?>