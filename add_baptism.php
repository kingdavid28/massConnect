<?php
$servername = "localhost";
$username = "root";
$password = ""; // Or your actual password
$dbname = "sanvi_dbmer2024";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $bday = $_POST['bday'];
    $baptismal_date = $_POST['baptismal_date'];
    $parents_name = $_POST['parents_name'];
    $baptized_by = $_POST['baptized_by'];
    $godparent_names = $_POST['godparent_names'];
    $parish_church = $_POST['parish_church'];
    $canonical_book_number = $_POST['canonical_book_number'];

    $sql = "INSERT INTO baptism (name, bday, baptismal_date, parents_name, baptized_by, godparent_names, parish_church, canonical_book_number) 
            VALUES ('$name', '$bday', '$baptismal_date', '$parents_name', '$baptized_by', '$godparent_names', '$parish_church', '$canonical_book_number')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['name' => $name]);
    } else {
        echo json_encode(['error' => $conn->error]);
    }

    $conn->close();
}
?>
