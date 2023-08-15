<html>
<head>
	<title>Support</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="main">
		<div class='header'>
			<h1>Support Me!</h1>
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
			<div class="open">
				<br>Like what I do?!<br><br>
				Become one of my Patreons by clicking the link below:<br>
				<a href = 'https://www.patreon.com/' target="blank">
					<button>Donate and Support</button>
				</a>
				<br>
				To know more about me and what I do visit the About section!
			</div>
		</div>
	</div>
</div>
<footer class="foot">
	Copyright 2022 &copy; Yash Inc., All Rights Reserved.
</footer>
</body>
</html>