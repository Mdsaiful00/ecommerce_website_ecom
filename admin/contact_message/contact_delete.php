<?php 
                    
include '../connection.php';

    $id = $_GET['id'];


    $sql = "DELETE FROM  contact_form WHERE  id = '$id'";


    $result = $connection-> query($sql);

    $_SESSION['message']="Item Successfully Delete";

    header('Location: contact_message.php');
                    
?>