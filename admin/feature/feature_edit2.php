<?php 

include '../connection.php';

$service=$_POST['service'];

$image = $_FILES['upload_img']['name'];

$tem = $_FILES['upload_img']['tmp_name'];

move_uploaded_file($tem, "../../upload/".$image);


$sql = "INSERT INTO feature(service,image) VALUES ('$service','$image')";

$result = $connection-> query($sql);

$_SESSION['message']="Data Successfully Update";

header('Location:feature.php');

?>




