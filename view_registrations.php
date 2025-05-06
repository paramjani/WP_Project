<?php
include 'db_connect.php';

$result = $conn->query("
  SELECT r.name, r.email, e.name AS event_name 
  FROM registrations r 
  JOIN events e ON r.event_id = e.id
");

echo "<h1>Registrations</h1><ul>";
while ($row = $result->fetch_assoc()) {
  echo "<li>{$row['name']} ({$row['email']}) - {$row['event_name']}</li>";
}
echo "</ul>";
?>
