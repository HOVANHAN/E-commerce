<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Modules/cart_module.php";

if (isset($_POST['cartcontroller'])) {
    $total = $_POST['quantity'] * $_POST['price'];
    if (!isset($_SESSION['giohang'])) {
        $_SESSION['giohang'] = array();
    }
    $product = array(
        "id" => $_POST['id'],
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "image" => $_POST['image'],
        "quantity" => $_POST['quantity'],
        "total" => $total
    );
    if (isset($_POST['cartcontroller'])) {
        switch ($_POST['cartcontroller']) {
            case "addToCart":
                themhangvaogio($product);
                header("Location: ../Views/users/product.php?msg=add-success");
                break;
            case "buyNow":
                themhangvaogio($product);
                header("Location: ../Views/users/shopping-cart.php?msg=add-success");
                break;
            default:
                break;
        }
    }
}
