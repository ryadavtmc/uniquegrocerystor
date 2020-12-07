<?php
$servername = "localhost";
$username = "u226536453_unique";
$password = "Lion1432156837";
$dbName = "u226536453_unique";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
?>