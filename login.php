<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .by_btn {
            background-color: rebeccapurple;
            color: #fff;
            font-size: 1.2rem;
            padding: .5rem 2.5rem;
            text-decoration: none;
            border-radius: 1.5rem;
            border: none;
            text-align: center;
            display: block;
            cursor: pointer;
            margin: 0 auto;
            width: 100%;
        }

        .btn-field {
            margin-top: -4rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign In</h1>
            <form action="login2.php " method="POST">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="input-field mt-2">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="password" required>
                    </div>

                    <button type="submit" id="signinbtn" class="by_btn">Sign in</button>

                </div>
                <div class="box" style="margin-top:-4rem">
                    <p style="font-size:1rem; color:darkblue; margin:.5rem 0">don't have a account?</p>
                    <a href="signup.php" class="by_btn">Sign Up</a>

                </div>
            </form>
        </div>
    </div>


   