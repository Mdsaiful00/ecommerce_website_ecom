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
                            <a href="#">Gilman</a>
                        </li>
                        <li>
                            <a href="#">Gilman</a>
                        </li>
                        <li>
                            <a href="#">Gilman</a>
                        </li>
                    </ul>
                    <h1>welcome Dashboard</h1>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</body>
</html>