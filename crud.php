<!DOCTYPE html>
<html>
<head>
  <title>Welcome to the San Vicente Ferrer Parish-Franciscan Database</title>
  <style>
    body {
      background-color: #F3F7BE; /* Light background color */
      color: #f39c12;
      font-family: Arial, sans-serif;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      text-align: center;
    }

    .image-container {
      background-color: rgba(243, 156, 18, 0.2); /* AI-themed color with opacity */
      padding: 20px;
      border-radius: 15px;
      margin-bottom: 20px;
    }

    .image-container img {
      width: 800px; /* Increased width */
      height: 500px; /* Increased height */
      border-radius: 10px;
    }

    .button {
      background-color: #f39c12;
      border: none;
      color: whitesmoke;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 24px;
      margin: 10px 5px;
      cursor: pointer;
      border-radius: 10px;
    }

    .button:hover {
      background-color: #e67e22; /* Slightly darker shade on hover */
    }
  </style>
</head>
<body>
  <h1>Welcome to the San Vicente Ferrer Parish-Franciscan Database</h1>

  <div class="image-container">
    <img src="chow sanvi pic.jpg" alt="Parish Picture">
  </div>

  <div>
    <button class="button" onclick="window.location.href='baptism.php';">Enter Baptism</button>
    <button class="button" onclick="window.location.href='confirmation.php';">Enter Confirmation</button>
    <button class="button" onclick="window.location.href='communion.php';">Enter Communion</button>
    <button class="button" onclick="window.location.href='marriage.php';">Enter Marriage</button>
  </div>
  
</body>
</html>
