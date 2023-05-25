<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Models/ProductModel.php");

class ProductController
{
    public $model;

    public function __construct()
    {
        $this->model = new ProductModel();
    }

    public function invoke()
    {
        if (!isset($_GET["productid"]) && !isset($_POST['keyword'])) {
            $products = $this->model->getProductList();
            include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/users/productlist.php");
        } 
        else if (!isset($_GET["productid"]) && isset($_POST['keyword'])) {
            $products = $this->model->searchProduct($_POST['keyword']);
            include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/users/productlist.php");
        }
        else {
            $product = $this->model->getProduct($_GET["productid"]);
            include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/users/viewproduct.php");
        }
    }
    public function invokeAdmin()
    {
        if (!isset($_GET["productid"])) {
            $products = $this->model->getProductList();
            include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/admin/productlist.php");
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'delete') {
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $result = $this->model->deleteProduct($id);
                    }
                }
            }
        } else {
            $product = $this->model->getProduct($_GET["productid"]);
            include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/admin/update-product.php");
            if (isset($_POST['submit'])) {
                $result = $this->model->updateProduct($_POST['id'], $_POST['name'], $_POST['description'], $_POST['price'], $_POST['image'], $_POST['category']);
            }
        }
    }
    public function create()
    {
        if (isset($_POST['submit'])) {
            $result = $this->model->createProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['image'], $_POST['category']);
            if ($result) {
                include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/admin/create-product.php");
            } else {
            }
        } else {
            include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/admin/create-product.php");
        }
    }   

}
