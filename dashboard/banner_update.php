<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'e-com';

$connection = mysqli_connect($hostname,$username,$password,$dbname);

$subtitle = $_POST['subtitle'];
$title = $_POST['title'];
$title2 = $_POST['title2'];
$content = $_POST['content'];

$sql = "update hero set subtitle='$subtitle', title='$title', title2='$title2', content='$content'";
$result = $connection->query($sql);
header('location:banner_php');

?>