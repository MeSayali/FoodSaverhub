
<?php

// $connection = mysqli_connect("localhost:3306", "root", "");
// $db = mysqli_select_db($connection, 'demo');
include("connect.php"); 

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="admin.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
    
<?php
 $connection=mysqli_connect("localhost:3306","root","");
 $db=mysqli_select_db($connection,'demo');
 


?>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">ADMIN</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <!-- <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li> -->
                
                <li><a href="money_donates.php">
                    <i class="uil uil-heart"></i>
                    <span class="link-name">Donates</span>
                </a></li>
               
                
                <!-- <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li> -->
            </ul>
            
            <ul class="logout-mode">
            <li><a href="view_admin.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Admin-home-page</span>
                </a></li>
                <li><a href="../logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <!-- <p>Money Donate</p> -->
            <p  class ="logo" >Money<b style="color: #06C167; ">Donate</b></p>
             <p class="user"></p>
            <!-- <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div> -->
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-user"></i>
                        <!-- <i class="fa-solid fa-user"></i> -->
                        <span class="text">Total users</span>
                        <?php
                           $query="SELECT count(*) as count FROM  login";
                           $result=mysqli_query($connection, $query);
                           $row=mysqli_fetch_assoc($result);
                         echo "<span class=\"number\">".$row['count']."</span>";
                        ?>
                        <!-- <span class="number">50,120</span> -->
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Feedbacks</span>
                        <?php
                           $query="SELECT count(*) as count FROM  user_feedback";
                           $result=mysqli_query($connection, $query);
                           $row=mysqli_fetch_assoc($result);
                         echo "<span class=\"number\">".$row['count']."</span>";
                        ?>
                        <!-- <span class="number">20,120</span> -->
                    </div>
                    <div class="box box3">
                        <i class="uil uil-heart"></i>
                        <span class="text">Total doantes</span>
                        <?php
                           $query="SELECT count(*) as count FROM money_donations";
                           $result=mysqli_query($connection, $query);
                           $row=mysqli_fetch_assoc($result);
                         echo "<span class=\"number\">".$row['count']."</span>";
                        ?>
                        <!-- <span class="number">10,120</span> -->
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Donations</span>
                </div>
            <div class="get">
            
        
          <?php
// Include your database connection code
include("connect.php");

// Check if the user is logged in
if ($_SESSION['name'] == '') {
    header("location:signin.php");
}

// Fetch delivery persons data from the delivery_persons table
$query = "SELECT * FROM money_donations";
$result = mysqli_query($connection, $query);

// Check for errors
if (!$result) {
    die("Error executing query: " . mysqli_error($connection));
}

// Fetch the data as an associative array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Close the database connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Persons List</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        

        h2 {
            color: #28a745;
            text-align: center;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

       

        
    </style>
</head>
<body>
    <div class="container">
       

        <!-- Display the delivery persons data in a Bootstrap table -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    
                    <th>Amount</th>
                    <th>Card_Number</th>
                    <th>Expiry_date</th>
                    <th>CVV</th>
                    <th>Phoneno</th>

                    <!-- Add additional columns as needed -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?=$row['amount'] ?></td>
                        <td><?= $row['card_number'] ?></td>
                        <td><?= $row['expiry_date'] ?></td>
                        <td><?= $row['cvv'] ?></td>
                        <td><?= $row['phoneno'] ?></td>

                        
                        <!-- Add additional columns as needed -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Add JavaScript function to handle email sending and page redirection -->
    <script>
        function sendEmail(email) {
            // Replace this with your actual email sending logic

            // Redirect to a new page with email information
            window.location.href = 'sendmail.php?email=' + encodeURIComponent(email);
        }
    </script>
</body>
</html>
      
    </tbody>
</table>

            </div>

        

 
<!-- 
                <div class="table-container">
         <p id="heading">donated</p>
         <div class="table-wrapper">
        <table class="table">
        <thead>
        <tr>
            <th >Name</th>
            <th>food</th>
            <th>Category</th>
            <th>phoneno</th>
            <th>date/time</th>
            <th>address</th>
            <th>Quantity</th>
            <th>Status</th>
          
           
        </tr>
        </thead>
       <tbody>
   
    
        </tbody>
    </table>
         </div>
                </div>
                
          -->
            
        </div>
    </section>

    <script src="admin.js"></script>
</body>
</html>
