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
                      <span>Product List Add</span>
                      

                    </div>
                    <div class="card-body">

                    <form action="product_add2.php" method="POST" class="mt-4" enctype="multipart/form-data">

                    <label>Name</label>

                    <input type="text" name="title"  class="form-control" required>

                    <br>

                    <label>Brand Name</label>

                    <input type="text" name="subtitle"  class="form-control" required>

                    <br>

                    <label>Price</label>

                    <input type="number" name="price"  class="form-control" required>

                    <br>

                    <label>Size</label>

                    <input type="text" name="size"  class="form-control" required>

                    <br>

                    
                    <label>Content</label>

                    <textarea type="text" name="content"  class="form-control" required> </textarea>

                    <br>

                    <label>Image</label>

                    <input type="file" name="upload_img"  class="form-control" required>

                    <br>

                    <input type="submit" class="btn btn-primary mt-4 mb-4" value="Product Add">
                    </form>

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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

    
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>