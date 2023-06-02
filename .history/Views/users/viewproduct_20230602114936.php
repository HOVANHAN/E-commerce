<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Product Detail</title>
    <link rel="stylesheet" href="../../Public/CSS/productdetail.css">
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
    include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/blocks/header.php");
    ?>
    <!-- body -->
    <div class="container-fluid px-5 viewproduct">
        <?php
        require_once("../users/msg.php");
        ?>
        <form action="../../Controllers/CartController.php" method="post">
            <div class="row">
                <div class="col-7 left">
                    <?php
                    echo "<div class='item-img'>
                     <img src='../../Assets/img/" . $product->getImage() . "'>
                </div>"
                    ?>

                </div>
                <div class="col-5 right">

                    <div id='content_border'>
                        <?php
                        echo "<div class='name'><p id='pro_name'>" . $product->getName() . "</p></div>";
                        echo "<div class='price'><p>$" . $product->getPrice() . "</p></div></br>";
                        echo "<p>Description: </p>" . $product->getDescription() . "<br/>";
                        echo
                        "
                    <div>
                    <input type='hidden' name='id' value='" . $product->getId() . "'>
                    <input type='hidden' name='name' value='" . $product->getName() . "'>
                    <input type='hidden' name='price' value='" . $product->getPrice() . "'>
                    <input type='hidden' name='image' value='" . $product->getImage() . "'>
                    <input type='hidden' name='quantity' value='1'>
                    <button class='addtocart' type='submit' name='cartcontroller' value='addToCart'>ADD TO CART</button>
                    <button class='buynow' type='submit' name='cartcontroller' value='buyNow'>BUY NOW</button>
                    </div>
                    "
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--Footer-->
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/blocks/footer.php");
    ?>
    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>