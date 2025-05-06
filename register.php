<?php
include 'db_connect.php';

$event_id = $_POST['event_id'];
$name = $_POST['name'];
$email = $_POST['email'];

$stmt = $conn->prepare("INSERT INTO registrations (event_id, name, email) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $event_id, $name, $email);
$stmt->execute();

echo "Registered Successfully!";
?>
