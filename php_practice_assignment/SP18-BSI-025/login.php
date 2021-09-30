<!DOCTYPE html>
<html>
	<head>
	    <title>COMSATS Past Papers Bioscience Department</title>

	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/green.css">
        <link href="pastpapers.css" rel="stylesheet">


	</head>


	<body>
	<div class="hea" style="height: 50px" >

	<?php
	include("header.php");
	?>
    </div>
<div class="breadcrumb" >
    <div class="container">
        <div class ="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="pastpapers.html">Home</a></li>
            </ul>
        </div>
    </div>
</div>


    <form  method="post">

   
            <label >ID<span>*</span></label>
            <input type="text" name="userid" class="form-control  text-input" autocomplete="off" >
            <label>Password <span>*</span></label>
         <input type="password" name="password" class="form-control text-input" autocomplete="off" ><br><br>

        <button type="submit" class="btn-upper btn btn-seondary checkout-page-button" name="login" style="background-color: yellowgreen">Login</button>
    </form>
    <br><br><br><br>
           


<?php
include("footer.php");
?>
</body>
</html>
<?php
    include("user.php");

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $sql = "SELECT userid FROM admin WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: uploadpaper.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
?>