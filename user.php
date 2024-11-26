<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
</head>
<body>
    <h1>Welcome User, <?= $_SESSION['username']; ?>!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
