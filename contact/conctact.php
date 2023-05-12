<html><head>
	<title> New Site - Details</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/stylemenu.css">

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


	body {font-family: Arial, Helvetica, sans-serif;}
	* {box-sizing: border-box;}

	input[type=text], select, textarea {
	  width: 100%;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	  margin-top: 6px;
	  margin-bottom: 16px;
	  resize: vertical;
	}

	input[type=submit] {
	  background-color: #4CAF50;
	  color: white;
	  padding: 12px 20px;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}

	.container {
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 20px;
	  width: 100%


			H1{ color:#f2071f;}
	H2{ color:#ff5757;}
	H3{ color:#61c2ff;}
	a:link{ color:#29f500;}
	a:visited { color:#f90101;}
	a:hover{ color:#f60404;}
	a:active{ color:#e7f702;}
	.lableRating{ color:#050505;}
	.lable5{ color:#080808;}
	.lableDificulty{ color:#18b4f7;}
	.rateP{ color:#19d1f5;}
	.lableRatingSmall{ color:#ff0a0a;}

	</style>

	<header class="banner">
  <h1>My Contact Us</h1>

		<div class="panel panel-nav">
			<center>
				<div class="dropdown">
				<button class="dropbtn"><a href="../testpage.html"><b> HOME </b></a></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><a href="conctact.php"><b> ContactUs </b></a></button>
				</div>


			
			</center>
		</div>

	</header>

	<main>

			<section>
				<article>
				<div class="container">
				<h1>  </h1>
					<h2>Contact Form</h2>
					<br>
					<p> Owner Gia Bao Vo </p>
					<p> IS448 Final Project ITE468 </p>
					<p> Email: giabaov8@proton.me </p>
					<p> Contact: ###-###-#### </p><br>
				</div>
				</article>
			<article>

				<div class="container">
					  <form action="sendcontact.php"  method="post">
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

						<label for="email">Email</label>
						<input type="text" id="email" name="email" placeholder="Your email.."><br>


						<label for="country">Country</label>
						<select id="country" name="country">
						  <option value="canada">Canada</option>
						  <option value="usa">USA</option>
						</select><br>

						<label for="subject">Subject</label>
						<input type="text" id="Subject" name="Subject" placeholder="Subject.."><br>

						<label for="Message">Message</label>
						<textarea id="message" name="message" placeholder="Write you message.." style="height:200px"></textarea><br>

						<input type="submit" value="Submit">
					  </form>
					</div>
				</article>
				</section>
		</main>

	<footer>
		<center>
			Footer information
		</center>
	</footer>

</body></html>
