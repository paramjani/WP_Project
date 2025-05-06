<?php
$host = "sql12.freesqldatabase.com";
$user = "sql12777258";
$password = "niVfMdhNnp";
$dbname = "sql12777258";
$port = 3306;

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
