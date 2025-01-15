<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('https://img.freepik.com/premium-vector/technology-background-gears-mechanical-concepts_49459-581.jpg?w=900');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative; /* Set position relative for absolute positioning */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 800px; /* Adjust the maximum width as needed */
            width: 80%; /* Adjust the width as needed */
        }

        h1 {
            color: #343a40;
        }

        .form-container {
            margin-top: 20px;
        }

        .action-button {
            padding: 15px 30px;
            font-size: 24px;
            background-color: #28a745; /* Green color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #fff; /* White text color */
            width: 100%; /* Adjust the width as needed */
            margin-bottom: 10px; /* Add margin to create space between buttons */
        }

        /* Styles for the button at the top right corner */
        .top-right-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007bff; /* Blue color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #fff; /* White text color */
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Button at top right corner -->
   
    
    <h1 class="mb-4">Welcome, Admin!</h1>

    <div class="form-container">
        <a href="admin.php?option=food" class="btn btn-lg action-button">View Food Donation</a>
        <h1 class="mb-4">                                                                  </h1>
        <a href="admin_cloth.php?option=cloth" class="btn btn-lg action-button">View Cloth Donation</a>
        <h1 class="mb-4">                                                                  </h1>
        <a href="admin_money.php?option=money" class="btn btn-lg action-button">View Money Donation</a>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
