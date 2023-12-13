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
                      <span>Product List</span>
                      <div class="services__items " style="float: right;">
                        <a href="product_add.php" class="btn btn-primary">Add Product List</a>
                    </div>

                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Name</th>
                                            <th>Brand Name</th>
                                            <th>Price</th>
                                            <th>Size</th>
                                            <th>Content</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php 
                    
                           

                            $sql = "select*from product";

                            $result = $connection-> query($sql);

                            $serial = 1;

                            while($data = $result-> fetch_assoc()){
                        
                        
                        ?>


                                        <tr>
                                            <td><?php echo $serial++;?></td>
                                            <td><?php echo $data['title'];?> </td>
                                            <td><?php echo $data['subtitle'];?> </td>
                                            <td><?php echo $data['price'];?> </td>
                                            <td><?php echo $data['size'];?> </td>
                                            <td><?php echo $data['content'];?> </td>
                                            <td><img style="width:50px; height:50px;" src="../../upload/<?php echo $data['image'];?>"</td>
                                            <td>
                                               <a href="product_edit.php?id=<?php echo $data['id'];?>" class="btn btn-primary mb-2">Edit</a>

                                                <a href="product_delete.php?id=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a>
                                            </td>
                                           
                                        </tr>

                                        <?php } ?>
                           
                                    </tbody>
                                </table>
                            </div>
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