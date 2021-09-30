<?php
session_start();
$conn = mysqli_connect( "localhost", "root", "", "last_assignment" );

if ( isset( $_REQUEST[ 'submit_btn' ] ) ) {


	$name = $_POST[ 'name' ];
	$email = $_POST[ 'email' ];
	$password = $_POST[ 'password' ];


	$query = "select * from user where email = '" . $email . "'";
	$var = mysqli_query( $conn, $query );
	$num_rows = mysqli_num_rows( $var );


	if ( $num_rows > 0 ) {

		echo "<script> alert ('user already exists') </script>";

	} else {

		$insert = "insert into user (name,email,password) values 
		
		('" . $name . "','" . $email . "','" . $password . "')";

		mysqli_query( $conn, $insert );

		mysqli_close( $conn );

		$_SESSION[ 'SESS-EMAIL' ] = $email;
		$_SESSION[ 'SESS-NAME' ] = $name;

		header( "Location: data.php?success" );


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
		background: url(https://images.unsplash.com/photo-1458929526027-052f5d6a3c5e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.back
	{
		background: black;
		opacity: 0.6;
		
	}
	
	.container {
		width: 300px;
		min-height: 100px;
		background: white;
		
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		position: absolute;
		padding: 40px 20px;
		border-radius: 5px;
		opacity: 0.6;
		text-align: center;
	}
	
	.form-control {
		background: purple;
		color: white;
		padding: 10px 10px;
		margin-bottom: 10px;
		width: 80%;
		opacity: 0.7;
	}
	
	.btn {
		border-radius: 50px;
		padding: 10px 20px;
		background: purple;
		color: white;
		width: 80%;
	}
</style>

<body>

	<div class="container">
		<form action="signup.php" method="post" enctype="multipart/form-data">
			<input class="form-control" name="name" id="name" placeholder="Enter your name" type="text" required>
			<input class="form-control" name="email" id="email" placeholder="Enter your Email" type="email" required>
			<input class="form-control" name="password" id="password" placeholder="Enter your Password" type="password" required>
			<br>
			<button name="submit_btn" class="btn" type="submit">Signup</button>
		</form>

	</div>

</body>

</html>