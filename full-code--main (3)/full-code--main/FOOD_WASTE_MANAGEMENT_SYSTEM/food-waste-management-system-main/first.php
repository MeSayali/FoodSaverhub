


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
    $phoneno=mysqli_real_escape_string($connection, $_POST['phoneno']);
    $cvv=mysqli_real_escape_string($connection, $_POST['cvv']);
    

 



    $query="insert into money_donations(amount,card_number,expiry_date,cvv,phoneno) values('$amount','$card_number','$expiry_date','$cvv','$phoneno')";
    $query_run= mysqli_query($connection, $query);
    if($query_run)
    {

        echo '<script type="text/javascript">alert("data saved")</script>';
        header("location: next_page.php");
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
    <title>Dummy Payment Gateway</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/money.jpg'); 
            color: #fff; /* White text color */
            font-family: 'Arial', sans-serif; /* Change font to Arial or your preferred font */
            font-size: 16px; /* Increase the base font size */
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        .payment-form {
            background: grey;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            margin-top: 30px;
        }
        .btn-primary {
            background-color: #218838; /* Darker green for the button */
            border-color: #218838;
            font-size: 20px; /* Increase button font size */
        }
        .btn-primary:hover {
            background-color: #1e7e34; /* Slightly darker green on hover */
            border-color: #1e7e34;
        }
        label {
            color: black; /* Dark gray text color for labels */
            font-size: 24px; /* Increase label font size */
        }
        input {
            border-color: #ced4da; /* Light gray border color for inputs */
            font-size: 17px; /* Increase input font size */
        }
        
    </style>
</head>
<body>
    <div class="container">
        
        <div class="payment-form">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="form-group">
                    <h2> DUMMY PAYMENT GATEWAY</h2>
                </div>
        
                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="text" class="form-control" id="amount" name="amount" required>
                </div>
                <div class="form-group">
                    <label for="card_number">Card Number:</label>
                    <input type="text" class="form-control" id="card_number" name="card_number" required>
                </div>
                <div class="form-group">
                    <label for="expiry_date">Expiry Date:</label>
                    <input type="text" class="form-control" id="expiry_date" name="expiry_date" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV:</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" required>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Phone Number:</label>
                    <input type="text" class="form-control" id="phoneno" name="phoneno" required>
                </div>
                <button type="submit" name="submit" >submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
