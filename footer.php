
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
            <a href="admin.php">Admin</a>
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
            <p>&copy; Created by NeutronStar group 2023 </p>
        </div>

    </footer>


    <!-- js link -->
    <script src="script.js"></script>
</body>
</html>