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

// Check if it's a registration request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['new_username']) && isset($_POST['new_password']) && isset($_POST['registration_code'])) {
    $new_user = $_POST['new_username'];
    $new_pass = $_POST['new_password'];
    $registration_code = $_POST['registration_code']; // Get registration code

    // Check registration code
    if ($registration_code == "october42024") {
        // Hash the password
        $hashed_password = password_hash($new_pass, PASSWORD_DEFAULT);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ss", $new_user, $hashed_password);

        if ($stmt->execute()) {
            // Redirect to login.php with the new credentials
            header("Location: login.php?username=" . urlencode($new_user) . "&password=" . urlencode($new_pass));
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Invalid registration code.";
    }
}

$conn->close();
?>
