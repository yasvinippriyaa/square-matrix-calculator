<html>
<head>
	<title>Matrix Calculator - 2 x 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
<div class="container">
	<div class="main">
		<div class='header'>
			<h1>Matrix Calculator</h1>
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
		<div class="open">
			<br>Enter the elements of your 2 x 2 matrix:
			<br><br>
			<form name='form'>
				<input type="number" name="a" required>
				<input type="number" name="a" required><br>
				<input type="number" name="a" required>
				<input type="number" name="a" required><br>
				<input type="button" name="det" id="subs" value="Calculate its Determinant" onclick="deter2();">
				<input type="button" name="trans" id="subs" value="Find its Transpose" onclick="trans2();">
				<input type="button" name="inv" id="subs" value="Find its Inverse" onclick="inv2();">
				<p id="deter" style="display: none;"></p>
				<div id="transpose" style='display: none;'>
					<br>Transpose of given matrix:<br>
					<input name="b">
					<input name="b"><br>
					<input name="b">
					<input name="b">
				</div>
				<div id="inverse" style='display: none;'>
					<br>Inverse of given matrix:<br>
					<input name="i">
					<input name="i"><br>
					<input name="i">
					<input name="i">
				</div>
				<br>
				<input type="reset" value="Reset" id="subs" onclick="window.location.reload();">
			</form>
		</div>
	</div>
</div>
<footer class="foot">
	Copyright 2022 &copy; Yash Inc., All Rights Reserved.
</footer>
</body>
</html>