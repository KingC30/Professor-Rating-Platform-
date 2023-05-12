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
	background-color: #393939;
	color: white;
}

.search-result {
  font-size: 24px;
  color: white;
}


body {
        font-family: Arial, sans-serif;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        background-color: white;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    tr:hover {
        background-color: #f5f5f5;
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
				<button class="dropbtn"><A href=../../../testpage.html ><B> HOME </B></A></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><A href=../../../admin/index1.html ><B> Login </B></A></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><A href=../../../contact/conctact.php ><B> ContactUs </B></A></button>
				</div>
			</center>
		</div>

	</header>

	<main>


				<article>
				<Center>
				<div class="hero-image">
					<div class="hero-text">
					<image src= ../../../bglogo.svg />
					<p>Professors</p>
					<div>

				</div>
				</div>
				</div>


				<Center>
				<div class="hero-backgroundcolor"><br>
				<br />
				<?php
							error_reporting(E_ALL);
							ini_set('display_errors', 1);


							$search = isset($_GET['search']) ? $_GET['search'] : '';

							$id = "";
							$id = $_GET['search'];

							if ($search !== '') {
									$escaped_query = mysqli_real_escape_string($conn, $search);
									$sql = "SELECT * FROM Professor WHERE pname LIKE '%$escaped_query%'";
									} else {
									$sql = "SELECT * FROM Professor";
							}

							$result = $conn->query($sql);

							if ($result !== false) {
								if (mysqli_num_rows($result) > 0) {
									echo $search !== '' ? "<h2>Search Results for '$search'</h2>" : "<h2>All Professors</h2>";
									echo "<table>";
									echo "<tr><th>ID</th><th>ProfessorName</th><th>courses</th><th>university</th><th>rating</th></tr>";
									while ($row = mysqli_fetch_assoc($result)) {
											 // Replace 'id' with the correct column name for the professor's ID
										$courses = $row['pcourse']; // Replace 'courses' with the correct column name for courses
										$university = $row['puni']; // Replace 'university' with the correct column name for university

										echo "<tr>";
										echo "<td> " . $row["pid"] . " </td>";
										echo "<td><a href='../rating/dprofessor.php?pid=" . $row["pid"] . "'>" . $row['pname'] . "</a></td>";
										echo "<td>" . $courses . "</td>";
										echo "<td>" . $university . "</td>";
										echo "<td><a href='../rating/rprofessor.php?pid=" . $row["pid"] . "'><button>Rate</button></a></td>";
										echo "</tr>";
										}
										echo "</table>";
								} else {
								echo "No results found for '$search'";
								}
							} else {
							echo "Error searching database: " . mysqli_error($conn);
							}

							mysqli_close($conn);

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



	<script>
	//log in
	const loginButton = document.getElementById('login-btn');
	const loginFormContainer = document.getElementById('login-form-container');
	const loginForm = document.getElementById('login-form');
	const closeBtn = document.getElementById('close-btn');

	loginButton.addEventListener('click', () => {
	  // Set the display property of the login form container to "flex"
	  // to make it visible and center the login form on the screen
	  loginFormContainer.style.display = 'flex';
	  loginFormContainer.style.alignItems = 'center';
	  loginFormContainer.style.justifyContent = 'center';

	  // Add an event listener to the close button to hide the login form
	  closeBtn.addEventListener('click', () => {
	    loginFormContainer.style.display = 'none';
	  });

	  // Add an event listener to the login form to prevent it from submitting
	  // and reloading the page
	  /*
	  loginForm.addEventListener('submit', (event) => {
	    event.preventDefault();
	    // TODO: handle login process here
	  });*/
	});
	</script>

	</body>
	</html>
