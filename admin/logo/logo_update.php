<?php 

include '../connection.php';

$image = $_FILES['upload_img']['name'];

$tem = $_FILES['upload_img']['tmp_name'];

move_uploaded_file($tem, "../upload/".$image);

$sql = "update logo set logo_img = '$image'";

$result = $connection-> query($sql);

header('Location: logo.php');

?>