<?php 

include '../connection.php';

$sub_title=$_POST['sub_title'];

$title=$_POST['title'];

$title2=$_POST['title2'];

$content=$_POST['content'];

$image = $_FILES['upload_img']['name'];

$tem = $_FILES['upload_img']['tmp_name'];

move_uploaded_file($tem, "../../upload/".$image);

$sql = "update hero set sub_title ='$sub_title', title ='$title', title2 ='$title2', content='$content', img = '$image'";

$result = $connection-> query($sql);

$_SESSION['message']="Data Successfully Update";

header('Location:hero.php');

?>