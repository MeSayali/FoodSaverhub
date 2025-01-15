<?php
// Include your database connection code
include("connect.php");

// Check if the user is logged in
if ($_SESSION['name'] == '') {
    header("location:signin.php");
}

// Fetch delivery persons data from the delivery_persons table
$query = "SELECT * FROM delivery_persons";
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
        body {
            font-family: 'Arial', sans-serif;
            background-color: #d4edda;
            padding: 20px;
        }

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

        th {
            background-color: #28a745;
            color: #fff;
        }

        .send-email-btn {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .send-email-btn:hover {
            background-color: #218838;
        }
    </style>
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
                <li><a href="admin.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <!-- <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li> -->
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="donate.php">
                    <i class="uil uil-heart"></i>
                    <span class="link-name">Donates</span>
                </a></li>
                <li><a href="volunteer.php">
                    <i class="uil uil-heart"></i>
                    <span class="link-name">Volunteer</span>
                <li><a href="feedback.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Feedbacks</span>
                </a></li>
                <li><a href="adminprofile.php">
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

    <div class="container">
        <h2>Delivery Persons List</h2>

        <!-- Display the delivery persons data in a Bootstrap table -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>DID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>address(AMRAVATI)</th>
                    <th>Send Email</th>
                    <!-- Add additional columns as needed -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) { ?>
                    <tr>
                        <td><?= $row['Did'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['city'] ?></td>
                        <td>
                           <button class="btn btn-success send-email-btn" onclick="sendEmail('<?= $row['email'] ?>', 'user send request for donation , Please Collect the Donation  from the address given in your dashboard')">Send Email</button>

                        </td>
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
       function sendEmail(email, message) {
    // Redirect to a new page with email and message information
    window.location.href = 'sendmail.php?email=' + encodeURIComponent(email) + '&message=' + encodeURIComponent(message);
}

    </script>
</body>
</html>