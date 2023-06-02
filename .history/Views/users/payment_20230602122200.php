<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Shopping Cart</title>
    <link rel="stylesheet" href="../../Public/CSS/cart.css">
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
    include($_SERVER['DOCUMENT_ROOT'] . "/E-commerce/Views/blocks/header.php");
    ?>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">

                    <div>
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">DELIVERY INFORMATION</h5>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                                    <div class="has-feedback">
                                        <input required type="text" class="form-control" id="inputSuccess2" placeholder="full name" name="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                                    <div class="has-feedback">
                                        <input required type="text" class="form-control" id="inputSuccess2" placeholder="phone number" name="Phone">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                                    <div class="has-feedback">
                                        <input required type="text" class="form-control" id="inputSuccess2" placeholder="email" name="Email">

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                                    <div class="has-feedback">
                                        <input required type="text" class="form-control" id="inputSuccess2" placeholder="address" name="Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">DELIVERY METHOD</h5>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                                    <div class="ck1">
                                        <input type="radio" id="cb3" name="shippingType" value="normal" checked="">
                                        <label for="cb3"></label>
                                        Super Speed Delivery
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                                    <div class="ck1">
                                        <input type="radio" id="cb4" name="shippingType" value="normal" checked="">
                                        <label for="cb4"></label>
                                        Saving Delivery
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">FORM OF PAYMENT</h5>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                                    <div class="ck1">
                                        <input type="radio" id="cb5" name="paymentType" class="paymentType" value="cash" checked="">
                                        <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-cod.svg" width="32" height="32">
                                        <label for="cb5"></label>
                                        CASH
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                                    <div class="ck1">
                                        <input type="radio" id="cb6" name="paymentType" class="paymentType" value="atm" checked="">
                                        <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-atm.svg" width="32" height="32">
                                        <label for="cb6"></label>
                                        ATM
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
                                    <div class="ck1">
                                        <input type="radio" id="cb7" name="paymentType" class="paymentType" value="vnpay">
                                        <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-vnpay.png" width="32" height="32">
                                        <label for="cb7"></label>
                                        VNPAY
                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                                    <div class="ck1">
                                        <input type="radio" id="cb8" name="paymentType" class="paymentType" value="momo">
                                        <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-momo.svg" width="32" height="32">
                                        <label for="cb8"></label>
                                        MOMO
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">ORDER</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Provisional
                                    <?php

                                    if (isset($_SESSION['giohang'])) {
                                        $giohang = $_SESSION['giohang'];
                                        $price = 0;
                                        $total = 0;
                                        foreach ($giohang as $product => $sp) {

                                            if (!empty($sp['total'])) {
                                                $total = 0;
                                                $price += (int)$sp['total'];
                                            } else {
                                                $total = 0;
                                                $price = 0;
                                            }
                                        }
                                        $total = $total + $price;
                                        


                                        echo "<b>$$total</b>";
                                    }
                                    ?>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Transport fee
                                    <span><b>$10</b></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                    </div>
                                    <?php
                                    $last = $total + 10 ;
                                    
                                    $_SESSION['totalamount'] = $last; 
                                    ?>
                                    <span><strong>$<?php echo $last ?></strong></span>
                                </li>
                            </ul>
                            <!-- <button type="button" class="purchase">
                                ORDER
                            </button> -->
                            <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="xulithanhtoan.php">
                                <input type="submit" name="momo" id="" value="Thanh toán MOMO QRCODE" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

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