<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Sign in</title>
    <link rel="stylesheet" href="../../Public/CSS/signin.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link owl carousel -->
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <?php

    include_once("../blocks/header.php");

    ?>
    <div class="container login">
        <h4 class="text-center">SIGN IN</h4>

        <form class="w-50 mx-auto" method="post">
            <div class="form-group">
                <?php
                require_once("../../Controllers/LoginController.php");
                $controller = new UserController();
                $controller->invoke();
                require_once("../users/msg.php");
                ?>
                <p class="form-text">User name</p>
                <input type="text" class="form-control" name="username" placeholder="bichnganhz" required autocomplete>
                <p class="form-text mt-3">Password</p>

                <input type="password" class="form-control" name="password" placeholder="password" required autocomplete>

            </div>
            <a class="forgot-password d-flex">Forgot password?</a>
            <div class="form-checkbox d-flex">
                <input type="checkbox" name="remember">
                <p>Remember me</p>
            </div>
            <div class="d-flex mt-4">
                <button class="btn btn-signin w-50" type="submit" name="submitLogin">SIGN IN</button>
                <a class="btn btn-signup w-50" href="../users/signup.php">SIGN UP</a>
            </div>


        </form>

    </div>
    <?php include_once("../blocks/footer.php");?>
</body>

</html>