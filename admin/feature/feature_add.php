<?php 
include '../header.php';
?>


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

                <!-- Topbar -->
           
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <?php 
              

                if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    session_destroy();
                }
                ?>

                    <!-- Page Heading -->
        
                    <div class="card">
                    <div class="card-header">
                      <span>Feature List Add</span>
                    
                    </div>
                    <div class="card-body">

                    <form action="feature_add2.php" method="POST" class="mt-4" enctype="multipart/form-data">

                    <label>Service</label>

                    <input type="text" name="service"  class="form-control" required>

                    <br>

                  
                    <label>Image</label>

                    <input type="file" name="upload_img"  class="form-control" required>

                    <br>

                    <input type="submit" class="btn btn-primary mt-4 mb-4" value="Feature Add">
                    </form>

                    </div>

            

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
          <?php include("../footer.php");?>