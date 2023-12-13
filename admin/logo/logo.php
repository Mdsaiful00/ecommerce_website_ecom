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

                    <!-- Page Heading -->
        
                    <div class="card">
                    <div class="card-header">
                       <span>Logo</span>
                    </div>
                    <div class="card-body">
                      <?php 

                      $sql='select*from logo';
                      $result=$connection->query($sql);
                      $row=mysqli_fetch_array($result);
         
                      ?>

                      <img src="../../upload/<?php echo $row['logo_img'];?>">

                      <form action="logo_update.php" method="POST" class="mt-4" enctype="multipart/form-data">

                            <label>Upload Your Logo</label>

                            <input type="file" class="form-control mt-2" name="upload_img" required>
                            
                            
                            <input type="submit" class="btn btn-primary mt-4 mb-4" value="Update Logo">
                    </form>

                    </div>
                    </div>

            

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; WebStriker 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>