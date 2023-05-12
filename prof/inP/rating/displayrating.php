<?php
include '../../../users.php';

include "../dbconn.php";

$sql = "SELECT Professor.pid, pname,email, pcourse, puni,rid, rdate, rdate, rrating, rdifficulty, rtag, take_again, rcomments from Professor JOIN tblrating ON Professor.pid = tblrating.pid order by pname asc";
				//echo $sql;";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
<a href=../dispalyproff.php > Professor         ---     <A Href=../../../home.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Professor Rating</h2> <Br>";

echo "<Table border=0 width=90%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> PName </TD><TD> Email</TD><TD> Uni </TD><TD> Course </TD>
		<TD> Rating </TD><TD> Difficulity </TD><TD> again</TD><TD> rtage </TD><TD> Date </TD><TD> Comments </TD>
     <TD> Edit </TD> <TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["pname"];
		echo "</TD>";
		echo "<TD>";
        echo $row["email"];
		echo "</TD>";
		echo "<TD>";
        echo $row["puni"];
		echo "</TD>";
		echo "<TD>";
        echo $row["pcourse"];
		echo "<TD>";
        echo $row["rrating"];
		echo "</TD>";
		echo "<TD>";
        echo $row["rdifficulty"];
		echo "</TD>";
		echo "<TD>";
        echo $row["take_again"];
		echo "</TD>";
		echo "<TD>";
        echo $row["rtag"];
		echo "</TD>";
		echo "<TD>";
        echo $row["rdate"];
		echo "</TD>";
		echo "<TD width=20%>";
        echo $row["rcomments"];
		echo "</TD>";
		echo "<TD>";
		echo "<A href=../updateinsertrating.php?pid=$row[rid]> <img src=images/edit.png width=25 height=25> </A>";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=../delrating.php?pid=$row[rid]> <img src=images/delete.png width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this rating?');\"> </A> ";
		echo "</TD>";
		echo "</TR>";
    }
} else {
    echo "0 results";
}


echo "</Table>";
echo "</Center>";

$conn->close();



?>
