 <?php 

    $conn = mysqli_connect("localhost","root", "","last_assignment");
?>

<?php
if ( isset( $_GET[ 'Main' ] ) ) {
	$id = $_GET[ 'Main' ];
	$query = "Delete from data WHERE id='$id'";
	$result = mysqli_query( $conn, $query );
	if ( $result ) {
		header( 'data1.php' );
	}
}
?>


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
		<h1>TABLE FOR DATA</h1>
		<p>THANKS FOR YOUR COMING</p>
	</div>
	<div  style="padding: 50px 100px; background-color:deeppink; color: white; height: 565px">   
	<div class="container">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<table class="table">
								<thead class="thead-dark">
									<tr>
                                        <th scope="col">ID</th>
										<th scope="col">User Name</th>
										<th scope="col">Contact</th>
										<th scope="col"> Email</th>
										<th scope="col"> message</th>
										<th scope="col">Delete</th>
										<th scope="col">edit</th>


									</tr>
								</thead>

								<tbody>
									<?php 
	
	$query = "select * from data";
	$variable = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($variable)){
	
?>
									<tr>
										<td>
											<?php echo $row['id']; ?>
										</td>
										<td>
											<?php echo $row['Name']; ?>

										</td>
										<td>
											<?php echo $row['Contact']; ?>

										</td>
										<td>
											<?php echo $row['Email']; ?>
										</td>
										<td>
											<?php echo $row['Massage']; ?>
										</td>
										<td>
											<a href="data1.php?Main=<?php echo $row['id']; ?>" s>Delete</a>
										</td>
										<td>
											<a href="data.php?edit=<?php echo $row['id']; ?>" s>edit</a>
										</td>

									</tr>
									<?php } ?>

								</tbody>
							</table>


						</div>
					</div>

				</div>
	</div>
		 
		
	<div class="jumbotron text-center" style="margin-bottom:0">
		<p>--------------------------- </p>
		<p>    I like your choice</p>
		<p>--------------------------- </p>
	</div>
	<Script type="text/javascript" src="js/bootstrap.min.js">
	</script>
		 
</body>
</html>