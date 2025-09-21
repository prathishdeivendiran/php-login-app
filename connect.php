<?php
$servername = "db";      // Must match docker-compose service name
$username = "user";
$password = "userpass";
$database = "mydatabase";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Failed to connect to DB: " . $conn->connect_error);
}
?>
