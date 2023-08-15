<?php
	session_start();
	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pw = $_POST['pw'];
		$cpw = $_POST['cpw'];
		if ($pw != $cpw){
			echo "<script>alert('Password not matched!')</script>";
		}
		else{

			$conn = mysqli_connect('localhost','root','','matrix');
			if(!$conn){
				die("<script>alert('Oops! Connection failed...Try again later')</script>");
			} else {
				$sql = "SELECT * FROM users WHERE email='$email'";
				$result = mysqli_query($conn,$sql);
				if ((mysqli_num_rows($result))>0){
					echo "<script>alert('Email already registered by another user!!')</script>";
				}
				else{
					$sql = "INSERT INTO users (username, email, password) VALUES ('$uname', '$email', '$pw')";
					$result = mysqli_query($conn,$sql);
					if(!$result){
						echo "<script>alert('Something went wrong! Try again later...')</script>";
					}
					else{
						echo "<script>alert('User Registration Successful!')</script>";
						$_SESSION['uname'] = $uname;
						$uname = $email = $pw = $cpw = '';
						header("Location: index.php");
					}
				}
			}
		}
	}
?>
<html>
<head>
	<title>Register!</title>
	<style type="text/css">
		.ques{
            display: inline-block;
            background-color: white;
            margin: 10% ;
            border-radius: 10px;            
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
			<h1>Register</h1>
			<input type='text' name='uname' placeholder="Username">
			<br><br>
			<input type='email' name='email' placeholder="Email">
			<br><br>
			<input type='password' name='pw' placeholder="Password">
			<br><br>
			<input type='password' name='cpw' placeholder="Confirm Password">
			<br><br>
			<button name="submit" id='button'>Register</button>
			<br><br>
			Already have an account? 
			<b><a href='login.php'>Login Here</a></b>
		</fieldset>
	</form>
</body>
</html>