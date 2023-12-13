<?php include '../header.php';?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include '../sidebar.php';?>
<!-- Sidebar Message -->


</ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

    
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <?php 
              

              if(isset($_SESSION['message'])){
                  echo $_SESSION['message'];
                  session_destroy();
              }
              ?>
        
                    <div class="card">
                    <div class="card-header">
                    <span>Home Hero</span>
                    </div>
                    <div class="card-body">
                      <?php 

                      $sql='select*from hero';
                      $result=$connection->query($sql);
                      $row=mysqli_fetch_array($result);
                      ?>

                      <img style="width:400px; height:200px;" class='img-thumbnail' src="../../upload/<?php echo $row['img'];?>">

                      <form action="hero_update.php" method="POST" class="mt-4" enctype="multipart/form-data">


                      <label>Home Banner Sub Title</label>

                        <input type="text" name="sub_title"  class="form-control" value="<?php echo $row['sub_title'];?>">

                        <br>
                            <label>Home Banner Title</label>

                            <input type="text" name="title"  class="form-control" value="<?php echo $row['title'];?>">

                            <br>


                            <label>Home Banner Title</label>

                            <input type="text" name="title2"  class="form-control" value="<?php echo $row['title2'];?>">

                            <br>

                            
                            <label>Home Banner Content</label>

                            <input type="text" name="content"  class="form-control" value="<?php echo $row['content'];?>">

                            <br>



                            <label>Upload Your Image</label>

                            <input type="file" class="form-control mt-2" name="upload_img" required>
                            
                            <input type="submit" class="btn btn-primary mt-4 mb-4" value="Update Home Banner">
                    </form>

                    </div>
                    </div>

            

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            