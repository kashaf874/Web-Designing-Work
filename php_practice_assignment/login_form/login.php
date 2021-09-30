<?php 

    $conn = mysqli_connect("localhost","root","","result_form");

    if(isset($_REQUEST['check'])){
        
        $f_name = $_POST['firstname'];
        $l_name = $_POST['lastname'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $query = "insert into login (f_name,l_name,email,password) values ('".$f_name."','".$l_name."','".$email."','".$password."');";
        mysqli_query($conn,$query);

        header("Location: login.php?addsuccess");

        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
    
    <style>
    body { font-family: Georgia, 'Times New Roman', Times, serif }
    form { border: 3px solid rgb(192, 192, 192, 0.3)}
    input[type=text]{
        width: 25%;
        padding: 12px 20px;
        margin: 8px 0px;
        border: 1px solid rgb(192, 192, 192);
        box-sizing: border-box;
        color: rgb(0, 0, 0, 0.5);
        background-color: silver;
        
    }
    input[type=text1]{
        width: 25%;
        padding: 12px 20px;
        margin: 8px 0px;
        border: 1px solid rgb(192, 192, 192);
        box-sizing: border-box;
        color: rgb(0, 0, 0, 0.5);
        background-color: silver;
        margin-left: 10%;
    }
    input[type=text2]{
        width: 61%;
        padding: 12px 20px;
        margin: 8px 0px;
        border: 1px solid rgb(192, 192, 192);
        box-sizing: border-box;
        color: rgb(0, 0, 0, 0.5);
        background-color: silver;
    
    }
    input[type=password]{
        width: 61%;
        padding: 12px 20px;
        margin: 8px 0px;
        border: 1px solid rgb(192, 192, 192);
        box-sizing: border-box;
        color: rgb(0, 0, 0, 0.5);
        background-color: silver;
    }
    button{
        background-color: rgb(197, 197, 197, 0.3);
        width: 61%;
        padding: 14px 20px;
        cursor: pointer;
        color: white;
        border: none;
        
    }
    button :hover {
         background-color : rgb(76, 175, 80, 0.7);
        color: white;


    }
    container{
        padding: 16px;
    }




    </style>
</head>
<body>


 <script >
    function verify(){
      
            document.myForm.action = "login.php?check";
      
    

    }
    
    </script>
    <div style="width: 100%; padding: 50px 40px; background: silver; border: 3px solid rgb(0, 0, 0 , 0.3)">
               <center> <div style="width: 40%; padding: 90px 0px;height: 550px;  background: purple; border: 5px solid rgb(0, 0, 0, 0.2)">
               <form name="myForm" action="login.php" method="post" enctype="multipart/form-data">
                    <h1 style="color: silver">login form</h1>
                    <p style="font-size: 12px; color: silver"> Create Your Account. It's Free and onlu takes a minute</p>
                       
                    <br>
                    <br>
                    <br>
                            <div style="width: 25%; height: 120px;  ">

                                <img src="profile_photo.PNG" width="100%" height="100%"style="border-radius : 50%">
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>

                            <div class="container">
                              
                                <input type="text" placeholder=" First Name" id="firstname" name="firstname">
                                <input type="text1" placeholder=" Last Name" name="lastname">
                               
                                <input type="text2" placeholder=" E-mail"  name="email"> <br>
                                <input type="password" placeholder=" Password" name="password">
                                <br>
                                <label style="color: rgb(192, 192, 192, 0.6); margin-right: 37%">
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                                <br>
                                <button type="submit" onclick="return verify();" id="sub_btn">Login</button>

<br>
<br>
<br>
                            </div>  
                        </form>

                </div>

</div> 
    <div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div> 
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
  
</body>

</html>