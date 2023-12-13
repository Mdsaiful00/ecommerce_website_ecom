<?php 

include '../connection.php';

$id=$_POST['id'];

$title=$_POST['title'];

$subtitle=$_POST['subtitle'];

$price=$_POST['price'];

$size=$_POST['size'];

$content=$_POST['content'];

$image = $_FILES['upload_img']['name'];

$tem = $_FILES['upload_img']['tmp_name'];

move_uploaded_file($tem, "../../upload/".$image);

$sql = "UPDATE product SET title ='$title',  subtitle ='$subtitle', price ='$price',  size ='$size', content ='$content', image ='$image' where id='$id'";


$result = $connection-> query($sql);

$_SESSION['message']="Data Successfully Updated";

header('Location:product.php');

?>