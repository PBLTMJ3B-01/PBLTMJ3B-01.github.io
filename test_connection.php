<?php
require_once('db_connection.php'); // Include the database connection file

// Check if the connection is successful
if ($conn) {
    echo "Connected to the database successfully!";
} else {
    echo "Failed to connect to the database.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
</body>
</html>