<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Home</title>
    <link rel="stylesheet" href="../../Public/CSS/header.css">
    <link rel="stylesheet" href="../../Public/CSS/home.css">
    <link rel="stylesheet" href="../../Public/CSS/footer.css">
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
    <div class="container-fluid homepage px-5">
        <div class="carousel">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video autoplay muted preload loop width="100%">
                            <source src="../../Assets/intro.mp4">
                        </video>
                    </div>
                    <div class="carousel-item">
                        <img src="../../Assets/img/bed-1-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../Assets/img/sofa-2-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../Assets/img/table-5-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../Assets/img/bed-1-3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>

        <div class="product-portfolio mt-3 mt-sm-5">
            <div class="row">
                <div class="col-6 portfolio_1">
                    <div class="card">
                        <a href="">
                            <div class="item-img">
                                <img src="../../Assets/img/chair-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">Chair</h5>
                                <h5 class="card-text items-content__price">20 Products</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 portfolio_2 splitting">
                    <div class="row-12 card mb-lg-2 mb-xl-4">
                        <a href="">
                            <div class="item-img">
                                <img src="../../Assets/img/table-4-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">Table</h5>
                                <h5 class="card-text items-content__price">25 Products</h5>
                            </div>
                        </a>
                    </div>
                    <div class="row-12 card">
                        <a href="">
                            <div class="item-img">
                                <img src="../../Assets/img/sofa-3-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">Sofa</h5>
                                <h5 class="card-text items-content__price">25 Products</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 portfolio_3 splitting">
                    <div class="row-12 card mb-lg-2 mb-xl-4">
                        <a href="">
                            <div class="item-img">
                                <img src="../../Assets/img/bed-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">Bed</h5>
                                <h5 class="card-text items-content__price">25 Products</h5>
                            </div>
                        </a>
                    </div>
                    <div class="row-12 card">
                        <a href="">
                            <div class="item-img">
                                <img src="../../Assets/img/clock-2-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h5 class="card-title items-content__name">Clock</h5>
                                <h5 class="card-text items-content__price">25 Products</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="utilities mt-3 mt-sm-5">
            <div class="row">
                <div class="col-6 col-sm-3 d-flex utilities-text">
                    <i class="fas fa-globe"></i>
                    <div class="pl-2 pl-lg-3">
                        <p>Free Shipping And Return</p>
                        <span>Shop From Your Own Home</span>
                    </div>
                </div>
                <div class="col-6 col-sm-3 d-flex utilities-text">
                    <i class="fas fa-wallet"></i>
                    <div class="pl-2 pl-lg-3">
                        <p>Money Back Guarantee</p>
                        <span>Shop From Your Own Home</span>
                    </div>
                </div>
                <div class="col-6 col-sm-3 d-flex utilities-text">
                    <i class="fas fa-headphones"></i>
                    <div class="pl-2 pl-lg-3">
                        <p> Online Support 24/7</p>
                        <span>Shop From Your Own Home</span>
                    </div>
                </div>
                <div class="col-6 col-sm-3 d-flex utilities-text">
                    <i class="fas fa-cart-arrow-down"></i>
                    <div class="pl-2 pl-lg-3">
                        <p>Safe Payment</p>
                        <span>Shop From Your Own Home</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner mt-3 mt-sm-5">
            <img src="../../Assets/banner.jpg" alt="">
        </div>

        <div class="best-seller mt-3 mt-sm-5">
            <h4 class="text-center">BEST SELLER</h4>
            <div class="row">
                <div class="col-6 col-lg-3 card search-result__item">
                    <a href="">
                        <div class="item-img">
                            <img src="../../Assets/img/chair-1-1.jpg" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">CIELO</h5>
                            <h5 class="card-text items-content__price">20 USD</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 card search-result__item">
                    <a href="">
                        <div class="item-img">
                            <img src="../../Assets/img/clock-6-3.jpg" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">NAGI 2013</h5>
                            <h5 class="card-text items-content__price">25 USD</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 card search-result__item">
                    <a href="">
                        <div class="item-img">
                            <img src="../../Assets/img/bed-5-1.jpg" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">CRAFT CHAIR</h5>
                            <h5 class="card-text items-content__price">23 USD</h5>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 card search-result__item">
                    <a href="">
                        <div class="item-img">
                            <img src="../../Assets/img/sofa-1-2.jpg" alt="">
                        </div>
                        <div class="card-body items-content">
                            <h5 class="card-title items-content__name">SAIL SOFA</h5>
                            <h5 class="card-text items-content__price">32 USD</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="sale mt-3 mt-sm-5">
            <div class="row">
                <div class="col-12 col-sm-6 mb-3">
                    <div class="card">
                        <a href="">
                            <div class="item-img">
                                <img src="../../Assets/img/sofa-3-3.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h2>Mind-Blowing Discounts</h2>
                                <h1><span>50%</span> OFF</h1>
                                <p>Shop From Your Own Home</p>
                                <button>Check Offers</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 mb-3">
                    <div class="card">
                        <a href="">
                            <div class="item-img">
                                <img src="../../Assets/img/table-1-1.jpg" alt="">
                            </div>
                            <div class="card-body items-content">
                                <h2>More Than 250 Products From</h2>
                                <h1><span>$3.99</span></span> OFF</h3>
                                    <p>Shop From Your Own Home</p>
                                    <button>Shop now</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <?php
    include_once '../blocks/footer.php';
    ?>
    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <!-- owl-carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 5,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1200: {
                    item: 5
                }
            }
        })
    </script>
</body>
<script src="../do-an-web-php/Views/Public/JS/home.js"></script>

</html>