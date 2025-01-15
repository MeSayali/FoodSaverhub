<?php
session_start();
// $connection = mysqli_connect("localhost:3307", "root", "");
// $db = mysqli_select_db($connection, 'demo');
include '../connection.php'; 
$msg=0;
if (isset($_POST['sign'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sanitized_emailid =  mysqli_real_escape_string($connection, $email);
  $sanitized_password =  mysqli_real_escape_string($connection, $password);
  // $hash=password_hash($password,PASSWORD_DEFAULT);

  $sql = "select * from delivery_persons where email='$sanitized_emailid'";
  $result = mysqli_query($connection, $sql);
  $num = mysqli_num_rows($result);
 
  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($sanitized_password, $row['password'])) {
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['name'];
        $_SESSION['Did']=$row['Did'];
        $_SESSION['city']=$row['city'];
        header("location:delivery_first.php");
      } else {
        $msg = 1;
        // echo '<style type="text/css">
        // {
        //     .password input{
                
        //         border:.5px solid red;
                
                
        //       }

        // }
        // </style>';
        // echo "<h1><center> Login Failed incorrect password</center></h1>";
      }
    }
  } else {
    echo "<h1><center>Account does not exists </center></h1>";
  }




  // $query="select * from login where email='$email'and password='$password'";
  // $qname="select name from login where email='$email'and password='$password'";


  // if(mysqli_num_rows($query_run)==1)
  // {
  // //   $_SESSION['name']=$name;

  //   // echo "<h1><center> Login Sucessful  </center></h1>". $name['gender'] ;

  //   $_SESSION['email']=$email;
  //   $_SESSION['name']=$name['name'];
  //   $_SESSION['gender']=$name['gender'];
  //   header("location:home.html");

  // }
  // else{
  //   echo "<h1><center> Login Failed</center></h1>";
  // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Form | CodingNepal</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('img/login.jpg'); /* Path to your background image */
            background-size: cover;
            font-family: Arial, sans-serif; /* Adjust font family if needed */
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .center h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* Add more CSS styles as needed */
    </style>
</head>
<body>
<div class="center">
    <h1>Register</h1>
    <form method="post" action=" ">
        <!-- Your form fields -->
    </form>
</div>
</body>
</html>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Form</title>
    <link rel="stylesheet" href="deliverycss.css">
  </head>
  <body>
    <div class="center">
      <h1>Delivery Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="email" name="email" required/>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required/>
          <span></span>
          <label>Password</label>
          
        </div>
        <?php
        if($msg==1){
                        // echo ' <i class="bx bx-error-circle error-icon"></i>';
                        echo '<p class="error">Password not match.</p>';
                    }
                    ?>
                    <br>
        <!-- <div class="pass">Forgot Password?</div> -->
        <input type="submit" value="Login" name="sign">
        <div class="signup_link">
          Not a member? <a href="deliverysignup.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
