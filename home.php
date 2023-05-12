<!--
Gia bao Vo
IS448
Final Project
-->



<?php
include 'users.php';
 ?>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

  <?php
Echo '<a href=logout.php> || Logout  ||</a>';
echo '<br><Center>';
echo '<H1> Admin Home </H1>';

echo '<br><H3>';
echo '<br>';
Echo '<a href=prof/inP/dispalyproff.php> [ Display Professor ]</a>';
echo '   ---   |   ---   ';
Echo '<a href=prof/inP/mpinsert.php> [ inserting Professor ]</a>';
echo '   ---   |   ---   ';
Echo '<a href=prof/inP/rating/displayrating.php> [ Rating ]</a>';
echo '   ---   |   ---   ';
Echo '<a href=style/updatestyle.php> [ StyleSheet ]</a>';
echo '   ---   |   ---   ';
Echo '<a href=contact/dispalycontactus.php> [ Display Contact ]</a>';
echo '</H3><br>';


echo '<br></Center>';
?>


</body>

</html>
