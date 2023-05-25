<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Modules/cart_module.php";

if (isset($_POST['cartaction'])) {
    switch ($_POST["cartaction"]) {
        case "removeFromCart":
            xoahangkhoigio($_POST['id']);
            header('location: ../Views/users/shopping-cart.php');
            break;
        default:
            break;
    }
}
