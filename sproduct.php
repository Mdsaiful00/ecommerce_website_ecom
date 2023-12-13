

<?php include("header.php"); ?>

<body>










    <!-- navbar design start here -->

    <?php include("nabvar.php"); ?>



<?php

$id = $_GET['id'];

$sql = "select*from product where id='$id'";
$result = $connection->query($sql);
$row = mysqli_fetch_array($result);

?>
<!-- pro details section start here -->
<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="./upload/<?php echo $row['image']; ?>" width="100%" id="mainimg" alt="">

    </div>
    <div class="single-pro-details">
        <h6>Home /
            <?php echo $row['title']; ?>
        </h6>
        <h4>
            <?php echo $row['title']; ?>
        </h4>
        <h2>$
            <?php echo $row['price']; ?>
        </h2>
        <form action="cart.php" method='POST'>

            <div class="add_to_cart_form">


                <input type='hidden' value="<?php echo $row['id']; ?>" name='id'>
                <input type="number" class="form-control" name='qty' value="1">



                <input type="submit"  class="ad_cart form-control" value="Add To Card" name="add_to_cart">


            </div>
        </form>
        <h4>Product Details</h4>
        <span>
            <?php echo $row['content']; ?>
        </span>
    </div>
</section>
<!-- Products section start here -->
<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">
        <div class="pro">
            <img src="./img/products/n1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
            <img src="./img/products/n2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
            <img src="./img/products/n3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
            <img src="./img/products/n4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$78</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
    </div>
</section>


<!-- news letter start here -->
<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail updates about our latest shop and <span>spacial offer</span>.</p>
    </div>

    <div class="form">
        <input type="text" placeholder="Enter Your Email">
        <Button class="normal">Sign Up</Button>
    </div>
</section>


<!-- footer section start herer -->
<footer class="section-p1">
    <div class="col">
        <img class="logo" src="./img/logo.png" alt="">
        <h4>Contact</h4>
        <p><strong>Address: </strong> 562 Wellington Road, Street 32, San Francisco</p>
        <p><strong>Phone: </strong> +01 2222 365 /(+91) 01 2345 6789</p>
        <p><strong>Hours: </strong> 10:00 - 18:00, Mon - Sat</p>

        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-pinterest-p"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
        </div>
    </div>



    <div class="col">
        <h4>About</h4>
        <a href="about.php">About</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">terms & Conditions</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>
    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="./img/pay/app.jpg" alt="">
            <img src="./img/pay/play.jpg" alt="">
        </div>
        <p>From App Store or Google Play</p>
        <img src="./img/pay/pay.png" alt="">
    </div>

    <div class="copyright">
        <p>&copy; 2023,Tech2 etc - HTML CSS Ecommerce Template</p>
    </div>

</footer>











<script>
    var MainImg = document.getElementById("mainimg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function () {
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function () {
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function () {
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function () {
        MainImg.src = smallimg[3].src;
    }

</script>


<!-- js link -->
<script src="script.js"></script>
</body>

</html>