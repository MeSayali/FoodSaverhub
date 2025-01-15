<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delivery Services</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: pink;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      text-align: center;
    }
    h1 {
      color: #333;
    }
    .options {
      margin-top: 40px;
    }
    .option {
      display: inline-block;
      margin: 0 40px;
    }
    .option img {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      border: 4px solid #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .btn {
      display: inline-block;
      padding: 15px 30px;
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .btn-food {
      background-color: #ff5733;
      color: #fff;
      margin-bottom: 20px;
    }
    .btn-food:hover {
      background-color: #ff7f50;
    }
    .btn-cloth {
      background-color: #3498db;
      color: #fff;
    }
    .btn-cloth:hover {
      background-color: #5dade2;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Choose Your Delivery Service</h1>
  <div class="options">
    <div class="option">
      <img src="https://th.bing.com/th/id/OIP.7civKQWv8ipC_CGAS-KI_gHaE8?w=275&h=183&c=7&r=0&o=5&cb=11&dpr=1.3&pid=1.7" alt="Food Delivery">
      <br>
      <h1>  </h1>
    
      <button class="btn btn-food" onclick="window.location.href='delivery.php';">Food Delivery</button>

    </div>
    <div class="option">
      <img src="https://th.bing.com/th?id=OIP.3sdsdzJb0mClzWOThxwAQwHaFw&w=283&h=220&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" alt="Cloth Delivery">
      <br>
      <h1>  </h1>
      <button class="btn btn-cloth" onclick="window.location.href='delivery_cloth.php';">cloth Delivery</button>
    </div>
  </div>
</div>

</body>
</html>
