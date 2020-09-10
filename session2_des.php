<?php
session_start();
$user = $_SESSION['USER'];
$pass =$_SESSION['PASS'];
echo "Username is:".$user;
echo "Password is:".$pass;
unset($_SESSION['USER']);
unset($_SESSION['PASS']);


 
?>