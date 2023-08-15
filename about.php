<html>
<head>
	<title>About - Matrix Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="main">
		<div class="header">
			<h1>About Me!</h1>
		</div>
		<div class="nb">
			<div id='navleft'>
				<a href="index.php">Home</a>
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
		<div style="width:90%;margin: auto; overflow: hidden;">
		<div class="open" style="text-align: left;">
			<br>Hey there!
			<br><br>
			I am a 19-year old student and freelancer with a passion for scripting and coding. I would be more than happy to be involved in projects that cover my domain which includes:
			<ul>
				<li>HTML and CSS</li>
				<li>Python</li>
				<li>Javascript</li>
				<li>PHP</li>
			</ul>
			Please find below ways to contact me for a projct or to work with me!
			<br><br>
		</div>
		<div class='close'>
			<span style="color:red;">Email:</span> somebodyuknow@gmail.com<br>
			<span style="color:green;">Mobile:</span> 9999999999<br>
			<span style="color:#1DA1F2;">Twitter:</span> @somebodyuknow<br>
			<span style="color: white;background-image:linear-gradient(to right, #405DE6,#5B51D8,#833AB4,#C13584,#E1306C, #FD1D1D,#F56040,#F77737,#FCAF45,#FFDC80);">Instagram:</span> somebody_u_know
		</div>
	</div>
	<br>
	</div>
</div>
	<footer class="foot">
    	Copyright 2022 &copy; Yash Inc., All Rights Reserved.
	</footer>
</body>
</html>