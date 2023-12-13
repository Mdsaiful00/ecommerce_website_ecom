<?php 
 
 include 'connection.php';

   $name = $_POST['name'];
   $email = $_POST['email'];

   $password = $_POST['password'];



    $sql = "INSERT INTO user(name,email,password) VALUES ('$name','$email','$password')";
    $result = $connection-> query($sql);


    header('Location: login.php');
                    
?>