<?php 

include '../connection.php';

$title=$_POST['title'];

$subtitle=$_POST['subtitle'];

$price=$_POST['price'];

$size=$_POST['size'];

$content=$_POST['content'];


$image = $_FILES['upload_img']['name'];

$tem = $_FILES['upload_img']['tmp_name'];

move_uploaded_file($tem, "../upload/".$image);

$sql = "INSERT INTO product(title,subtitle,price,size,content,image) VALUES ('$title','$subtitle','$price','$size','$content','$image')";


$result = $connection-> query($sql);

$_SESSION['message']="Data Successfully Add";

header('Location:product.php');

?>