<?php
 include("connection.php");

   $name=$_POST['name'];


   $email=$_POST['email'];

   $subject=$_POST['subject'];

   $message=$_POST['message'];

   $sql="insert into contact_form(name,email,subject,message) values ('$name', '$email','$subject','$message')";
   
   
   $result=$connection->query($sql);

   $_SESSION['msg']="Your message successfully send";

   header('location:contact.php');

