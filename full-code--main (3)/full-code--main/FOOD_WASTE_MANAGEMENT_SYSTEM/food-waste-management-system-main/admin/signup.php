<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <script src="signin.js" defer></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Register</title>
    <style>
        body {
            background-image: url('img/registration.jpg'); /* Replace 'your-image-url.jpg' with the URL of your background image */
            background-size: cover;
            background-position: center;
            /* Additional styles for body if needed */
        }
    </style>
</head>
<body>
    <div class="container">
        
        <form action=" " method="post" id="form">
            <span class="title">Register</span>
            <br>
            <br>
            <div class="input-group">
                <label for="username">Name</label>
                <input type="text" id="username" name="username" required/>
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required/>
            </div>
            <label class="textlabel" for="password">Password</label> 
            <div class="password">
                <input type="password" name="password" id="password"  required/>
                <i class="uil uil-eye-slash showHidePw" id="showpassword"></i>
               
            </div>
            <div class="input-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" id="address" required/></textarea>
            </div>
        
            <button type="submit" name="sign">Register</button>
            <div class="login-signup" >
                <span class="text">Already a member?
                    <a href="signin.php" class="text login-link">Login Now</a>
                </span>
            </div>
        </form>
    </div>
    <br>
    <br>
    <script src="login.js" ></script>
</body>
</html>
