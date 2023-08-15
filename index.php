<html>
<head>
	<title>Matrix Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="main">
		<div class='header'>
			<h1>Matrix Calculator</h1>
		</div>
		<div class="nb">
			<div id='navleft'>
				<a href="#">Home</a>
				<a href="about.php" target="blank">About</a>
				<a href="support.php" target="blank">Support</a>
			</div>
			<div id='navright'>
			<?php
				session_start();
				if (session_id() == '' || !isset($_SESSION['uname'])) {
					echo "Want to join us as a Beta User? <b><a href='register.php'>Register Here</a></b>";
				} else {
					echo "Hi, ".$_SESSION['uname']."! <a href='logout.php'>Logout</a>";
				}
			?>
			</div>
		</div>		
		<div class="open">
			<br>Select the dimensions of your matrix:<br>
			<center>
				<a href="two.php" target="blank"><button>2 x 2</button></a><br>
				<a href="three.php" target="blank"><button>3 x 3</button></a><br>
				<a href="four.php" target="blank"><button>4 x 4</button></a><br>
			</center>			
			This website will help you find:
			<br><br>
			Determinant of a Square Matrix || Transpose of a Matrix || Inverse of a Matrix
			<br>
		</div>
	</div>
</div>
<footer class="foot">
	Copyright 2022 &copy; Yash Inc., All Rights Reserved.
</footer>
</body>
</html>