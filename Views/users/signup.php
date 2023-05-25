<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Sign in</title>
    <link rel="stylesheet" href="../../Public/CSS/signup.css">
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
    <!-- header -->
    <?php
    include_once '../blocks/header.php';
    ?>
    <!-- body -->
    <div class="container signup">
        <h4 class="text-center">SIGN UP</h4>
        <form method="post">

            <?php
            require_once("../../Controllers/RegisterController.php");
            $controller = new UserController();
            $controller->invoke();

            require_once("../users/msg.php");
            ?>

            <p>Full name</p>
            <input type="text" class="form-control" name="name" placeholder="Full name">
            <p>Phone number</p>
            <input type="text" class="form-control" name="phoneNum" placeholder="Phone number">

            <p>Address</p>

            <input type="text" class="form-control" name="address" placeholder="Address">
            <p>User name</p>
            <input type="text" class="form-control" name="username" placeholder="User name">
            <p>E-mail</p>

            <input type="text" class="form-control" name="email" placeholder="E-mail">
            <div class="d-flex">
                <p class="mr-2 w-50">Password</p>
                <p class="w-50">Confirm password</p>
            </div>
            <div class="d-flex">
                <input type="password" class="form-control mr-2 w-50" name="password" placeholder="Password">
                <input type="password" class="form-control w-50" name="confirmPass" placeholder="Confirm password">
            </div>

            <div class="d-flex mt-4">
                <button class="btn btn-signup w-50" type="submit" name="submitSignup">SIGN UP</button>
                <a class="btn btn-signin w-50" href="../users/signin.php">SIGN IN</a>
            </div>
        </form>
    </div>

    <!--Footer-->
    <?php
    include_once '../blocks/footer.php';
    ?>
</body>