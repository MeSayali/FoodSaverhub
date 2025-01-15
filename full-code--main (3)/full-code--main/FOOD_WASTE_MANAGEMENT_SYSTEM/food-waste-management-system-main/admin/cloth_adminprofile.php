<?php
// $connection = mysqli_connect("localhost:3307", "root", "");
// $db = mysqli_select_db($connection, 'demo');
 include("connect.php"); 
if($_SESSION['name']==''){
	header("location:signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cloth_admin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Document</title>
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
                <li><a href="admin_cloth.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <!-- <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li> -->
                <li><a href="cloth_analytics.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="cloth_donate.php">
                    <i class="uil uil-heart"></i>
                    <span class="link-name">Donates</span>
                </a></li>
                <li><a href="cloth_volunteer.php">
                    <i class="uil uil-heart"></i>
                    <span class="link-name">Volunteer</span>
                </a></li>
                <li><a href="cloth_feedback.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Feedbacks</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Profile</span>
                </a></li>
                <!-- <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li> -->
            </ul>
            
            <ul class="logout-mode">
            <li><a href="view_admin.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Admin-Home-Page</span>
                </a></li>
                <li><a href="../clogout.php">
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
            <!-- <p>cloth Donate</p> -->
            <p  class ="logo" >Your <b style="color: #06C167; ">History</b></p>
             <p class="user"></p>
            <!-- <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div> -->
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <br>
        <br>
        <br>
        <div class="activity">
        <div class="table-container">
         
         <div class="table-wrapper">
         <table class="table">
        <thead>
        <tr>
            <th >Name</th>
            <th>type_of_cloth</th>
            <th>size</th>
            <th>quantity</th>
            <th>phone</th>
            <th>email</th>
            <th>address(amravati)</th>
            <!-- <th>Action</th> -->
         
          
           
        </tr>
        </thead>
         <?php
          


          // Define the SQL query to fetch unassigned orders
          $id=$_SESSION['Aid'];
          $sql = "SELECT * FROM cloth_donations WHERE assigned_to =$id";
          
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
    
      
       ?> 
    
        </tbody>
        <?php foreach ($data as $row) { ?>
        <?php    echo "<tr><td data-label=\"name\">".$row['name']."</td><td data-label=\"type_of_cloth\">".$row['type_of_cloth']."</td><td data-label=\"size\">".$row['size']."</td><td data-label=\"quantity\">".$row['quantity']."</td><td data-label=\"phone\">".$row['phone']."</td><td data-label=\"email\">".$row['email']."</td><td data-label=\"address\">".$row['address']."</td>";
?>
  <?php } ?>
    </table>
         </div>
                </div>
                
         
            
        </div>
            <!-- <P>Your history</P> -->

        

    </section>
    <script src="cloth_admin.js"></script>
</body>
</html>