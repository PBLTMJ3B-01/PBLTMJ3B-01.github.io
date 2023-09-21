<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h2>Welcome to the Dashboard, <?php echo $_SESSION["username"]; ?>!</h2>
        <p>This is the protected dashboard page. You can add your content here.</p>
        <a class="button" href="logout.php">Logout</a>
    </div>
</body>
</html>
