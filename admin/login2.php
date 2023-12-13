<?php 

include 'connection.php';

echo $username=$_POST['username'];

echo $password=$_POST['password'];

$sql="select*from admin where username='$username' && password='$password'";

$result=$connection->query($sql);

$count=mysqli_num_rows($result);

if($count){
    $sql="select*from admin where username='$username' && password='$password'";
    $result=$connection->query($sql);
    $row=mysqli_fetch_array($result);
    $_SESSION['name']=$row['name'];
    $_SESSION['role']=$row['role'];
    header('location:dashboard.php');
} 

else{
    $_SESSION['message']="Username & Password is Invalid";
    header('location:login.php');
}
