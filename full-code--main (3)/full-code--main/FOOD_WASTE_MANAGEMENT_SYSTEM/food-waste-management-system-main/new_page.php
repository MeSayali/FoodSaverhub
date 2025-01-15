<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: #f8f9fa; /* Set a light background color */
            padding: 20px; /* Add some padding for better visual appeal */
        }

        .payment-container {
            text-align: center;
            margin-top: 50px; /* Adjust the margin from the top */
            border: 2px solid #28a745; /* Add a border with a success color */
            padding: 20px; /* Add padding to the container */
            border-radius: 10px; /* Add border-radius for rounded corners */
            background-color: #fff; /* Set a white background color */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }

        .payment-heading {
            color: #28a745; /* Set the heading color to success color */
            font-size: 35px; /* Increase the font size for better visibility */
            margin-bottom: 20px; /* Add some margin below the heading */
        }

        .payment-image {
            max-width: 100%; /* Make sure the image doesn't exceed its container */
            height: auto; /* Maintain aspect ratio */
            margin-top: 20px; /* Add some margin above the image */
        }
    </style>
</head>
<body>

<!-- Your existing page content -->

<div class="container payment-container">
    <?php
    // Check if payment is successful (you should have a variable or condition for this)
    $paymentSuccessful = true; // Change this based on your logic

    if ($paymentSuccessful) {
        echo '<h2 class="payment-heading">Payment Successful!</h2>';
        echo '<img src="payment.png" alt="Payment Successful" class="payment-image">';
    }
    ?>
</div>

<!-- Button for redirection -->
<div class="container mt-3">
    <a href="sayu.html" class="btn btn-primary">go to users_Home_page</a>
</div>

<!-- More of your page content -->

<!-- Link to Bootstrap JS (optional, only if you need Bootstrap JavaScript features) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
