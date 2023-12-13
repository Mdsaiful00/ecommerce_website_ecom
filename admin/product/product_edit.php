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
                      <span>Product List Update</span>
                      

                    </div>
                    <div class="card-body">

                              
                           <?php 

                    $id=$_GET['id'];

                    $sql = "select*from product where id = '$id'";

                    $result= $connection-> query($sql);

                    $row=mysqli_fetch_array($result);

                    ?>

                    <form action="product_edit2.php" method="POST" class="mt-4" enctype="multipart/form-data">


                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    
                    <label>Title</label>

                    <input type="text" name="title" value="<?php echo $row['title'];?>"  class="form-control" required>

                    <br>


                    <label>Brand Name</label>

                    <input type="text" name="subtitle" value="<?php echo $row['subtitle'];?>"  class="form-control" required>

                    <br>
                    <label>Price</label>

                    <input type="number" name="price" value="<?php echo $row['price'];?>"  class="form-control" required>

                    <br>

                    <label>Size</label>

                    <input type="text" name="size" value="<?php echo $row['size'];?>"  class="form-control" required>

                    <br>

                    
                    <label>Content</label>

                    <textarea type="text" name="content"  class="form-control" required><?php echo $row['content'];?> </textarea>

                    <br>

                    <label>Image</label>

                    <input type="file" name="upload_img"  class="form-control" required>

                    <br>

                    <input type="submit" class="btn btn-primary mt-4 mb-4" value="Product Update">
                    </form>

                    </div>

            

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           <?php include("../footer.php");?>