<?php 

session_start();

unset($_SESSION['SESS-EMAIL']);
unset($_SESSION['SESS-NAME']);
header('Location: login.php');

?>