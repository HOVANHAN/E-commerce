<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Models/OrderModel.php");

class OrderController
{
    public $model;
    public function __construct()
    {
        $this->model = new OrderModel();
    }

    public function invoke()
    {
        $orders = $this->model->getOrder();
        include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/admin/orderlist.php");
    }
}
