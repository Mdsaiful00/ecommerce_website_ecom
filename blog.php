<?php include("header.php");?>
<body>


 






    
    <!-- navbar design start here -->
   
    <?php include("nabvar.php");?>


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
        $sql = 'select*from blog';
        $result = $connection->query($sql);
        while($row=$result->fetch_assoc()){
            ?>
            <div class="blog-box">
                <div class="blog-img wow animate__fadeInLeft">
                    <img src="./upload/<?php echo $row['image']; ?>" alt="">
                </div>
                <div class="blog-details wow animate__fadeInRight">
                    <h4><?php echo $row['title']; ?></h4>
                    <p><?php echo $row['content']; ?></p>
                    <a href="blog_details.php?id=<?php echo $row['id'];?>">CONTINUE READING</a>
                </div>
                <H1><?php echo $row['date']; ?></H1>
            </div>

        <?php } ?>
        
    </section>

    <!-- pagination start here -->


 

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