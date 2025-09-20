<?php

$servername = "db"; // 👈 IMPORTANT: service name from docker-compose.yml
$username = "user";
$password = "userpass";
$database = "mydatabase";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>