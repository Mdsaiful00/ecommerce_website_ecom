<?php

session_start();

$hostname='localhost';
$username='root';
$password='';
$dbname='e-com';

$connection=mysqli_connect($hostname,$username,$password,$dbname);

$email=$_POST['email'];

$password=$_POST['password'];

$sql="select*from user where email='$email' && password='$password'";

$result=$connection->query($sql);

$count=mysqli_num_rows($result);

 if($count==1){
    $sql="select*from user where email='$email' && password='$password'";
    $result=$connection->query($sql);
    $row=mysqli_fetch_array($result);
    $_SESSION['user_id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['email']=$row['email'];
     header('location:index.php');
 }
else{
    header('location:login.php');
}




?>