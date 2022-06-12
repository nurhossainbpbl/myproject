<?php
$servername = "192.168.0.103";
$username = "dbadm";
$password = "Fdsa@1234.";
$dbname = "mydb01";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
