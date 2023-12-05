<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "localhost"; // Replace with your database host
$username = "root"; // Replace with your database username
$password = "root"; // Replace with your database password
$database = "rateyourshow"; // Replace with your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //echo "failed!";
}

//echo "Connected successfully";
?>