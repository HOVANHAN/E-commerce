<?php
include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Controllers/OrderController.php");
$controller = new OrderController();
$controller->invoke();
