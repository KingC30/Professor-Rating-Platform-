<?php
include '../users.php';
include "../dbconn.php";
$sql = "Select *from contactus1";

$result = $conn->query($sql);


echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
  <A Href=../home.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from Contacts </h2> <Br>";

echo "<Table border=0 width=80%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> Contact_ID </TD><TD> Full_Name </TD><TD> Date - Country </TD> <TD> Subject </TD> <TD> Message </TD>";
echo "</TR>";



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["id"];
		echo "</TD>";
    echo "<TD>";
        echo $row["name"];
		echo "</TD>";
    echo "<TD>";
        echo $row["cdate"] . ' - ' . $row["country"] ;
		echo "</TD>";
		echo "<TD>";
        echo $row["subject"];
		echo "</TD>";
		echo "<TD>";
        echo $row["message"];
		echo "</TD>";
		echo "<TD>";
        echo "";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=delcontact.php?id=$row[id]> <img src=image/delete.png width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
		echo "</TD>";
		echo "</TR>";
    }
} else {
    echo "0 results";
}


echo "</Table>";
echo "</Center>";

  //  while($row = $result->fetch_assoc())
	//	{
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["dept"]. " " . $row["message"]. "<br>";

		//echo $row["id"] . " - " . $row["name"] . "     <A href=editcontact.php?id=".$row["id"]."> Edit </A>"
		//. "     <A href=deletecontact.php?id=".$row["id"]."> XDelete </A>"		;

//		echo $row["id"];
	//	echo $row["name"];
	//	echo $row["dept"];
//		echo $row["message"];
//		echo "<BR><HR>";

	//	}

$conn->close();



?>
