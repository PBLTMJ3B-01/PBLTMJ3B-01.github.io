<?php
$servername = "0.tcp.ap.ngrok.io"; // Update with your ngrok hostname
$port = 14932; // Update with your ngrok port number
$username = "root"; // Your database username
$password = ""; // Your database password
$database = "login"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database!";
}
?>
