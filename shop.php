<?php include("header.php"); ?>

<body>


    <!-- navbar design start here -->
    <?php include("nabvar.php"); ?>


    <!-- hero section start here -->
    <section id="page-header">
        <?php
        $sql = 'select*from shop_header';
        $result = $connection->query($sql);
        $row = mysqli_fetch_array($result);

        ?>

        <h2>
            <?php echo $row['title']; ?>
        </h2>
        <p>
            <?php echo $row['subtitle']; ?>
        </p>
    </section>

    <!-- Products section start here -->
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php
            $sql = 'select*from product';
            $result = $connection->query($sql);
            while ($row = $result->fetch_assoc()) {
                ?>
                <!-- onclick="window.location.href='sproduct.php'"; -->
                <div class="pro wow animate__zoomIn">
                    <a href="sproduct.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;">
                        <img src="./upload/<?php echo $row['image'] ?>" alt="">
                        <div class="des">
                            <span>
                                <?php echo $row['subtitle']; ?>
                            </span>
                            <h5>
                                <?php echo $row['title']; ?>
                            </h5>

                            <h4>$
                                <?php echo $row['price']; ?>
                            </h4>
                        </div>
                        <span class="by_btn">Buy Now</span>
                    </a>
                </div>
            <?php } ?>



       

        </div>
    </section>




    <!-- news letter start here -->
    <?php include("footer.php"); ?>


    
    <!-- Footer start here -->
    <?php include("footer.php"); ?>

    <!-- js link -->
    <script src="script.js"></script>


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