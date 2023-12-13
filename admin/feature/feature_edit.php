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
                      <span>Feature Edit</span>
                      

                    </div>
                    <div class="card-body">

                              
                           <?php 

                    $id=$_GET['id'];

                    $sql = "select*from feature where id = '$id'";

                    $result= $connection-> query($sql);

                    $row=mysqli_fetch_array($result);

                    ?>

                    <form action="feature_edit2.php" method="POST" class="mt-4" enctype="multipart/form-data">


                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">

                                  
                    <label>Service</label>

                    <input type="text" name="service" value="<?php echo $row['service'];?>"  class="form-control" required>

                    <br>


                    
                    <label>Image</label>

                    <input type="file" name="upload_img"  class="form-control" required>

                    <br>


                    

                  
                    <br>

                    <input type="submit" class="btn btn-primary mt-4 mb-4" value="Update">
                    </form>

                    </div>

            

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("../footer.php");?>