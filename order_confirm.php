<?php 

include("connection.php");





$user_id=$_SESSION['user_id'];
$invoice_name="#invoice".$user_id;
$date=date("F j, Y, g:i a");


$name=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$district=$_POST['district'];
$address=$_POST['address'];

$bill = "INSERT INTO billing(name,email,phone,city,district,address,user_id) VALUES ('$name','$email','$phone','$city','$district','$address','$user_id')";

$bill_done=$connection->query($bill);

if($bill_done){


$sql = "INSERT INTO invoice(invoice_name,user_id,date) VALUES ('$invoice_name','$user_id','$date')";

if (mysqli_query($connection, $sql)) {

    $last_id = mysqli_insert_id($connection);

    
    foreach ($_SESSION['cart'] as $p_id => $qty) {
        
    
        $sql = "INSERT INTO order_cart(user_id,product_id,qty,invoice_id) VALUES ('$user_id','$p_id','$qty','$last_id')";
        $r=$connection->query($sql);

        if($r){
            header('location:success.php');
        }
        
    }

}

}




