<!--
Gia bao Vo
IS448
Final Project
-->


<?php
session_start();

include "dbconn.php";



function validate($data){

   $data = trim($data);

   $data = stripslashes($data);

   $data = htmlspecialchars($data);

   return $data;

}
$tbl_name="users";

$uname = validate($_POST['uname']);

$pass = validate($_POST['password']);



$sql = "SELECT * FROM $tbl_name WHERE user_name='$uname' AND password='$pass'";

//$result = mysqli_query($conn, $sql);
$result = $conn->query($sql);

$count=$result->num_rows;

$row = mysqli_fetch_assoc($result);

if ($count==1) {

    session_start();
    $_SESSION['loggedin'] = true;

    $_SESSION['user_name'] = $uname;

    $_SESSION['name'] = $row['name'];

    header("Location: home.php");

    }
else
    {
  header("Location: admin/index1.html");

  exit();
}








?>
