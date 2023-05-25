<?php
include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Controllers/UserController.php");
$controller = new UserController();
$controller->invokeAdmin();
