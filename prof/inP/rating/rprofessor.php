<?php
require '../dbconn.php';

$pid = $_GET['pid'];

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<Title> Rate MyProfessor </Title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style/style1.css">
<Script>
function updateTextInput(val)
		{
			var strtext = "";
			if (val == 1)
			{
				strtext = "Awful";
			}
			else if (val == 2)
			{
				strtext = "Ok";
			}
			else if (val == 3)
			{
				strtext = "Good";
			}
			else if (val == 4)
			{
				strtext = "Great";
			}
			else
			{
				strtext = "Awesome";
			}
          document.getElementById('textInput').value=val + " : " + strtext;
        }
function updateTextInput1(val)
		{
          	var strtext1 = "";
			if (val == 1)
			{
				strtext1 = "Very Easy";
			}
			else if (val == 2)
			{
				strtext1 = "Easy";
			}
			else if (val == 3)
			{
				strtext1 = "Average";
			}
			else if (val == 4)
			{
				strtext1 = "Dificult";
			}
			else
			{
				strtext1 = "Very Dificult";
			}
          document.getElementById('textInput1').value=val + " : " + strtext1;
        }



        document.addEventListener("DOMContentLoaded", function() {
          var checkboxgroup = document.getElementById('checkboxgroup').getElementsByTagName("input");
          var limit = 3;
          for (var i = 0; i < checkboxgroup.length; i++) {
            checkboxgroup[i].onclick = function() {
              var checkedcount = 0;
              for (var i = 0; i < checkboxgroup.length; i++) {
                checkedcount += (checkboxgroup[i].checked) ? 1 : 0;
              }
              if (checkedcount > limit) {
                alert("You can select a maximum of " + limit + " checkboxes.");
                this.checked = false;
              }
            }
          }
        });
        </script>

</head>

<Center>
<H1> Rate MyProfessor </H1>

<form action="/myproject/test/prof/inP/rating/Rinsert.php?pid=<?php echo $pid; ?>" method="post" enctype="multipart/form-data">

      <?php
      echo '<input type="hidden" name="pid" value="' . $pid . '">
      <table border="0">
        <tr>
          <td><h3>Course</h3></td>
          <td>
            <select name="course">';
              $sql1 = "SELECT * from Professor where pid=$pid";
              $result1 = $conn->query($sql1);
              while ($row1 = $result1->fetch_assoc()) {
                echo '<option value=' . $row1["pid"] . '>' . $row1["pcourse"] . '</option>';
              }
echo '    </select>
          </td>
        </tr>
        <tr>
          <td><h3>Rate your professor</h3></td>
          <td>
            <input type="range" min="1" max="5" value="3" step="1" name="professor_rating" oninput="updateTextInput(this.value);">
            <input type="text" id="textInput" value="3 : Good" readonly>
          </td>
        </tr>
        <tr>
          <td><h3>Difficulty Level</h3></td>
          <td>
            <input type="range" min="1" max="5" value="3" step="1" name="difficulty_level" oninput="updateTextInput1(this.value);">
            <input type="text" id="textInput1" value="3 : Average" readonly>
          </td>
        </tr>
        <tr>
          <td><h3>Would you take this professor again?</h3></td>
          <td>
            <label><input type="radio" name="take_again" value="yes" checked> Yes</label>
            <label><input type="radio" name="take_again" value="no"> No</label>
          </td>
        </tr>
        <tr>
          <td><h3>Select up to 3 tags</h3></td>
          <td id="checkboxgroup">
            <label><input type="checkbox" name="tough_grader" value="1"> Tough Grader</label><br>
            <label><input type="checkbox" name="test_heavy" value="1"> Test Heavy</label><br>
            <label><input type="checkbox" name="respected" value="1"> Respected</label><br>
            <label><input type="checkbox" name="amazing_lecture" value="1"> Amazing Lecture</label><br>
            <label><input type="checkbox" name="lecture_heavy" value="1"> Lecture Heavy</label>
          </td>
        </tr>
        <tr>
          <td><h3>Comments</h3></td>
          <td>
            <textarea name="comments" rows="4" cols="50"></textarea>
          </td>
        </tr>
        <tr>
          <td><h3>Write a Review*</h3></td>
          <td>
          <p> &nbsp;&nbsp;&nbsp;Discuss the professor’s professional abilities including teaching style <Br>
           and ability to convey the material clearly </p>

                     </td>
        </tr>

        <tr>
        <td><h3>Guidelines</h3></td>
        <td><p>
        &nbsp;&nbsp;&nbsp;Your rating could be removed if you use profanity or derogatory terms. <Br>
        &nbsp;&nbsp;&nbsp;Don’t claim that the professor shows bias or favoritism for or against students. <Br>
        &nbsp;&nbsp;&nbsp;Don’t forget to proof read!</p> <Br> <Br>";
        </td>
        </tr>

        <tr>
          <td colspan="2">
            <input type="submit" value="Submit Rating">
            <button type="button" onclick="location.href=' . "'../../../testpage.html'" . '">Cancel</button>

          </td>
        </tr>
      </table>
    </form>';


          ?>
