<html>
<head>
	<title>Matrix Calculator - 4 x 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/9.3.2/math.js"></script>
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
			<br>Enter the elements of your 4 x 4 matrix:
			<br><br>
			<form name='form'>
				<input type="number" name="a">
				<input type="number" name="a">
				<input type="number" name="a">
				<input type="number" name="a"><br>
				<input type="number" name="a">
				<input type="number" name="a">
				<input type="number" name="a">
				<input type="number" name="a"><br>
				<input type="number" name="a">
				<input type="number" name="a">
				<input type="number" name="a">
				<input type="number" name="a"><br>
				<input type="number" name="a">
				<input type="number" name="a">
				<input type="number" name="a">
				<input type="number" name="a"><br>
				
				<input type="button" name="det" id="subs" value="Calculate its Determinant" onclick="deter4();">
				
				<input type="button" name="trans" id="subs" value="Find its Transpose" onclick="trans4();">
				
				<input type="button" name="inv" id="subs" value="Find its Inverse" onclick="inv4();">	
			
				<p id="deter" style="display:none;"></p>
				<div id="transpose" style='display: none;'>
					<br>Transpose of given matrix:<br>
					<input name="b">
					<input name="b">
					<input name="b">
					<input name="b"><br>
					<input name="b">
					<input name="b">
					<input name="b">
					<input name="b"><br>
					<input name="b">
					<input name="b">
					<input name="b">
					<input name="b"><br>
					<input name="b">
					<input name="b">
					<input name="b">
					<input name="b">

				</div>
				<div id="inverse4" style='display: none;'>
					<br>Inverse of given matrix:<br>
					<input name="i">
					<input name="i">
					<input name="i">
					<input name="i"><br>
					<input name="i">
					<input name="i">
					<input name="i">
					<input name="i"><br>
					<input name="i">
					<input name="i">
					<input name="i">
					<input name="i"><br>
					<input name="i">
					<input name="i">
					<input name="i">
					<input name="i">
				</div>
				<input type="reset" value="Reset" id="subs" onclick="window.location.reload();">
			</form>
		</div>
	</div>
</div>	
<footer class="foot">
	Copyright 2022 &copy; Yash Inc., All Rights Reserved.
</footer>
<script type="text/javascript">
	function extract4(){
		t = document.getElementsByName('a');
		a11 = parseInt(t[0].value);
		a12 = parseInt(t[1].value);
		a13 = parseInt(t[2].value);
		a14 = parseInt(t[3].value);
		a21 = parseInt(t[4].value);
		a22 = parseInt(t[5].value);
		a23 = parseInt(t[6].value);
		a24 = parseInt(t[7].value);
		a31 = parseInt(t[8].value);
		a32 = parseInt(t[9].value);
		a33 = parseInt(t[10].value);
		a34 = parseInt(t[11].value);
		a41 = parseInt(t[12].value);
		a42 = parseInt(t[13].value);
		a43 = parseInt(t[14].value);
		a44 = parseInt(t[15].value);
		return new Array(new Array(a11,a12,a13,a14),new Array(a21,a22,a23,a24),new Array(a31,a32,a33,a34),new Array(a41,a42,a43,a44));
	}
	
	function det4(a){
		d = math.det(math.matrix(a));
		return math.round(d);
	}

	function deter4(){
		a = extract4();
		det = det4(a);
		disp = "Determinant of given matrix is: "+det;
		document.getElementById('deter').style.display = 'block';
		document.getElementById("deter").innerHTML = disp;
	}

	function trans4(){
		a = extract4()
		c = math.matrix(a);
		t = math.transpose(c);
		r = document.getElementsByName('b');
		disp = "Given Matrix : "+c+"<br>Its Transpose : "+t;
		document.getElementById('transpose').style.display = 'block';		
		document.getElementById('transpose').innerHTML = disp;
	}

	function inv4(){
		a = extract4();
		c = math.matrix(a);
		t = math.inv(c);
		r = document.getElementsByName('i');
		disp = "<br>Given Matrix : "+c+"<br>Its Inverse : <br>"+t;
		document.getElementById('inverse4').style.display = 'block';		
		document.getElementById('inverse4').innerHTML = disp;
	}
</script>
</body>
</html>