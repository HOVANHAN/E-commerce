<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Models/UserModel.php");
class UserController
{
    public $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function invokeAdmin()
    {
        $users = $this->model->getUserList();
        include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/admin/customerlist.php");
    }
}
