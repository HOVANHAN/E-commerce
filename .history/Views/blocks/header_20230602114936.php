<?php
session_start();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allcarta - Login</title>
    <link rel="stylesheet" href="../../Public/CSS/header.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid header">
        <nav class="navbar navbar-expand-lg">
            <div class="row">
            <div class="col-xl-4 col-lg-3 col-sm-3 col-3 navbar-logo" href="#">
                <a href="../users/home.php">
                <img src="../../Assets/logo.png" alt="">
                </a>
            </div>
            <div class="col-xl-8 col-lg-9 col-sm-9 col-9 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../users/home.php">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../users/product.php">PRODUCT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../users/shopping-cart.php">CART</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../users/support.php">hahah</a>
                    </li>

                </ul>
                <form class="form-inline my-lg-0 d-inline" action="../users/product.php" method="post">
                    <input class="form-control mr-sm-3 d-inline" type="text" placeholder="Search" name="keyword" aria-label="Search">
                    <i class="fas fa-search nav-icon-search" type="submit"></i>
                </form>
                <div class="dropdown header_navbar-icon d-inline">
                    <i class="dropbtn fas fa-user nav-icon-search"></i>
                    <div class="dropdown-content subnav subnav-login ">
                        <a href="../users/signin.php">
                            <?php
                            if (isset($_SESSION['username'])) {
                                $state = $_SESSION['username'];
                                echo "<span class='username'>" . $state . "</span>";
                            } else {
                                echo "Sign in";
                            }
                            ?>
                        </a>
                        <a href="../users/signup.php">Sign up</a>
                        <a href="../users/signin.php">
                            <?php
                            if (isset($_SESSION['username'])) {
                                unset($_SESSION['username']);
                                echo "Logout";
                            }
                            ?>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </nav>
    </div>
</body>

</html>