<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .by_btn {
            background-color: rebeccapurple;
            color: #fff;
            font-size: 1.2rem;
            padding: .5rem 2.5rem;
            text-decoration: none;
            border-radius: 1.5rem;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container wow animate__zoomIn">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form action="signup2.php" method="POST">
                <div class="input-group">
                    <div class="input-field w-100 rounded-5" id="namefield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="name" placeholder="User Name" required>
                    </div>
                    <div class="input-field w-100 rounded-5">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="input-field w-100 rounded-5">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="password" required>
                    </div>
                </div>
                <br><br><br>
                <div class="btn-field">
                    <button type="submit" id="signupbtn">Sign up</button>
                    <a href="login.php" class="by_btn">Sign In</a>
                </div>
            </form>
        </div>
    </div>