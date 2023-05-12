<?php
include '../users.php';
// Show MyGuests Data

require '../dbconn.php';

// define variables and set to empty values
$id = "";

$id = $_GET["id"];
$sql = "Delete FROM contactus1 Where id=$id";

//echo $sql;

$conn->query($sql);
$conn->close();


//echo "Data Deleted";
header('Location: dispalycontactus.php');

?>
