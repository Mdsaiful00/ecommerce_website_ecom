<?php 
session_start();
include('connection.php');

unset($_SESSION['name']);
unset($_SESSION['role']);
session_destroy();
header("location:login.php");

?>
