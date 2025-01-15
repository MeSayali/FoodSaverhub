<?php
ob_start(); 
// $connection = mysqli_connect("localhost:3307", "root", "");
// $db = mysqli_select_db($connection, 'demo');
include("connect.php"); 
include '../connection.php';
if($_SESSION['name']==''){
	header("location:deliverylogin.php");
}
$name=$_SESSION['name'];
$city=$_SESSION['city'];
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);
// $city= $result->city;
// echo $city;

$id=$_SESSION['Did'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    <link rel="stylesheet" href="../home.css">

    <link rel="stylesheet" href="delivery_cloth.css">
</head>
<body>
<header>
        <div class="logo">Cloth <b style="color: #06C167;">Donate</b></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="openmap_cloth.php" >map</a></li>
                <li><a href="deliverymyord_cloth.php" >Accepted_Request</a></li>
                <li><a href="delivery_first.php" >Volunteer_Homepage</a></li>
                <li><a href="../index.html" class="active">Home_page</a></li>
                <!-- <li ><a href="../logout.php"  >Logout</a></li> -->
            </ul>
        </nav>
    </header>
    <br>
    <script>
        hamburger=document.querySelector(".hamburger");
        hamburger.onclick =function(){
            navBar=document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>
<?php

// echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=103.113.190.19')));
// echo "Your city: {$city}\n";

// $city = "<script language=javascript> document.write(geoplugin_city());</script>"; 
// $scity=$city;
?>
    <style>
        .itm{
            background-color: white;
            display: grid;
        }
        .itm img{
            width: 400px;
            height: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        p{
            text-align: center; font-size: 30PX;color: black; margin-top: 50px;
        }
        a{
            /* text-decoration: underline; */
        }
        @media (max-width: 767px) {
            .itm{
                /* float: left; */
                
            }
            .itm img{
                width: 350px;
                height: 350px;
            }
        }
    </style>
         <h2><center>Welcome <?php echo"$name";?></center></h2>

        <div class="itm" >

            <img src="../img/delivery.gif" alt="" width="400" height="400"> 
          
        </div>
        <!-- <h2><center>your Location : <?php echo"$city" ?></center></h2> -->
        <div class="get">
            <?php


// Define the SQL query to fetch unassigned orders
$sql = "SELECT 
cl.Cid AS Cid,
cl.type_of_cloth,
cl.name,
cl.phone,
cl.email,
cl.quantity,
cl.deliverd_by,
cl.address AS From_address, 
ad.name AS delivery_person_name,
ad.address AS To_address
FROM 
cloth_donations cl
LEFT JOIN 
admin ad ON cl.assigned_to = ad.Aid 
WHERE 
cl.assigned_to IS NOT NULL 
AND cl.deliverd_by IS NULL 
;
";

// Execute the query
$result=mysqli_query($connection, $sql);



// Check for errors
if (!$result) {
    die("Error executing query: " . mysqli_error($conn));
}

// Fetch the data as an associative array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// If the delivery person has taken an order, update the assigned_to field in the database
if (isset($_POST['type_of_cloth']) && isset($_POST['delivery_person_id'])) {
    $order_id = $_POST['order_id'];
    $delivery_person_id = $_POST['delivery_person_id'];
    $sql = "SELECT * FROM cloth_donations WHERE Cid = $order_id AND deliverd_by IS NOT NULL";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Order has already been assigned to someone else
        die("Sorry, this order has already been assigned to someone else.");
    }


    $sql = "UPDATE cloth_donations SET deliverd_by = $delivery_person_id WHERE Cid = $order_id";
    // $result = mysqli_query($conn, $sql);
    $result=mysqli_query($connection, $sql);


    if (!$result) {
        die("Error assigning order: " . mysqli_error($conn));
    }

    // Reload the page to prevent duplicate assignments
    header('Location: ' . $_SERVER['REQUEST_URI']);
    // exit;
    ob_end_flush();
}
// mysqli_close($conn);


?>
<div class="log">
<!-- <button type="submit" name="cloth" onclick="">My orders</button> -->
<a href="deliverymyord_cloth.php">REQUEST</a>

</div>
  

<!-- Display the orders in an HTML table -->
<div class="table-container">
         <!-- <p id="heading">donated</p> -->
         <div class="table-wrapper">
        <table class="table">
        <thead>
        <tr>
            <th >Name</th>
            <!-- <th>food</th> -->
            <!-- <th>Category</th> -->
            <th>type_of_cloth</th>
            <th>quantity</th>
            <th>phone</th>
            <th>email</th>
            <th>Pickup address</th>
            <th>Delivery Address</th>
            <th>Action</th>
         
          
           
        </tr>
        </thead>
       <tbody>

        <?php foreach ($data as $row) { ?>
        <?php    echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['type_of_cloth']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['From_address']."</td>";
        echo "<td>".$row['To_address']."</td>";
        echo "</td>";

?>
        
            <!-- <td><?= $row['Cid'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['address'] ?></td> -->
            <td data-label="Action" style="margin:auto">
                <?php if ($row['deliverd_by'] == null) { ?>
                    <form method="post" action=" ">
                        <input type="hidden" name="order_id" value="<?= $row['Cid'] ?>">
                        <input type="hidden" name="delivery_person_id" value="<?= $id ?>">
                        <button type="submit" name="type_of_cloth">Take request</button>
                    </form>
                <?php } else if ($row['deliverd_by'] == $id) { ?>
                    Order assigned to you
                <?php } else { ?>
                    Order assigned to another delivery person
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

            </div>

        
     
        

   <br>
   <br>
</body>
</html>