<?php 

include 'connection.php';


$id=$_POST['id'];

$status=$_POST['status'];


$sql = "update invoice set  status='$status' where id='$id'";

$result = $connection-> query($sql);

$_SESSION['message']="Data Successfully Update";

header('Location:dashboard.php');

?>