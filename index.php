<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Home</title>
<link rel="stylesheet" href="css/style.css"></head>
<body>

<h2>Welcome, <?= $_SESSION['username']; ?>!</h2>

<p>You are logged in.</p>

<a href="logout.php">Logout</a>

</body>
</html>