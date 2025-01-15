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
  
    $gender=mysqli_real_escape_string($connection, $_POST['gender']);
    $type_of_cloth=mysqli_real_escape_string($connection, $_POST['type_of_cloth']);
    $size=mysqli_real_escape_string($connection, $_POST['size']);
    // $email=$_POST['email'];
    $quantity=mysqli_real_escape_string($connection, $_POST['quantity']);
    $name=mysqli_real_escape_string($connection, $_POST['name']);
    $phone=mysqli_real_escape_string($connection, $_POST['phone']);
    $email=mysqli_real_escape_string($connection, $_POST['email']);
    $address=mysqli_real_escape_string($connection, $_POST['address']);
  
    
    

    

    // Insert data into database with image filename
    
    $query = "INSERT INTO cloth_donations(name, type_of_cloth, size, quantity, phone, email, address) 
              VALUES ('$name', '$type_of_cloth', '$size', '$quantity', '$phone', '$email', '$address')";
   



       $query_run= mysqli_query($connection, $query);
    if($query_run)
    {
        echo "done";
        echo '<script type="text/javascript">alert("data saved")</script>';
        header("location:delivery.html");
    }
    else{
        echo '<script type="text/javascript">alert("data not saved")</script>';
        echo "failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloth Donation Module</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://cdn2.vectorstock.com/i/1000x1000/13/71/cartoon-vector-25591371.jpg'); /* Add your background image URL here */
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            color: white;
            padding: 80px;
        }

        .container {
            background-color: grey; /* Add a semi-transparent background color to the container */
            border-radius: 15px;
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        h1, h2, h3, h4 {
            color: white; /* Use green color for headings */
        }

        .form-group {
            margin-bottom: 10px;
        }

        select, input, button {
            border-radius: 5px;
        }

        button {
            background-color: green; /* Green color for the button */
            color: white;
        }

        img.preview {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            border-radius: 5px;
        }
    </style>
</head>
       

<div class="container">
    <h1 class="mt-4 mb-4">Cloth Donation </h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="form-group">
            <h4><label for="gender">Gender:</label></h4>
            <select class="form-control" id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                
            </select>
        </div>

        <div class="form-group">
            <h4><label for="type">Type of Cloth:</label></h4>
            <select class="form-control" id="type_of_cloth" name="type_of_cloth" required>
                <option value="pant">pant</option>
                <option value="shirt">shirt</option>
                <option value="sari">sari</option>
                <option value="dress">drees</option>
                <option value="blanket">blanket</option>
                <option value="winter cloths">winter cloths</option>
                <option value="other">Other</option>
            </select>
                </div>

        <div class="form-group">
           <h4> <label for="size">Size:</label><h4>
            <input type="text" class="form-control" id="size" name="size" required>
        </div>

        <div class="form-group">
          <h4>  <label for="quantity">Quantity:</label><h4>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>

        <div class="form-group">
           <h4> <label for="name">name of donator: </label></h4>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
           <h4> <label for="phone">Phone Number:</label></h4>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="form-group">
           <h4> <label for="email">Email:</label></h4>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <h4><label for="type">address:</label></h4>
            <select class="form-control" id="address" name="address" required>
                <option value="panchwati">panchwati</option>
                <option value="irvin_square">irvin_square</option>
                <option value="rajkamal">rajkamal</option>
                <option value="rajkamal">gadge_nager</option>
                <option value="rajkamal">vilas_nagar</option>
                
            
            </select>
                </div>

       

        <div class="form-group">
          <h4>  <label for="image">Select Image to Upload:</label></h4>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
           <h3> <small class="form-text text-muted">Accepted formats: JPEG, JPG, PNG.</small></h3>
            <img class="preview" id="imagePreview" src="#" alt="Preview" style="display: none;">
        </div>

       <h2> <button type="submit" name="submit" class="btn btn-light">Donate</button></h2>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Preview image before upload
    $("#image").change(function () {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result).show();
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>
</html>
