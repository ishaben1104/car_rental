<?php
//Database connection parameters
$servername = "localhost";
$username = "root";
$password = "Current@2023";
$database = "car_rental";

//Create a connection
$conn = new mysqli($servername, $username, $password, $database);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
