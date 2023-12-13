<?php include("connection.php");?>

<?php

if(isset($_SESSION['name'])){

    // echo "ok";

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
                 
                    <!-- Content Row -->

                    <div class="card">
                    <div class="card-header">
                      <span>Order Details</span>
                      <div class="services__items " style="float: right;">
                      
                    </div>

                    </div>
                    <div class="card-body">
                      
                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Price*Qty</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        <?php

                                        $serial=1;
                                        $total=0;


                                        $inv_id=$_GET['id'];
                                        
$sql="SELECT order_cart.order_id, order_cart.product_id, order_cart.qty,product.title,product.price
FROM order_cart
INNER JOIN invoice ON order_cart.invoice_id=invoice.id
INNER JOIN product ON product.id=order_cart.product_id
WHERE invoice.id= $inv_id";

  $result = $connection-> query($sql);


  while($data = $result-> fetch_assoc()){
    ?>
     <tr>
    <td><?php echo $serial++;?></td>
    <td><?php echo $data['title'];?> </td>
    <td><?php echo $data['price'];?> </td>
    <td><?php echo $data['qty'];?> </td>
    <td>
        <?php 
    echo $sub= $data['price']*$data['qty'];
    $total=$total+$sub;
    
    
    ?>
    </td>
    </tr>

   
  <?php }

?>


  

                                    

                                    </tbody>
                                   
                                </table>
                                <h4 style="float:right;"></h4>Total Amount  : <?php echo $total;?> &nbsp; $ </h4>
                            </div>


                            <?php 

                                                                                
$sql="SELECT*FROM order_cart
INNER JOIN invoice ON order_cart.invoice_id=invoice.id
INNER JOIN user ON user.id=order_cart.user_id
INNER JOIN billing ON billing.user_id=user.id
WHERE invoice.id= $inv_id";

$result = $connection-> query($sql);

$row=mysqli_fetch_array($result);


?>

            <div class="row">
                <div class="col-xl-6">
                    <div class="userinfo">
                        <h2>Customer Information</h2>

                        <h3>Name: <?php echo $row['name'];?></h3>
                        <h3>Email: <?php echo $row['email'];?></h3>
                        <h3>Mobile: <?php echo $row['phone'];?></h3>
                    
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="userbilling">
                        <h2>Customer Billing</h2>
                        
                        <h3>City: <?php echo $row['city'];?></h3>
                        <h3>District: <?php echo $row['district'];?></h3>
                        <h3>Address: <?php echo $row['address'];?></h3>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="status_form">
                    <form action='status_update.php' method='POST'>
                        <input type="hidden" name="id" value="<?php echo $inv_id;?>"> 
                        <h4>Status</h4>
                    <select class="form-select form-control" name="status" aria-label="Default select example">

                        <option value="0">Pending</option>
                        <option value="1">Shipping</option>
                        <option value="2">Complete</option>

                        </select>
                        <input type="submit" class="form-control mt-3 btn btn-primary" value="Status Update">
                    </form>
                </div>
            </div>
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
           
