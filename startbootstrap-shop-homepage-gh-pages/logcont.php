<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "pineapple";


$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $username = $connection->real_escape_string($username);
    $password = $connection->real_escape_string($password);

   
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $connection->query($query);

   
    if ($result->num_rows == 1) {
     
        header("Location: dashbaord.php");
        exit;
    } else {
        
        echo "Wrong username or password. Please try again.";
    }
}


$connection->close();
?>
