<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <style>
            *{
            margin: 0;
            padding: 0;
            font-family: 'poppins', sans-serif;
            box-sizing: border-box;
        }

        .container{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0,0,50,0.8),rgba(0,0,50,0.8)),url(background.png);
            background-position: center;
            background-size: cover;
            position: relative;
        }

        .form-box{
            width: 90%;
            max-width: 450px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #fff;
            padding: 50px 60px 70px;
            text-align: center;
        }

        .form-box h1{
            font-size: 30px;
            margin-bottom: 60px;
            color: #3c00a0;
            position: relative;
        }

        .form-box h1::after{
            content: '';
            width: 30px;
            height: 4px;
            border-radius: 3px;
            background: #3c00a0;
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);

        }
        .input-field{
            background: #eaeaea;
            margin: 15px 0px;
            border-radius: 3px;
            display: flex;
            align-items: center;
            max-height: 65px;
            transition: max-height 0.5s;
            overflow: hidden;
        }
        input{
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;
        }

        .input-field i{
            margin-left: 15px;
            color: #999;
        }
        form p{
            text-align: left;
            font-size: 13px;

        }

        form p a{
            text-decoration: none;
            color: #3c00a0;
        }

        .btn-field{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

    .button{
            width: 60%;
            background: #3c00a0;
            color: #fff;
            height: 40px;
            border-radius: 20px;
            border: 0;
            outline: 0;
            cursor: pointer;
            padding: 5px 20px;
            font-size: 20px;
        }

        .input-group{
            height: 250px;
        }
/* 
        .btn-field button.disable{
            background: #eaeaea;
            color: #555;
        } */
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign IN</h1>
            <form action="login2.php" method="POST">
                <div class="input-group">
                    <div class="input-field" id="namefield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="User Name" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="password" required>
                    </div>
                    <p>Lost password <a href="#">Click Here!</a></p>
                </div>

               
                    <input type="submit" class="button" value="Sign In">
                    <!-- <button type="button" id="signinbtn" class="disable">Sign in</button> -->
            </form>
        </div>
    </div>










    <!-- <script>
        let signupbtn = document.getElementById('signupbtn');
        let signinbtn = document.getElementById('signinbtn');
        let namefield = document.getElementById('namefield');
        let title = document.getElementById('title');


        signinbtn.onclick = function(){
            namefield.style.maxHeight = "0";
            title.innerHTML = "Sign In";
            signupbtn.classList.add("disable");
            signinbtn.classList.remove("disable");
        }


        signupbtn.onclick = function(){
            namefield.style.maxHeight = "65px";
            title.innerHTML = "Sign Up";
            signupbtn.classList.remove("disable");
            signinbtn.classList.add("disable");
          
        }





    </script> -->
</body>
</html>