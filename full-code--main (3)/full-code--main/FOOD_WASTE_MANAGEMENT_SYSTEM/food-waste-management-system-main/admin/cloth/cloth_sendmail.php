<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Mail\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\Mail\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\Mail\PHPMailer-master\src\SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = $_POST["to_email"];
    $subject = $_POST["subject"];
    $body = $_POST["body"];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'sayalip320@gmail.com'; // SMTP username
        $mail->Password = 'nhtphgmlpqfvdhze'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption; `PHPMailer::ENCRYPTION_STARTTLS` encouraged
        $mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('sayalip320@gmail.com', 'Your Name');
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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
             background-color: #d4edda;
        }

        .container {
            margin-top: 50px;
        }

        form {
            background-color: #28a745;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #ffffff;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }

        input,
        textarea {
            margin-bottom: 20px;
            background-color: #ffffff;
            color: #495057;
        }

        button {
            background-color: #ffffff;
            color: #28a745;
        }

        button:hover {
            background-color: #218838;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Send Email</h2>
                <?php if(isset($message)) { echo '<div class="alert alert-success">'.$message.'</div>'; } ?>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="to_email">To Email:</label>
                        <input type="email" class="form-control" name="to_email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea class="form-control" name="body" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Send Email</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
