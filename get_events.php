<?php
include 'db_connect.php';

$result = $conn->query("SELECT * FROM events");
$events = [];

while ($row = $result->fetch_assoc()) {
  $events[] = $row;
}

echo json_encode($events);
?>
