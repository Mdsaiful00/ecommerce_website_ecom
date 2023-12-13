<?php include("header.php"); ?>

<body>










    <!-- navbar design start here -->

    <?php include("nabvar.php"); ?>

    <!-- hero section start here -->
    <section id="hero">

        <?php
        $sql = 'select*from hero';
        $result = $connection->query($sql);
        $row = mysqli_fetch_array($result);
        ?>
            
        <h4>
            <?php echo $row['sub_title']; ?>
        </h4>
        <h2>
            <?php echo $row['title']; ?>
        </h2>
        <h1>
            <?php echo $row['title2']; ?>
        </h1>
        <p>
            <?php echo $row['content']; ?>
        </p>
        <button class="wow animate__rubberBand">Shop Now</button>
    </section>


    <!-- featured section start here -->

    <div id="feature" class="section-p1">
        <div class="swiper category-slider wow animate__fadeInUp">
            <div class="swiper-wrapper">
                <?php
                $sql = 'select*from feature';
                $result = $connection->query($sql);
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class=" swiper-slide fe-box">
                        <img src="./upload/<?php echo $row['image']; ?>" alt="">
                        <h6>
                            <?php echo $row['service']; ?>
                        </h6>
                    </div>
                <?php } ?>
            </div>
            <br><br>
            <div class="swiper-pagination"></div>
        </div>
    </div>




    <!-- Products section start here -->
    <section id="product1" class="section-p1">
        <?php
        $sql = 'select*from pro_heading';
        $result = $connection->query($sql);
        $row = mysqli_fetch_array($result);
        ?>
        <h2>
            <?php echo $row['title']; ?>
        </h2>
        <p>
            <?php echo $row['subtitle']; ?>
        </p>


        <div class="pro-container">


            <?php
            $sql = 'select*from product';
            $result = $connection->query($sql);
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="pro wow animate__zoomIn">
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
                    <a href="sproduct.php?id=<?php echo $row['id']; ?>" class="by_btn">Buy Now</a>
                </div>
            <?php } ?>


        </div>
    </section>

    <?php
    $sql = 'select*from banner';
    $result = $connection->query($sql);
    $row = mysqli_fetch_array($result);
    ?>

    <!-- banner section start here -->
    <section style="background-image: url(./upload/<?php echo $row['image'] ?>);" id="banner" class="section-m1">

        <h4>
            <?php echo $row['subtitle']; ?>
        </h4>
        <h2>
            <?php echo $row['title']; ?>
        </h2>
        <button class="normal">Explore More</button>
    </section>


    <!-- Products section start here -->
    <section id="product1" class="section-p1">
        <?php
        $sql = "select*from new_pro_heading";
        $result = $connection->query($sql);
        $row = mysqli_fetch_array($result);

        ?>
        <h2>
            <?php echo $row['title']; ?>
        </h2>
        <p>
            <?php echo $row['subtitle']; ?>
        </p>
        <!-- ==============arrivalis -->
        <div class="pro-container">
            <?php
            $sql = "select*from new_arrivals";
            $result = $connection->query($sql);
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="pro wow animate__zoomIn">
                    <img src="./upload/<?php echo $row['image']; ?>" alt="">
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
                    <a href="#"><i class="fa-solid fa-<?php echo $row['icon2']; ?>"></i></a>
                </div>

            <?php } ?>







        </div>
    </section>





    <!-- sm banner start here -->
    <section id="sm-banner" class="section-p1 wow animate__fadeInUp">
        <?php
        $sql = "select*from sm_banner";
        $result = $connection->query($sql);
        $row = mysqli_fetch_array($result);
        ?>

        <div class="banner-box" style="background-image: url(./upload/<?php echo $row['image']; ?>)">

            <h4>
                <?php echo $row['subtitle']; ?>
            </h4>
            <h2>
                <?php echo $row['title']; ?>
            </h2>
            <span>
                <?php echo $row['content']; ?>
            </span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box-2">
            <?php
            $sql = "select*from sm_banner1";
            $result = $connection->query($sql);
            $row = mysqli_fetch_array($result);
            ?>
            <h4>
                <?php echo $row['subtitle']; ?>
            </h4>
            <h2>
                <?php echo $row['title']; ?>
            </h2>
            <span>
                <?php echo $row['content']; ?>
            </span>
            <button class="white">Collection</button>
        </div>
    </section>







    <section id="banner3">
        <div class="swiper products-slider wow animate__zoomIn">
            <div class="swiper-wrapper">
                <div class="swiper-slide banner-box">

                    <h2>SEASONAL SALE</h2>
                    <h3>Winter Collection -50% OFF</h3>
                </div>
                <div class="swiper-slide banner-box banner-box-4">

                    <h2>NEW FOOTWEAR Collection</h2>
                    <h3>Spring / Summer 2022</h3>
                </div>
                <div class="swiper-slide banner-box banner-box-5">

                    <h2>T-SHIRT</h2>
                    <h3>New Trendy Prints</h3>
                </div>
            </div>
                    <br><br><br>
            <div class="swiper-pagination"></div></div>
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

        var swiper = new Swiper(".category-slider", {
            loop: true,
            spaceBetween: 20,
            grabCursor: true,
            autoplay: {
                dealy: 250,
                disableOnIntraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                650: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                1024: {
                    slidesPerView: 5,
                },
            },
        });

        var swiper = new Swiper(".products-slider", {
   loop: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },
   breakpoints: {
      550: {
         slidesPerView: 2,
      },
      768: {
         slidesPerView: 2,
      },
      1024: {
         slidesPerView: 3,
      },
   },
});

    </script>