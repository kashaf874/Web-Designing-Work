<?php 

    $conn = mysqli_connect("localhost","root","","test");

    if(isset($_REQUEST['save'])){
        
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
		 $Password = $_POST['Password'];
		 $Email = $_POST['Email'];
		 $Confirm_Email = $_POST['Confirm_Email'];
		 
      

        $query = "insert into form (f_name,l_name,Password,Email,Confirm_Email ) values ('".$f_name."','".$l_name."','". $Password."','".$Email."','".$Confirm_Email."');";
        mysqli_query($conn,$query);

        header("Location: show_all.php?addsuccess");

        
    }

if(isset($_REQUEST['update'])){
	$id = $_POST['update_id'];
	$f_name = $_POST['f_name'];
     $l_name = $_POST['l_name'];
	 $Password = $_POST['Password'];
	 $Email = $_POST['Email'];
	  $Confirm_Email = $_POST['Confirm_Email'];
	
	
	$udate = "update form set f_name = '".$f_name."', l_name = '".$l_name."',  Password = '". $Password."', Email  = '".$Email ."', Confirm_Email = '".$Confirm_Email."' where id = '".$id."';";
//	echo $update;
//	die();
	mysqli_query($conn,$udate);
	
	header("Location: show_all.phpupdate_success");
	
}

?>

<script>
        function myFunction() {
        alert("I am an alert box!");
        }
    </script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

    <title>Document</title>
</head>
<body>







<div class=" col-md-12 col-sm-12">
<div style="padding: 170px 12px 350px; background: pink; ">





<div class="container-fluid">
  


<!-- <div style="width: 100px; height: 400px; background: black" > -->



<script>
	
	function func(){
		var f_name = document.getElementById("f_name").value;
		if(f_name == ""){
			alert('enter your f name');
			document.getElementById("f_name").focus();
			return false;
		}
		var l_name = document.getElementById("l_name").value;
		if(l_name == ""){
			alert('enter your last name');
			document.getElementById("l_name").focus();
			return false;
		}
		var  Password = document.getElementById(" Password").value;
		if( Password == ""){
			alert('enter your  Password');
			document.getElementById(" Password").focus();
			return false;
		}
		var Email = document.getElementById("Email").value;
		if(Email == ""){
			alert('enter your Email');
			document.getElementById("Email").focus();
			return false;
		}
		var Confirm_Email = document.getElementById("Confirm_Email").value;
		if(Confirm_Email == ""){
			alert('enter your Confirm_Email');
			document.getElementById("Confirm_Email").focus();
			return false;
		}
		
		
		
		
		
		document.myform.action = "fun.php?save";
	}
	
</script>

	
<!--
<script>
	
	function func(){
		var l_name = document.getElementById("l_name").value;
		if(l_name == ""){
			alert('enter your last name');
			document.getElementById("l_name").focus();
			return false;
		}
		
		document.myform.action = "fun.php?save";
	}
	
</script>
-->



<div class="row">

<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
<div style="padding: 100px 100px; background: purple; ">
<?php 
if(isset($_REQUEST['edit'])){

	$id = $_REQUEST['edit'];
	$query = "select * from form where id = ".$id;
	$var = mysqli_query($conn,$query);
	$obj = mysqli_fetch_assoc($var);

?>
<script>
	
	function func1(){
		var f_name = document.getElementById("f_name").value;
		if(f_name == ""){
			alert('enter your f name');
			document.getElementById("f_name").focus();
			return false;
		}
		var l_name = document.getElementById("l_name").value;
		if(l_name == ""){
			alert('enter your last name');
			document.getElementById("l_name").focus();
			return false;
		}
		
		
		var Password = document.getElementById("Password").value;
		if(Password == ""){
			alert('enter your Password');
			document.getElementById("Password").focus();
			return false;
		}
		
			var Email = document.getElementById("Email").value;
		if(Email == ""){
			alert('enter your Email');
			document.getElementById("Email").focus();
			return false;
		}
		
		
		var Confirm_Email = document.getElementById("Confirm_Email").value;
		if(Email == ""){
			alert('enter your Confirm_Email');
			document.getElementById("Confirm_Email").focus();
			return false;
		}
		
		
		
		
		document.myform.action = "fun.php?update";
		
	}
	
</script>
<form enctype="multipart/form-data" method="post" name="myform">

<div class="container">
  
</div>

  <div class="form-group">
    <label for="f_name">Enter First  Name</label>
    <input type="text" class="form-control" id="f_name" name="f_name" placeholder=" First Name" value="<?php echo $obj['f_name'] ?>">
  </div>
  <div class="form-group">
    <label for="l_name">Enter Last Name</label>
    <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name" value="<?php echo $obj['l_name'] ?>">
	  <input type="hidden" name="update_id" value="<?php echo $obj['id']; ?>" />
    
  </div>
	<div class="form-group">
    <label for="Password">Enter Password</label>
    <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" value="<?php echo $obj['Password'] ?>">
	  <input type="hidden" name="update_id" value="<?php echo $obj['id']; ?>" />
    
  </div>
	
	<div class="form-group">
    <label for="Email">Enter Email</label>
    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo $obj['Email'] ?>">
	  <input type="hidden" name="update_id" value="<?php echo $obj['id']; ?>" />
    
  </div>
	
	<div class="form-group">
		
		
    <label for="Confirm_Email">Enter Confirm_Email</label>
    <input type="email" class="form-control" id="Confirm_Email" name="Confirm_Email" placeholder="Last Name" value="<?php echo $obj['Confirm_Email'] ?>">
	  <input type="hidden" name="update_id" value="<?php echo $obj['id']; ?>" />
    
  </div>
	
  <button class="btn btn-success btn-block" onClick="return func1();" type="submit">Update</button>
</form>
	
<?php }else{ ?>

<form enctype="multipart/form-data" method="post" name="myform">

<div class="container">
  
</div>

  <div class="form-group">
    <label for="f_name">Enter First  Name</label>
    <input type="text" class="form-control" id="f_name" name="f_name" placeholder=" First Name">
  </div>
  <div class="form-group">
    <label for="l_name">Enter Last Name</label>
    <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name">
    
  </div>
	<div class="form-group">
    <label for="Password">Enter Password</label>
    <input type="password" class="form-control" id="Password" name="Password" placeholder=" Password">
  </div>
	
	<div class="form-group">
    <label for="Email">Enter Email</label>
    <input type="email" class="form-control" id="Email" name="Email" placeholder=" Email">
  </div>
	
	<div class="form-group">
    <label for="Confirm_Email">Enter Confirm_Email</label>
    <input type="email" class="form-control" id="Confirm_Email" name="Confirm_Email" placeholder=" Confirm_Email">
  </div>
	
	
	
	
  <button class="btn btn-success btn-block" onClick="return func();" type="submit">Register</button>
</form>
	<?php } ?>

</div>

</div>

</div>







</div>

</div>

</div>
</div>


< Script src = "js/bootstrap.min.js" >
	</script>
</body>
</html>