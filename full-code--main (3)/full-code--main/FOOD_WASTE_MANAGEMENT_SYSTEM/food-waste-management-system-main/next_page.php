<?php

include("login.php"); 
if($_SESSION['name']==''){
	header("location: signin.php");
}
// include("login.php"); 
$emailid= $_SESSION['email'];
$connection=mysqli_connect("localhost:3306","root","");
$db=mysqli_select_db($connection,'demo');
if(isset($_POST['submit']))
{
    $amount=mysqli_real_escape_string($connection, $_POST['amount']);
    $card_number=mysqli_real_escape_string($connection, $_POST['card_number']);
    
    $expiry_date=mysqli_real_escape_string($connection, $_POST['expiry_date']);
    // $email=$_POST['email'];
    $phoneno=mysqli_real_escape_string($connection, $_POST['phonenumber']);
    $cvv=mysqli_real_escape_string($connection, $_POST['cvv']);
    

 



    $query="insert into money_donations(amount,card_number,expiry_date,cvv,phoneno) values('$amount','$card_number','$expiry_date','$cvv','$phoneno')";
    $query_run= mysqli_query($connection, $query);
    if($query_run)
    {

        echo '<script type="text/javascript">alert("data saved")</script>';
        header("location:delivery.html");
    }
    else{
        echo '<script type="text/javascript">alert("data not saved")</script>';
    }
}
// Dummy Payment Gateway


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/money5.jpg'); 
            color: red; /* White text color */
            font-family: 'Arial', sans-serif; /* Change font to Arial or your preferred font */
            padding: 35px;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        .otp-form {
            background: black;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 28px;
        }
        .btn-primary {
            background-color: #218838; /* Darker green for the button */
            border-color: #218838;
        }
        .btn-primary:hover {
            background-color: #1e7e34; /* Slightly darker green on hover */
            border-color: #1e7e34;
        }
        label {
            color: white; /* Dark gray text color for labels */
            font-size: 20px; /* Increase label font size */
        }
        input {
            border-color: #ced4da; /* Light gray border color for inputs */
            font-size: 20px; /* Increase input font size */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">OTP Verification</h1>
        <div class="otp-form">
            <form id="otp-Form" action="new_page.php" method="post">
                <form id="otp-form" action="new_page.php" method="post">
                <?php if (!empty($verificationMessage)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $verificationMessage; ?>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="otp">Enter 6-digit OTP:</label>
                    <input type="text" class="form-control" id="otp" name="otp" required pattern="\d{6}" title="Please enter a 6-digit number">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
