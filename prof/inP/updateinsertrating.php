<?php
include '../../users.php';
// Show MyGuests Data

require 'dbconn.php';

// define variables and set to empty values
$id = $cc = "";

$id = $_POST['pid'];
$cc = $_POST['comment'];


  $sql = "update tblrating set rcomments='$cc' where rid=$id;";
  //echo $sql;
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: rating/displayrating.php');
?>
