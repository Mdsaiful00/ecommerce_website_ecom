<?php include("connection.php"); ?>

<?php

if (isset($_SESSION['name'])) {


  header('location:dashboard.php');
  exit();
} else {


  // echo "ok";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/owl.theme.default.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/admin.css">

</head>

<body>





  <section class="admin_login">

    <div class="container">

      <div class="row">
        <div class="col-xl-6 offset-xl-3">

          <div class="admin_form">


            <h4>
              <?php


              if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                session_destroy();
              }
              ?>
            </h4>

            <br>


            <form action="login2.php" method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label from_label">Username</label>
                <input type="text" name="username" class="form-control from_input" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your Username & Password with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label from_label">Password</label>
                <input type="password" name="password" class="form-control from_input" id="exampleInputPassword1">
              </div>
              <button type="submit" class="login_btn btn btn-primary">Submit</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>





















  <script src="js/jquery.js"></script>


  <script src="js/bootstrap.bundle.min.js"></script>




</body>

</html>