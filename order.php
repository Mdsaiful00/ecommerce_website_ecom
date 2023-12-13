<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>




    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- style css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- navbar design start here -->
    <section id="header">
        <a href="#"><img src="./img/logo.png" class="logo" alt=""></a>


        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">

            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa-solid fa-outdent"></i>
        </div>
    </section>


    <!-- hero section start here -->
    <section id="page-header" class="about-header">

        <h2>#Let's_talk</h2>
        <p>LEAVE A MESSAGE.WE LOVE TO HEAR FROM YOU! </p>
    </section>

    <br>

    <!-- cart -->
    <section class="Chackout_page mt-5 mb-5">
        <div class="container">
            <div class="row">

                <div class="col-xl-8">
                    <form action="order_confirm.php" method="POST">
                        <h3 class="text-center">Shipping & Billing Address</h3>
                        <div class="row">
                            <div class="col-xl-6 mt-4">
                                <div class="contact_form_input">
                                    <label class="fs-bloder text-dark fw-bolder" for="">Full Name</label>
                                    <input type="text" name="fullname" class="form-control border-2 shadow-2 bg-white"
                                        required>
                                </div>
                            </div>

                            <div class="col-xl-6 mt-4">
                                <div class="contact_form_input">
                                    <label class="fs-bloder text-dark fw-bolder" for="">Email address</label>
                                    <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"
                                        class="form-control border-2 shadow-2 bg-white" required>

                                </div>
                            </div>
                            <div class="col-xl-6 mt-4">
                                <div class="contact_form_input">
                                    <label class="fs-5 text-dark fw-bolder" for="">phone number</label>
                                    <input type="number" name="phone" class="form-control border-2 shadow-2 bg-white"
                                        required>

                                </div>
                            </div>
                            <div class="col-xl-6 mt-4">

                                <div class="contact_form_input">
                                    <label class="fs-bloder text-dark fw-bolder" for="">City</label>
                                    <input type="select" name="city" class="form-control border-2 shadow-2 bg-white"
                                        required>

                                </div>
                            </div>

                            <div class="col-xl-6 mt-4">
                                <div class="contact_form_input">
                                    <label class="fs-bloder text-dark fw-bolder" for="">District</label>
                                    <input type="text" name="district" class="form-control border-2 shadow-2 bg-white"
                                        required>

                                </div>
                            </div>
                            <div class="col-xl-6 mt-4">
                                <div class="contact_form_input">
                                    <label class="fs-bloder text-dark fw-bolder" for="">Address</label>
                                    <input type="text" name="address" class="form-control border-2 shadow-2 bg-white"
                                        required>

                                </div>
                            </div>


                            <div class="col-xl-4  chack_btn  mt-5 btn-box">
                                <a style="text-decoration: none ; display: flex; align-items: text-center; gap: .5rem;"
                                    href="shop.php">
                                    <span><i class="fa-solid fa-chevron-left fs-5 text-dark"></i></span>
                                    <span class="fw-bolder text-dark">Back to Shopping cart</span>
                                </a>
                            </div>




                        </div>
                </div>
                <div class="col-xl-4 chackout_sidebar">
                    <div class="col-xl-12 ms-5">
                        <div class="delivery">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <h4>Cash On Delivery</h4>
                                </label>
                            </div>
                        </div>

                        <?php

                        $subtotal = 0;
                        $total = 0;

                        foreach ($_SESSION['cart'] as $p_id => $qty) {




                            $sql = "select*from product where id='$p_id'";
                            $result = $connection->query($sql);
                            while ($row = $result->fetch_assoc()) {

                                $subtotal = $row['price'] * $qty;
                                $total = $total + $subtotal;

                            }
                        }




                        ?>



                        <div class="row row1 row_1">
                            <div class="col-xl-6 row11 ">
                                <p class="fw-bold">Sub-total
                            </div>
                            <div class="col-xl-6 row12">
                                <p class="fw-bolder fs-5">
                                    <?php echo $total; ?>&nbsp; $
                                </p>
                            </div>
                            <div class="col-xl-6 row11 ">
                                <p class="fw-bold">Shipping
                            </div>
                            <div class="col-xl-6 row12">
                                <p class="fw-bold">Free
                            </div>

                            <hr>
                            <div class="row row2 row_2">
                                <div class="col-xl-6 row21">
                                    <h3>Total</h3>
                                </div>
                                <div class="col-xl-6 row22">
                                    <h3>
                                        <?php echo $total; ?>&nbsp; $
                                    </h3>
                                </div>
                            </div>

                            <br><br>
                            <br>
                            <div class="col-xl-12  chack_btn ">

                                <button type="submit" class="order_btn by_btn">

                                    <span class="text-white fs-5">Confirm Order</span>
                                    <span><i class="fa-solid fa-arrow-right-long fw-bloder fs-4"></i></span>

                                </button>
                            </div>

                        </div>

                        </form>



    </section>


    <!-- cart add -->



    <!-- Footer start here -->
    <?php include("footer.php"); ?>

    <!-- js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
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
        duration: 100,
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