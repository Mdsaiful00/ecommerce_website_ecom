<?php include("header.php"); ?>

<body>


    <!-- navbar design start here -->

    <?php include("nabvar.php"); ?>


    <!-- hero section start here -->
    <section id="page-header" class="about-header">

        <h2>#Let's_talk</h2>
        <p>LEAVE A MESSAGE.WE LOVE TO HEAR FROM YOU! </p>
    </section>


    <!-- cart -->
    <section id="cart" class="section-p1 wow animate__zoomIn">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <?php

                $subtotal = 0;
                $total = 0;

                if (isset($_SESSION['cart'])) {

                    foreach ($_SESSION['cart'] as $p_id => $qty) {




                        $sql = "select*from product where id='$p_id'";
                        $result = $connection->query($sql);
                        while ($row = $result->fetch_assoc()) {

                            $subtotal = $row['price'] * $qty;
                            $total = $total + $subtotal;




                            ?>


                            <tr>
                                <td>
                                    <div class="remove">
                                        <form action="cart.php" method='POST'>
                                            <input type="hidden" value="<?php echo $row['id']; ?>" name='id'>
                                            <input type="submit" class="by_btn_2" name="remove" value="Delete">
                                        </form>


                                    </div>
                                </td>
                                <td>
                                    <div class="product">
                                        <div class="product_img">
                                            <img style="width:50px; height:50px" class="img-fluid"
                                                src="./upload/<?php echo $row['image']; ?>" alt="">
                                        </div>


                                    </div>
                                </td>
                                <td>
                                    <div class="product_content">
                                        <h3>
                                            <?php echo $row['title']; ?>
                                        </h3>

                                    </div>
                                </td>

                                <td>
                                    <div class="price">
                                        <p>$
                                            <?php echo $row['price']; ?>
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class="Quantity">
                                        <form action="cart.php" method='POST'>
                                            <input type="hidden" class="from-control" name='id' value="<?php echo $row['id']; ?>">
                                            <input type="number" class="from-control qty" name='qty' value="<?php echo $qty; ?>">
                                            <input type="submit" class="by_btn_1" value="Update" name="update">
                                        </form>

                                    </div>
                                </td>
                                <td>
                                    <div class="Total">
                                        <p>

                                            <?php

                                            echo $p_total = $row['price'] * $qty;
                                            ?>
                                            $

                                        </p>

                                    </div>
                                </td>

                            </tr>

                        <?php

                        }
                    }



                }
                ?>




            </tbody>
        </table>
    </section>


    <!-- cart add -->
    <section class="cart_login">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        ?>
                        <h3 class="messages_one">Already you are login</h3>

                    <?php } else {
                        ?>
                        <div class="cart_login_heading">


                            <h3 class="messages_one"> <a href="signin.php"></a>Please Login For Shopping</a></h3>

                        </div>
                    <?php }
                    ?>


                </div>
            </div>
        </div>
    </section>
    <section id="cart-add" class="section-p1 wow animate__fadeInUp">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>
                        <?php echo $total; ?> &nbsp;$
                    </td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>
                            <?php echo $total; ?> &nbsp;$
                        </strong></td>
                </tr>
            </table>
            <?php
            if (isset($_SESSION['user_id'])) {
                ?>
                <a href="order.php"><button class="normal">Proceed to checkoout</button></a>
            <?php } else {
                ?>
                <a href="login.php"><button class="normal">Proceed to checkoout</button></a>
            <?php } ?>




        </div>
    </section>

    <!-- Footer start here -->
    <?php include("footer.php"); ?>

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