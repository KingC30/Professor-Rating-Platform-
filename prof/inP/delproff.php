<?php
include '../../users.php';
// Show MyGuests Data

require 'dbconn.php';


// define variables and set to empty values
$id = "";

$id = $_GET['pid'];
$sql = "Delete FROM Professor Where pid=$id";

//echo $sql;

$conn->query($sql);

$conn->close();


//echo "Data Deleted";
header('Location: dispalyproff.php');

?>




?>
