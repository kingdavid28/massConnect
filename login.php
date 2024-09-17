<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = ""; // Or your actual password
$dbname = "parish_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if login credentials are provided
if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    // Fetch the hashed password from the database
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result(); // Store the result to check the number of rows
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    // Debugging: Check fetched values
    echo "Fetched username: " . htmlspecialchars($username) . "<br>";
    echo "Fetched hashed password: " . htmlspecialchars($hashed_password) . "<br>";
    echo "Number of rows fetched: " . $stmt->num_rows . "<br>";

    // Verify the password using the fetched hashed password
    if ($stmt->num_rows > 0 || password_verify($password, $hashed_password)) {
        // Start the session and set session variables
        session_start();
        $_SESSION['username'] = $username;
        echo "Login successful!";
        // Redirect to the dashboard or home page
        header("Location: crud.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
} else {
    echo "No login credentials provided.";
}

$conn->close();
?>
