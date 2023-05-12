<?php

require "../dbconn.php";

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];

// Combine the first name and last name
$fullName = $firstName . ' ' . $lastName;

$c1 = $_POST["email"];
$c2 = $_POST["country"];
$m2 = $_POST["Subject"];
$t1 = $_POST["message"];


echo $fullName;
echo "<BR>";
echo $c1;
echo "<BR>";
echo $c2;
echo "<BR>";
echo $m2;
echo "<BR>";
echo $t1;
echo "<BR>";

// Corrected SQL statement with only 5 values
$sql = "INSERT INTO contactus1 (name, email, cdate,country, subject, message) VALUES
        ('" . $fullName . "', '" . $c1 . "', CURRENT_TIMESTAMP, '" . $c2 . "', '" . $m2 . "', '" . $t1 . "')";
echo $sql;
echo "<BR>";
$conn->query($sql);

// Comment out the line below during debugging to see the output, uncomment when you're done
header("Location: conctact.php");

?>
