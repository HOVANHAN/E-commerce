<?php
session_start();
function themhangvaogio($product)
{
    if (isset($_SESSION['giohang'])) {
        $giohang = $_SESSION['giohang'];
        if (!array_key_exists($product["id"], $giohang)) {
            $giohang[$product["id"]] = $product;
            $_SESSION['giohang'] = $giohang;
        } else {
            $giohang[$product["id"]] = $product;
            $_SESSION["giohang"] = $giohang;
        }
    }
}
function xoahangkhoigio($id)
{
    if (isset($_SESSION["giohang"])) {
        $giohang = $_SESSION['giohang'];
    };
    unset($giohang[$id]);
    $_SESSION['giohang'] = $giohang;
}

function capnhathangtronggio($id, $quantity)
{
    if (isset($_SESSION['giohang'])) {
        $giohang = $_SESSION['giohang'];
        $giohang[$id]['quantity'] = $quantity;
        $_SESSION['giohang'] = $giohang;
    }
}

function tinhtien()
{
    $sum = 0;
    $cart = $_SESSION['giohang'];
    foreach ($cart as $v)
        $sum += $v['quantity'] * $v['price'];
    return number_format($sum);
}
