<?php 
                    
include '../connection.php';

    $id = $_GET['id'];


    $sql = "DELETE FROM feature WHERE  id = '$id'";


    $result = $connection-> query($sql);

    $_SESSION['message']="Item Successfully Delete";

    header('Location: feature.php');
                    
?>