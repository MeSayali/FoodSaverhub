<?php

$connection=mysqli_connect("localhost:3306","root","");
$db=mysqli_select_db($connection,'demo');
if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($connection, $_POST['name']);
    $email=mysqli_real_escape_string($connection, $_POST['email']);
    $message=mysqli_real_escape_string($connection, $_POST['message']);
    // $email=$_POST['email'];
   

 



    $query="insert into user_feedback_cloth(name,email,message) values('$name','$email','$message')";
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
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback Sent</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        text-align: center;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #4CAF50;
        margin-bottom: 20px;
    }
    p {
        color: #333;
        font-size: 18px;
    }
    .thank-you {
        color: #4CAF50;
        font-size: 24px;
        font-weight: bold;
        margin-top: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Feedback Sent!</h1>
    <p>Your feedback has been successfully sent to the admin.</p>
    <p class="thank-you">Thank you!</p>
</div>
</body>
</html>

<?php
// Here you can put PHP code to handle feedback submission, database operations, etc.
?>
