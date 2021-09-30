<?php

session_start();

if(!isset($_SESSION['SESS-EMAIL']) && !isset($_SESSION['SESS-NAME'])){
	
	header("Location: login.php");
	
}


 $conn = mysqli_connect( "localhost", "root", "", "last_assignment" );

 if ( isset( $_REQUEST[ 'save' ] ) ) {

 	
 	$name = $_POST[ 'Name' ];
 	$contact = $_POST[ 'Contact' ];
 	$email = $_POST[ 'Email' ];
 	$massage = $_POST[ 'Massage' ];


 	$query = "insert into data( Name, Contact, Email, Massage) VALUES ('".$name."','".$contact."','".$email."','".$massage."')";
 	mysqli_query( $conn, $query );
//	 echo $query;
//	 die();

 	header( "Location: data1.php?addsuccess" );


 }

 if ( isset( $_REQUEST[ 'update' ] ) ) {
 	$id = $_POST[ 'id' ];
 	$name = $_POST[ 'Name' ];
 	$contact = $_POST[ 'Contact' ];
 	$email = $_POST[ 'Email' ];
 	$massage = $_POST[ 'Massage' ];
 	$id = $_POST[ 'update_id' ];
 	$udate = "update form set Name = '" . $name . "',Contact = '" . $contact . "',Email = '" . $email . "',Massage = '" . $massage . "' where ID = '" . $id . "')";
 
 	mysqli_query( $conn, $udate );

 	header( "Location: data1.php?update_success" );

 }

 ?>


<script>
	function myFunction() {
		alert( "I am an alert box!" );
	}
</script>


<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

	<title>Document</title>
</head>




<body>
	<div class="jumbotron text-center" style="margin-bottom:0">
		<h1>LOGIN FORM</h1>
		<p>THIS WILL TAKE FEW MINUTES</p>
		<a href="logout.php">Logout</a>
	</div>
	<?php 
if(isset($_REQUEST['edit'])){

	$id = $_REQUEST['edit'];
	$query = "select * from data where id = ".$id;
	$var = mysqli_query($conn,$query);
	$obj = mysqli_fetch_array($var);

?>




	<form enctype="multipart/form-data" method="post" name="myform">
		<div style="padding: 50px 100px; background-color:coral; color: white; height: 565px">
			<div class="col-md-offset-3   col-md-6">
				<div class="container-fluid">
					<div class="form-row">
						<div class=" col-md-offset-2 col-md-6">
							<label for="inputPassword4">Name</label>
							<input name="Name" type="text" class="form-control" placeholder="Name" value="<?php echo $obj['Name'] ?>" >


						</div>
						<div class=" col-md-offset-2 col-md-6">
							<label for="inputPassword4">Contact</label>
							<input name="Contact" type="number" class="form-control" placeholder="Contact" value="<?php echo $obj['Contact'] ?>" >


						</div>

						<div class=" col-md-offset-2  col-md-6">
							<label for="inputPassword4">Email</label>
							<input name="Email" type="text" class="form-control" placeholder="Email" value="<?php echo $obj['Email'] ?>" >



						</div>
						<div class=" col-md-offset-2  col-md-6">
							<label for="inputPassword4">Massage</label>
							<input name="Massage" type="text" class="form-control" value="<?php echo $obj['Massage'] ?>" >



						</div>

						<div class=" col-md-offset-2  col-md-6 ">
							<label for="inputPassword4"></label>
							<button name="save"  class="btn btn-success btn-block"  onClick="return func1();"  type="submit">Update</button>
						</div>





					</div>
				</div>
			</div>
		</div>

	</form>
	<?php }else{ ?>
	
<form enctype="multipart/form-data" method="post" name="myform">
		<div style="padding: 50px 100px; background-color:coral; color: white; height: 565px">
			<div class="col-md-offset-3   col-md-6">
				<div class="container-fluid">
					<div class="form-row">
						<div class=" col-md-offset-2 col-md-6">
							<label for="inputPassword4">Name</label>
							<?php 
							if(isset($_SESSION['SESS-EMAIL'])){
							?>
							<input name="Name" type="text" class="form-control" placeholder="Name" required  value="<?php echo $_SESSION['SESS-NAME']; ?>" readonly>
							<?php }else{ ?>
							<input name="Name" type="text" class="form-control" placeholder="Name" required>
							<?php } ?>


						</div>
						<div class=" col-md-offset-2 col-md-6">
							<label for="inputPassword4">Contact</label>
							<input name="Contact" type="number" class="form-control" placeholder="Contact" required>


						</div>

						<div class=" col-md-offset-2  col-md-6">
							<label for="inputPassword4">Email</label>
							<?php 
							if(isset($_SESSION['SESS-EMAIL'])){
							?>
								<input name="Email" type="text" class="form-control" placeholder="Email" required value="<?php echo $_SESSION['SESS-EMAIL']; ?>" readonly>
							<?php }else{ ?>
							<input name="Email" type="text" class="form-control" placeholder="Email" required>
							<?php } ?>

						</div>
						<div class=" col-md-offset-2  col-md-6">
							<label for="inputPassword4">Massage</label>
							<input name="Massage" type="text" class="form-control" placeholder="Message" required>



						</div>

						<div class=" col-md-offset-2  col-md-6 ">
							
							<button name="save" class="btn btn-success btn-block" onClick="return func();"type="submit">click me</button>
						</div>





					</div>
				</div>
			</div>
		</div>

	</form>
	
	<?php } ?>
	
	
	


	<div class="jumbotron text-center" style="margin-bottom:0">
		<P>----------------------------------------------</P>
		<p>            | I LIKE YOUR CHOICE :) |</p>
		<P>----------------------------------------------</P>
	</div>
	<Script src="js/bootstrap.min.js">
	</script>
</body>

</html>