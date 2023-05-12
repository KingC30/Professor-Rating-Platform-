<!--
Gia bao Vo
IS448
Final Project
-->



<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
    echo "<H3>Welcome to the admin's area, User Name: " . $_SESSION['name'] . "!</H3>";
} else {
    header("Location: ../testpage.html");
}

?>
