<?php
$conn = new mysqli("localhost", "root", "", "nyca_db"); // Adjust credentials

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
