<?php include("header.php"); ?>

<body>










    <!-- navbar design start here -->

    <?php include("nabvar.php"); ?>
    <!-- hero section start here -->
    <section id="page-header" class="about-header">

        <?php
        $sql = 'select*from about_header';
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

    <!-- about head -->
    <section id="about-head" class="section-p1 wow animate__zoomIn">
        <?php
        $sql = 'select*from about_body';
        $result = $connection->query($sql);
        $row = mysqli_fetch_array($result);

        ?>
        <img  class="" src="./upload/<?PHP echo $row['image']; ?>" alt="">
        <div class="">
            <h2>
                <?PHP echo $row['title']; ?>
            </h2>
            <p>
                <?PHP echo $row['content']; ?>
            </p>

            <abbr title="">
                <?PHP echo $row['dotted']; ?>
            </abbr>
            <br>

            <br>

            <marquee bgcolor="#ccc" loop="10" scrollamount="5" width="100%">
                <?PHP echo $row['play']; ?>
            </marquee>
        </div>
    </section>

    <!-- about app section start here -->
    <section id="about-app" class="section-p1 wow animate__zoomIn">
        <h1>Download Our <a href="#"> App</a></h1>
        <div class="video ">
            <video autoplay muted loop src="img/about/1.mp4"></video>
        </div>
    </section>

    <!-- featured section start here -->
    <div id="feature" class="section-p1">
        <div class="swiper category-slider wow animate__zoomIn">
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

    </script>
</body>

</html>