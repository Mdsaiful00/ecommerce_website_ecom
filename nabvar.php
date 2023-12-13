<section id="header">

<?php
$sql='select*from logo';
$result=$connection->query($sql);
$row=mysqli_fetch_array($result);

?>

<a href="#"><img src="./upload/<?php echo $row['logo_img'];?>" class="logo" alt=""></a>


<div>
    <ul id="navbar">
        <li><a class="" href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        
        <li id="lg-bag"><a href="checkout.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
        <?php 
            if(isset($_SESSION['user_id'])){
                ?>
        <li><a href="logout.php">Logout(<?php echo $_SESSION['name'];?>)</a></li>
        <?php } 

        else{
            ?>
            <li><a href="login.php">Sign In</a></li>
       <?php  } ?>
        
 

        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
    </ul>
</div>
<div id="mobile">
 
    <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
    <i id="bar" class="fa-solid fa-outdent"></i>
</div>
</section>