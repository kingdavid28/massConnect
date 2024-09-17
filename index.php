<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background: linear-gradient(to bottom right, #2c3e50, #4ca1af);
      color: white;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      flex-direction: column; /* Align items vertically */
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      text-align: center;
      margin-top: 50px; /* Add top margin for spacing */
    }

    .login-box {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 60px; /* Increased padding */
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
      color: black;
      width: 500px; /* Increased width */
      margin: auto;
      margin-top: 100px; /* Add top margin to center */
    }

    .login-box h2 {
      margin-bottom: 30px;
      font-size: 36px; /* Increased font size */
      font-weight: bold;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 20px; /* Increased padding */
      margin: 15px 0; /* Increased margin */
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 24px; /* Increased font size */
    }

    .button-group {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }

    .button {
      background-color: #f39c12;
      border: none;
      color: white;
      padding: 15px 25px; /* Increased padding */
      text-align: center;
      text-decoration: none;
      font-size: 24px; /* Increased font size */
      cursor: pointer;
      border-radius: 8px;
      transition: background-color 0.3s;
      width: 48%;
    }

    .button:hover {
      background-color: #e67e22;
    }

    .container h1 {
      font-size: 48px; /* Increased font size */
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Admin Login</h2>
    <form id="login-form" action="login.php" method="post">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <div class="button-group">
        <button type="submit" class="button">Login</button>
        <button type="button" class="button" onclick="showRegistration()">Register</button>
      </div>
    </form>
    <form id="registration-form" action="register.php" method="post" style="display: none;">
      <input type="text" name="new_username" placeholder="New Username" required><br>
      <input type="password" name="new_password" placeholder="New Password" required><br>
      <input type="text" name="registration_code" placeholder="Registration Code" required><br>
      <div class="button-group">
        <button type="submit" class="button">Register</button>
        <button type="button" class="button" onclick="showLogin()">Back to Login</button>
      </div>
    </form>
  </div>
  <div class="container">
    <h1>Welcome to the San Vicente Ferrer Parish-Franciscan Database</h1>
  </div>
  <script>
    function showRegistration() {
      document.getElementById('login-form').style.display = 'none';
      document.getElementById('registration-form').style.display = 'block';
    }

    function showLogin() {
      document.getElementById('registration-form').style.display = 'none';
      document.getElementById('login-form').style.display = 'block';
    }
  </script>
</body>
</html>
