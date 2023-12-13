<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body{
            background:#ffffff;
        }
        .sidebar{
            background: #088178;
            height: 100vh;
            text-align:center;
        
        }
        .sidebar li{
            list-style:none;
        }
        .sidebar li a{
            color:#fff;
            text-decoration:none;
            font-size:18px;
            
        }
        .nav{
            background: #088178;
            padding:20px;
        }
        .nav li{
            margin-left:20px;
        }
        .nav li a{
            font-size:20px;
            color:#fff;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'e-com';

    $connection = mysqli_connect($hostname,$username,$password,$dbname);
    ?>





    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xl-2">
                <div class="sidebar">
                    <h3>Admin</h3>
                    <ul>
                        <li>
                            <a href="dashboard/banner.php">Banner Content</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-10">
                <div class="content">
                    <ul class="nav">
                        <li>
                            <a href="#">ecommerce_website</a>
                        </li>
                        <li>
                            <a href="#">ecommerce_website</a>
                        </li>
                        <li>
                            <a href="#">ecommerce_website</a>
                        </li>
                    </ul>
                    <h1>Banner Content</h1>
                    <hr>
                    <?php
                    
                        $sql = "select*from hero";
                        $result = $connection->query($sql);
                        $row = mysqli_fetch_array($result);
                    ?>


                    <form action="dashboard/banner_update.php" method="POST">
                        <label for="">Sub Title</label>
                        <input type="text" class="form-control" value="<?php echo $row['subtitle']; ?>" name="subtitle" required>
                        <label for="">Title</label>
                        <input type="text" class="form-control" value="<?php echo $row['title']; ?>"name="title" required>
                        <label for="">Title2</label>
                        <input type="text" class="form-control" value="<?php echo $row['title2']; ?>" name="title2" required>
                        <label for="">Content</label>
                        <input type="text" class="form-control" value="<?php echo $row['content']; ?>" name="content" required>

                        <br>
                        <input type="submit" value="update" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>