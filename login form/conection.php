<?php
try{
    $conn = mysqli_connect("localhost","root","","login");
}catch(Exception $e)
{
    echo $e->getMessage();
}


?>