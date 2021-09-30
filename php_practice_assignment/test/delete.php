<?php

$conn = mysqli_connect( "localhost", "root", "", "test" );

?>

<?php  
if(isset($_GET['Main']))
{
	$id=$_GET['Main'];
$query="Delete from form WHERE id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
	header('delete.php');
}
}?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

	<title>Document</title>
</head>

<body>

	<div class="container-fluid">

	   	<div class="row">

			
				<div style="padding: 50px 100px; background-color:burlywood; color: white; height: 665px">



					<div class="container">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<table class="table">
									<thead class="thead-dark">
										<tr>

											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">id</th>
											<th scope="col">Delete</th>


										</tr>
									</thead>

									<tbody>
										<?php 
	
	$query = "select * from form";
	$variable = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($variable)){
	
?>
										<tr>
											<td>
												<?php echo $row['f_name']; ?>
											</td>
											<td>
												<?php echo $row['l_name']; ?>
											</td>
											<td>
												<?php echo $row['id']; ?>
											</td>
											<td>
												<a href="delete.php?Main=<?php echo $row['id']; ?>" s>Delete</a>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>


							</div>
						</div>
					
				</div>
			</div>
		</div>


	</div>

	<Script src="js/bootstrap.min.js">
	</script>
</body>

</html>