<?php
	session_start();
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$pw = $_POST['pw'];
		$conn = mysqli_connect('localhost','root','','matrix');
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$pw'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) == 0){
			echo "<script>alert('Incorrect Email or Password or both!')</script>";
		}
		else{
			$row = mysqli_fetch_array($result);			
			$_SESSION['uname'] = $row['username'];
			header("Location: index.php");
		}
	}
?>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.ques{
            display: inline-block;
            background-color: #fff4e8;
            margin: 10% ;            
        }
        .ques input{
        	height: 40px;
        	font-size: 20px;
        	border-radius: 5px;
        	padding: 5px;
        }
        .ques h1{
            color: #664EAE;
        }
        .ques a{
        	text-decoration: none;
        	color:#610094 ;
        }
        #button{
            color: white;
            background-color: #664EAE;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
        }
        body{
        	text-align: center;
       		background-image:linear-gradient(to right, #04040c,#1A0554,#610094,#664EAE);	

        }
	</style>
</head>
<body>
	<form action="" method="post">
		<fieldset class='ques'>
			<h1>Login</h1>
			<input type='email' name='email' placeholder="Email">
			<br><br>
			<input type='password' name='pw' placeholder="Password">
			<br><br>
			<button name="submit" id='button'>Login</button>
			<br><br>
			Don't have an account? 
			<b><a href='register.php'>Register Here</a></b>
		</fieldset>
	</form>
</body>
</html>