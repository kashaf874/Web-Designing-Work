<!DOCTYPE html >
<html >
<head>
<title>upload Document</title>

<link href="pastpapers.css" rel="stylesheet">
</head>
<style>
input
{
	height:40px;
}
button
{
	height:40px;
	width:90px;	
}
form
{

	margin-left:200px;
	margin-right:200px;	
}

</style>
<body>

<?php
include("header.php");
?>

<form  action="" method="post" enctype="multipart/form-data">
<fieldset style="text-align:center">
<legend><h2>Upload Paper</h2></legend><br><br>
<br><br><br>
<button formaction="googledrive/index.php" style="width:90px;background-color: yellowgreen">Upload</button><br><br><br><br>
<button formaction="login.php"  style="background-color: yellowgreen">Back</button><br><br><br><br>
</fieldset>
</form>
	<br><br><br>
	    <?php
include("footer.php");
?>														
</body>
</html>