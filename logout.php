<?php 
session_start();
include('connection.php');

unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['email']);
session_destroy();
header("location:index.php");

?>
