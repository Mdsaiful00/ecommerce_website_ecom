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
                      <span>Contact Message List</span>
                      <div class="testmonial_slider " style="float: right;">
                     
                    </div>

                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>name</th>
                                            <th>Email</th>
                                            <th>Subject</th>

                                            <th>Message</th>
                            
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php 
                    
                           

                            $sql = "select*from contact_form";

                            $result = $connection-> query($sql);

                            $serial = 1;

                            while($data = $result-> fetch_assoc()){
                        
                        
                        ?>


                                        <tr>
                                            <td><?php echo $serial++;?></td>
                                            <td><?php echo $data['name'];?> </td>
                                            <td><?php echo $data['email'];?> </td>
                                            <td><?php echo $data['subject'];?> </td>
                                            <td><?php echo $data['message'];?> </td>
                                 
                                           
                                            <td>
                                       

                                                <a href="mailto:<?php echo $row['email'];?>" class="btn btn-danger" target="_blank">Send Message</a>
                                                <a href="contact_delete.php?id=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a>
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
           <?php include("../footer.php");?>