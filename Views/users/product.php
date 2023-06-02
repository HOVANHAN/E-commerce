<?php
include($_SERVER['DOCUMENT_ROOT'] . "/E-commerce/Controllers/ProductController.php");
$controller = new ProductController();
$controller->invoke();
