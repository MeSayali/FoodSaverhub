<?php
// Include your database connection code
include("connect.php");

// Check if the user is logged in
if ($_SESSION['name'] == '') {
    header("location:signin.php");
}

// Fetch money donations data from the money_donations table
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
    <title>Money Donation List</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Lighter background color */
            padding: 20px;
        }

        h2 {
            color: #218838; /* Dark green color */
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #218838; /* Dark green background for header */
            color: #fff;
        }

        tbody tr:hover {
            background-color: #e2e6ea; /* Lighter background on hover */
        }

        .send-email-btn {
            background-color: #218838;
            color: #fff;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 4px;
        }

        .send-email-btn:hover {
            background-color: #1e7e34; /* Darker green on hover */
        }

        .container {
            max-width: 800px; /* Limit the width of the container */
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Money Donation List</h2>

        <!-- Display the money donations data in a Bootstrap table -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Phoneno</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['amount'] ?></td>
                        <td><?= $row['phoneno'] ?></td>
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
