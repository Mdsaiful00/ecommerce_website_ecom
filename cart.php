<?php 

session_start();

$p_id=$_POST['id'];
$qty=$_POST['qty'];

if(!isset($_SESSION['cart'])){

    $_SESSION['cart']=[];

}

if(isset($_POST['add_to_cart'])){

    if (isset($_SESSION['cart'][$p_id])) {
        // If the product is already in the cart, update the quantity
        $_SESSION['cart'][$p_id] += $qty;
    
    } 
    
    else {
        // If the product is not in the cart, add it
        $_SESSION['cart'][$p_id] = $qty;
    
    
    }

}







if (isset($_POST['remove'])) {

     $p_id = $_POST['id'];

    if (isset($_SESSION['cart'][$p_id])) {

        unset($_SESSION['cart'][$p_id]);
    }
}


if (isset($_POST['update'])) {

    $p_id = $_POST['id'];
    $qty = $_POST['qty'];
    
    unset($_SESSION['cart'][$product_id]);

    $_SESSION['cart'][$p_id] = $qty;


   
}



header('location:checkout.php');






