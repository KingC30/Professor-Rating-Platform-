<!--
Gia bao Vo
IS448
Final Project
-->


<?php

$servername = "studentdb-maria.gl.umbc.edu";
$username = "giabaov1";
$password = "giabaov1";
$dbname = "giabaov1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
