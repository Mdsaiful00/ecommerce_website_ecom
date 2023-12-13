
<?php 
session_start();

$hostname='localhost';
$username='root';
$password='';
$dbname='e-com';

$connection=mysqli_connect($hostname,$username,$password,$dbname);