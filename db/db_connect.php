<?php

session_start();

$server = 'localhost';
$username = 'root';
$password = ''; // Replace with your actual DB password if any
$database = 'ecommerce';

// Establish the connection
$conn = new mysqli($server, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!";
}
?>
