<html>
<head>
	<title> Rate MyProfessor - Template </title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/stylemenu.css">

</head>

<body>

<style>
.hero-image {
  background-image: url("bg.png");
  background-color: #cccccc;
  height: 100px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-backgroundcolor{
	background-color: #FFFFFF;
	color: black;
}
</style>
</head>
<body>

<?php
 require '../dbconn.php';

 ?>


		<header class="banner">
		<img src="images/logo.svg">

			<div class="panel panel-nav">
				<center>
					<div class="dropdown">
					<button class="dropbtn"><a href="../../../testpage.html"><b> HOME </b></a></button>
					</div>
					<div class="dropdown">
					<button class="dropbtn"><a href="../../../admin/index1.html"><b> Login </b></a></button>
					</div>
					<div class="dropdown">
					<button class="dropbtn"><a href="../../../contact/conctact.php"><b> ContactUs </b></a></button>
					</div>
				</center>
			</div>
</header>

	<main>
		<?php



		?>

				<article>
				<Center>
				<div class="hero-image">
					<div class="hero-text">
					<image src=bglogo.svg />
					<p>Professors</p>
					<div>

				</div>
				</div>
				</div>


				<Center>
				<div class="hero-backgroundcolor"><br>
				<Table border=0 width=90%>
					<?php

					if (isset($_GET['pid'])) {
				    $pid = intval($_GET['pid']);
				} else {
				    die("Error: 'pid' parameter is missing or empty.");
				}

				$sql = "SELECT Professor.pid, pname, pcourse, puni, rdate, rdate, rrating, rdifficulty, rtag, take_again, rcomments FROM Professor JOIN tblrating ON Professor.pid = tblrating.pid WHERE tblrating.pid=$pid ORDER BY rid DESC";
					//echo $sql;

					$result1 = $conn->query($sql);
					if ($result1) {
					    $row = $result1->fetch_assoc();
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					    exit();
					}
	if ($conn->query($sql) === FALSE) { echo "Error: " . $sql . "<br>" . $conn->error; }
	$count=$result1->num_rows;
	if($count>=1){


					echo "<Tr><Td Width=50%>";
						echo "
							<div class=hero-backgroundcolor>
								<H1> ".$row["pname"]." - ".$row["pcourse"]." - ".$row["puni"]."</H2>
							</div>
							";
					$pname = $row["pname"];
					$result2 = $conn->query($sql);
					$nrate = 0;
					$ndifficulty = 0;
					$num_rows = 5;
					$num_rows = $result2->num_rows;;
						while($row = $result2->fetch_assoc())
						{
						$nrate = $nrate + $row["rrating"];
						$ndifficulty = $ndifficulty + $row["rdifficulty"];
						}

					echo "<Div><H1 class=lableRating>". round($nrate / $num_rows,1) ."</H1><p class=lable5>/ 5 </p><p>Overall Quality Based on: ". $num_rows ." ratings</p>
					<Div class=rateP> <a href=rprofessor.php?pid=$pid>Rate Professor ".$pname." </a> <Div>
					</Div></Td>
					<Td>";
					include ("chartratingD.php");
					echo "</Td>
					</Tr>";
					echo "";
					echo "<Tr><Td><br><H3 class=lableDificulty>Dificulity: ". round($ndifficulty / $num_rows,1) ."</H3>";
					echo "</Td><Td>  </Td>";
					echo "</Table>";
					$result = $conn->query($sql);
					echo "<Table border=0>";
						while($row = $result->fetch_assoc())
						{
							if ($row["rrating"]==4 || $row["rrating"]==5 )
							{
								$imgr = "images0/awe.png";
							}
							if ($row["rrating"]==3 || $row["rrating"]==2)
							{
								$imgr = "images0/ok.png";
							}
							if ($row["rrating"]==1)
							{
								$imgr = "images0/awf.png";
							}
						echo "<div class=hero-backgroundcolor>
								<Tr><Td width=20%><P>QUALITY<BR><b class=lableRatingSmall>".$row["rrating"]."</b></P></Td><Td width=60%><b>".$row["pcourse"]." <img src=$imgr /></b></Td><Td Width=20%> Posted on: ".$row["rdate"]."</Td></Tr>
								<Tr><Td width=20%><p>DIFFICULTY<BR><b class=lableRatingSmall>".$row["rdifficulty"]."</b></p></Td><Td width=60%>".$row["rtag"]."</Td><Td Width=20%></Td></Tr>
								<Tr><Td width=20%></Td><Td width=60%>".$row["rcomments"]."</Td><Td Width=20%></Td></Tr>
								<Tr><Td colspan=3><Hr></Td></Tr>
							</div>
						<Br>";
						}
					echo "</Table>";
					$conn->close();

			}
			Else { 	echo "<H1> No Rating Found for the Professor </H1>";  }

	?>
</div>
</Center>
</article>
</main>


	<footer>
	  <center>
	    © 2023 Bao Vo USA News, Inc. All Rights Reserved
	    <div>
	      <center>
	      <ul>
	        <li><a href="#">SITE</a></li>
	        <li><a href="#">About</a></li>
	        <li><a href="#">Help</a></li>
	        <li><a href="#">Site Guidelines</a></li>
	      </ul>
	      <center>
	    </div>
	  </center>
	</footer>


</body>
</html>
