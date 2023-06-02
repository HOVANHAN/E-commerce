<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - List Products</title>
    <link rel="stylesheet" href="../../Public/CSS/productlist.css">
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
    <?php
    require_once("../users/msg.php");
    ?>
    <!-- body -->
    <div class="container-fluid product px-5">
        <div class='product'>
            <div class='row'>
                <?php
                foreach ($products as $product)
                    echo "<div class='col-4 col-sm-3 card search-result__item'>
                                <a href = 'product.php?productid=" . $product->getId() . "' >
                                    <div class='item-img'>
                                        <img src='../../Assets/img/" . $product->getImage() . "'>
                                    </div>
                                    <div class='card-body items-content'>
                                        <h5 class='card-title items-content__name'>" . $product->getName() . "</h5>
                                        <h5 class='card-title items-content__name'>" . $product->getPrice() . "$</h5>
                                    </div>                          
                                </a>
                        </div>"
                ?>
            </div>
        </div>
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