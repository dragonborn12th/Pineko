<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pineapple";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($stmt->execute()) {
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
