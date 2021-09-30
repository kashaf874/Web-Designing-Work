<?php
session_start();
	$conn = mysqli_connect( "localhost", "root", "", "last_assignment" );

if(isset($_REQUEST['submit_btn'])){
	
	
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	$query = "select * from user where email = '".$email."' AND password = '".$password."' " ;
	$var = mysqli_query($conn,$query);
	$num_rows = mysqli_num_rows($var);
	
	
	if($num_rows > 0){
		
		$obj = mysqli_fetch_assoc($var);
		 
		$_SESSION['SESS-EMAIL'] = $obj['email'];
		$_SESSION['SESS-NAME'] = $obj['name'];
		header("Location: data.php?loginSuccess");
		
	}else{
		
		header("Location: login.php?loginFailed");
		
		
	}
	
}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign up</title>
<link href="data.php" rel="stylesheet" type="text/css">
<link href="signup.php" rel="stylesheet" type="text/css">
</head>
<style>
	

	html { 
	
		background: black;
		opacity:0.8 ;
  background: url(https://images.unsplash.com/photo-1483032711911-cfd45aabc9a0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
		
}

	</div>
	.back
	{
		background: black;
		opacity: .6;
		
		
	}
	
	.container1 {
		width: 100%;
		height: 100%;
		background: black;
		padding: 24.1% 0.01%;
		
		
	}
	
	
	.container {
		width: 300px;
		min-height: 100px;
		background: #B98038;
		border: #BFB8B8;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		position: absolute;
		padding: 40px 20px;
		border-radius: 5px;
		opacity: .99;
		text-align: center;
	}
	
	.form-control {
		background: white;
		color: black;
		padding: 10px 10px;
		margin-bottom: 10px;
		width: 80%;
		opacity: 0.5;
	}
	
	.btn {
		border-radius: 50px;
		border: none;
		padding: 10px 20px;
		background: silver ;
		color: black;
		opacity: 0.8;
		width: 80%;
	}
</style>
<body>
	
	<div class="container1">
	<div class="container">
	<form action="login.php" method="post" enctype="multipart/form-data">
		
		<input class="form-control" name="email" id="email" placeholder="Enter your Email" type="email" required>
		<input class="form-control" name="password" id="password" placeholder="Enter your Password" type="password" required>
		<br>
		<button name="submit_btn" class="btn" type="submit">Login</button>
	</form>		
	
	</div>
		</div>
	
</body>
</html>