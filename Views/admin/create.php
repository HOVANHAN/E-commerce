<?php
include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Controllers/ProductController.php");
$controller = new ProductController();
$controller->create();
