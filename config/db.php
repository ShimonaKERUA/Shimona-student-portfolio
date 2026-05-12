<?php
$host = "shima04";
$username = "shima04";
$password = "P@$$w0rd";
$database = "infosys";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
