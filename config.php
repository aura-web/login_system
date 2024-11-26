<?php
$host = "localhost";
$username = "root"; // Biasanya root di XAMPP
$password = ""; // Kosongkan jika tidak ada password
$dbname = "aura_cantik";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
