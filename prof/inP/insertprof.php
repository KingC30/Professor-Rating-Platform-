<?php
include '../../users.php';
// Show MyGuests Data

require 'dbconn.php';

// define variables and set to empty values
$catname = "";

$pprofessor = $_POST['professor'];
$pemail = $_POST['email'];
$puniversity = $_POST['university'];
$pcourse = $_POST['course'];

  $sql = "INSERT INTO Professor (pname, email, pcourse, puni)
  VALUES
  ('$pprofessor', '$pemail', '$pcourse', '$puniversity' )";

  //echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: dispalyproff.php');
?>
