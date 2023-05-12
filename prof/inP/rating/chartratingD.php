<?php
 require '../dbconn.php';

$id = $_GET['pid'];

//$sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";
//$sqlr = "SELECT rrating FROM tblrating WHERE p_fk = 1";

//echo $sql;

//$sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";
/*
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

$dataPoints = array();
foreach ($result as $row) {
	$dataPoints[] = $row;
}

$dataPoints = array(
	array("y" => 3,"label" => "Awful 1" ),
	array("y" => 0,"label" => "Ok 2" ),
	array("y" => 2,"label" => "Good 3" ),
	array("y" => 1,"label" => "Great 4" ),
	array("y" => 1,"label" => "Awesome 5" )
);


*/
$xc1 = 0;
$xc2 = 0;
$xc3 = 0;
$xc4 = 0;
$xc5 = 0;

for ($x = 1; $x <= 5; $x++) {
  //echo "The number is: $x <br>";

  $sqlr = "SELECT count(rrating) as rrating FROM tblrating WHERE pid = $id and rrating =$x ";

  $resultr = $conn->query($sqlr);
  if (!$resultr) {
      echo "Error: " . $conn->error;
      exit;
  }
    $row = $resultr->fetch_assoc();

//echo $sql;

	if ($x == 1)
	{
		$xc1 = $row["rrating"];
	}
	Else if ($x ==2)
	{
		$xc2 = $row["rrating"];
	}
	Else if ($x ==3)
	{
		$xc3 = $row["rrating"];
	}
	Else if ($x ==4)
	{
		$xc4 = $row["rrating"];
	}
	Else
	{
		$xc5 = $row["rrating"];
	}


}

$dataPoints = array(
	array("y" => $xc1,"label" => "Awful 1" ),
	array("y" => $xc2,"label" => "Ok 2" ),
	array("y" => $xc3,"label" => "Good 3" ),
	array("y" => $xc4,"label" => "Great 4" ),
	array("y" => $xc5,"label" => "Awesome 5" )
);



//mysqli_close($conn);

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Distrubution Rating"
	},
	axisY: {
		title: "Rating",
		interval: 1,
		viewportMinimum: 0,
        viewportMaximum: 5
		},
	data: [{
		type: "bar",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
