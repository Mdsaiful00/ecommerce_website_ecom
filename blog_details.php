<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>




    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- style css -->

    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php
        $hostname='localhost';
        $username='root';
        $password='';
        $dbname='e-com';

        $connection=mysqli_connect($hostname,$username,$password,$dbname);
        

        ?>
    
    <!-- navbar design start here -->
    <section id="header">
        <?php
        $sql='select*from logo';
        $result=$connection->query($sql);
        $row=mysqli_fetch_array($result);

        ?>

        <a href="#"><img src="./upload/<?php echo $row['logo_img'];?>" class="logo" alt=""></a>


        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a class="active" href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
         
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa-solid fa-outdent"></i>
        </div>
    </section>


    <!-- hero section start here -->
    <section id="page-header" class="blog-header">

    <?php
        $sql='select*from blog_header';
        $result=$connection->query($sql);
        $row=mysqli_fetch_array($result);

        ?>

        <h2><?php echo $row['title']; ?></h2>
        <p><?php echo $row['subtitle']; ?></p>
    </section>


    <!-- blog section start here -->
    <section id="blog">
    <?php

    $id=$_GET['id'];
        $sql = "select*from blog where id=$id";
        $result = $connection->query($sql);
        while($row=$result->fetch_assoc()){
            ?>
            <div class="blog-box">
                <div class="blog-img">
                    <img src="./upload/<?php echo $row['image']; ?>" alt="">
                </div>
                <div class="blog-details">
                    <h4><?php echo $row['title']; ?></h4>
                    <p><?php echo $row['content']; ?></p>
                </div>
                <H1><?php echo $row['date']; ?></H1>
            </div>

        <?php } ?>

    </section>

    <!-- pagination start here -->



 

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
        <?php
        $sql='select*from logo';
        $result=$connection->query($sql);
        $row=mysqli_fetch_array($result);

        ?>

        <a href="#"><img src="./upload/<?php echo $row['logo_img'];?>" class="logo" alt=""></a>
        <div>
        <?php
        $sql = "select*from contact";
        $result = $connection->query($sql);
        $row = mysqli_fetch_array($result);
        ?>
            <h4>Contact</h4>
            <p><strong>Address: </strong> <?php echo $row['address']; ?></p>
            <p><strong>Phone: </strong> <?php echo $row['phone']; ?></p>
            <p><strong>Hours: </strong> <?php echo $row['hours']; ?></p>
        </div>
            

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
            <a href="#">About</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="./login page/index.php">Sign In</a>
            <a href="cart.php">View Cart</a>
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

    <script src="js_home/jquery.js"></script>

    <!-- swiper js -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- jquery letter js-->
    <script src="js_home/jquery.lettering.js"></script>

    <!-- jquery text js-->
    <script src="js_home/jquery.textillate.js"></script>

    <!-- wow  js-->
    <script src="js_home/wow.min.js"></script>

    <!-- ---script js--- -->
    <script src="script.js"></script>



    <script>
        AOS.init({
            offset: 150,
            duration: 1000,
        });
        new WOW().init({
            loop: true,
        });

        $(function () {
            $('.tlt').textillate({
                loop: true,
                minDisplayTime: 100,
            });
        });

    </script>
</body>
</html>