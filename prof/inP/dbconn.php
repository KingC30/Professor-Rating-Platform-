<?php

$servername = "studentdb-maria.gl.umbc.edu";
$username = "giabaov1";
$password = "giabaov1";
$dbname = "giabaov1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
