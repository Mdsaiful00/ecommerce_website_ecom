<?php include("connection.php");?>

<?php

if(isset($_SESSION['name'])){

}
else{
    header('location:login.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cara- Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
    <?php include 'sidebar.php';?>
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
                    

                    <!-- Content Row -->
                    <div class="row mt-4">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary dashboard_top_card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2 text-center">
                                            <div class="text-xs dashboard_card  font-weight-bold text-primary text-uppercase mb-1">
                                               <h3>Total Order</h3> 
                                            </div>
                                            <div class="h5 mb-0 dashboard_card_value font-weight-bold text-gray-800">
                                            <?php 

                                                $total_order=1;
                                                $sql='SELECT*FROM invoice';
                                                $result=$connection->query($sql);
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $total_order=$total_order+1;
                                                }
                                                ?>
                                                <h4><?php echo $total_order;?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Earnings (Monthly) Card Example -->

                        <div class="col-xl-3 col-md-6 mb-4">

                            <div class="card border-left-success shadow h-100 py-2 dashboard_top_card">

                                <div class="card-body dashboard_card_body">

                                    <div class="row no-gutters align-items-center">

                                        <div class="col mr-2">

                                            <div class="text-xs dashboard_card font-weight-bold text-success text-uppercase mb-1">
                                                
                                                <h3>Complete Order</h3>
                                            </div>
                                            <div class="h5 mb-0 dashboard_card_value font-weight-bold text-gray-800">
                                            <?php 
                                            $order_complete=1;
                                            $sql='SELECT*FROM invoice where status=2';
                                            $result=$connection->query($sql);
                                            while($row=mysqli_fetch_assoc($result)){
                                                $order_complete=$order_complete+1;
                                            }
                                            ?>
                                               <h4>
                                                    <?php echo $order_complete;?>
                                                </h4>                                         
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2 dashboard_top_card">
                                <div class="card-body dashboard_card_body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs dashboard_card font-weight-bold text-success text-uppercase mb-1">
                                                <h3>Complete Order</h3>
                                            </div>
                                            <div class="h5 mb-0 dashboard_card_value font-weight-bold text-gray-800">
                                            <?php 
                                                $order_shipping=1;
                                                $sql='SELECT*FROM invoice where status=1';
                                                $result=$connection->query($sql);
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $order_shipping=$order_shipping+1;
                                                }
                                                ?>
                                                <h4><?php echo $order_shipping;?></h4>
                                                       
                                               
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2 dashboard_top_card">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold dashboard_card text-info text-uppercase mb-1">
                                                <h3>Order Pending</h3>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                               
                                                    <div class="h5 mb-0 mr-3 dashboard_card_value font-weight-bold text-gray-800">
                                                    <?php 
                                                $order_pending=1;
                                                $sql='SELECT*FROM invoice where status=0';
                                                $result=$connection->query($sql);
                                                while($row=mysqli_fetch_assoc($result)){
                                                    $order_pending=$order_pending+1;
                                                }
                                                ?>
                                                <h4><?php echo $order_pending;?></h4>
                                                       
                                                  
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                       
                    </div>

                    <!-- Content Row -->

                    <div class="card">
                    <div class="card-header">
                      <span>Order List</span>
                      <div class="services__items " style="float: right;">
                      
                    </div>

                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Invoice Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php 
                    
                           

                            $sql = "select*from invoice";

                            $result = $connection-> query($sql);

                            $serial = 1;

                            while($data = $result-> fetch_assoc()){
                        
                        
                        ?>


                                        <tr>
                                            <td><?php echo $serial++;?></td>
                                            <td><?php echo $data['invoice_name'];?> </td>
                                            <td><?php echo $data['date'];?> </td>
                                            <td>
                                            <?php 

                                            if($data['status']==0){
                                                echo "Pending";
                                            }
                                            if($data['status']==1){
                                                echo "Shipping";
                                            }
                                            if($data['status']==2){
                                                echo "Completed";
                                            }
                                            ?>

                                            </td>
                                            <td>
                                               <a href="order_details.php?id=<?php echo $data['id'];?>" class="btn btn-primary mb-2">Order Details</a>

                                            </td>
                                           
                                        </tr>

                                        <?php } ?>
                           
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    </div>


                    <!-- Content Row -->
            

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Neutron Star 2023</span>
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
           
