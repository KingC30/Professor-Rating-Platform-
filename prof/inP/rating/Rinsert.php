<?php
require '../dbconn.php';


// Get form data
$pid = intval($_POST['pid']);
error_log("PID Value: " . $pid);

$course = mysqli_real_escape_string($conn, $_POST['course']);
$professor_rating = intval($_POST['professor_rating']);
$difficulty_level = intval($_POST['difficulty_level']);
$take_again = mysqli_real_escape_string($conn, $_POST['take_again']);
$comments = mysqli_real_escape_string($conn, $_POST['comments']);

// Prepare tags
$tags = array("tough_grader", "test_heavy", "respected", "amazing_lecture", "lecture_heavy");
$selected_tags = array();
foreach ($tags as $tag) {
  if (isset($_POST[$tag])) {
    $selected_tags[] = $tag;
  }
}
$rtag = implode(',', $selected_tags);

// Insert the rating data into the database
$sql = "INSERT INTO tblrating (pid, rcourse, rtag, rdate, rrating, rdifficulty, take_again, rcomments) VALUES ('$pid','$course','$rtag', CURRENT_TIMESTAMP, '$professor_rating', '$difficulty_level', '$take_again', '$comments')"; // Updated this line



$stmt = mysqli_prepare($conn, $sql);
if ($stmt === false) {
    die("Error preparing the statement: " . mysqli_error($conn));
}


$result = mysqli_stmt_execute($stmt);

// Check for successful insertion
if ($result) {
  echo "Rating submitted successfully.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

// Redirect back to the displayprofessor.php page with the professor's ID
//error_log("PID Value: " . $pid);

header("Location: dprofessor.php?pid=$pid");
exit();

?>
