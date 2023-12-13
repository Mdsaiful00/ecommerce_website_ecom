<?php include("header.php");?>
<body>


 






    
    <!-- navbar design start here -->
   
    <?php include("nabvar.php");?>

    <h3 > 

<?php 
      

           if(isset($_SESSION['msg'])){
               echo $_SESSION['msg'];
               session_destroy();

           }
          
           ?>
           </h3>



    <!-- hero section start here -->
    <section id="page-header" class="about-header">

    <?php
        $sql='select*from contact_header';
        $result=$connection->query($sql);
        $row=mysqli_fetch_array($result);

        ?>

        <h2><?php echo $row['title']; ?></h2>
        <p><?php echo $row['subtitle']; ?></p>
    </section>

    <!-- Ccontaact detailes -->
    <section id="contact-details" class="section-p1">
        <div class="details wow animate__fadeInLeft">
            <?php
            $sql='select*from contact_details_head';
            $result=$connection->query($sql);
            $row=mysqli_fetch_array($result);

            ?>
            <span><?php echo $row['subtitle']; ?></span>
            <h2><?php echo $row['title']; ?></h2>
            <h3><?php echo $row['subtitle2']; ?></h3>
            <div>
                <?php
                    $sql = "select*from contact__address";
                    $result = $connection->query($sql);
                    while($row=$result->fetch_assoc()){
                        ?>
                <li>
                    <i class="fa-regular fa-<?php echo $row['link']; ?>"></i>
                    <p><?php echo $row['contact']; ?></p>
                </li>
                <?php } ?>
            </div>
        </div>
        <div class="map wow animate__fadeInRight">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.4038012736714!2d91.8554780749068!3d24.8842043443078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751aacf1e88faff%3A0x236b26b78903a732!2sSylhet%20Polytechnic%20Institute!5e0!3m2!1sen!2sbd!4v1695627366433!5m2!1sen!2sbd"  style="border:0;" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>



    <!-- form section start here -->
    <section id="form-details" class="wow animate__zoomIn">
        <form action="contact2.php" method="POST">
            <span>LEAVE A MESSAGE</span>
            <h2>WE lOVE TO HEAR FROM YOU</h2>
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <input type="email" name="email" placeholder="Enter Your E-mail" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Enter Your Message" required>

            </textarea>
            <button type="submit" class="normal">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>Jhon Doe</span> Senior Merketting Manager <br> Phhone: +088 123 456 789 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p><span>William smith</span> Senior Merketting Manager <br> Phhone: +088 123 456 789 <br> Email: contact@example.com</p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Emma Stone</span> Senior Merketting Manager <br> Phhone: +088 123 456 789 <br> Email: contact@example.com</p>
            </div>
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







