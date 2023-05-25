<?php

require_once("../../Models/UserModel.php");
class UserController
{
    public $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function invoke()
    {
        // var_dump( $_SESSION['username']);
        // exit;
        // if($this->model->Logout($username))
        // {
        //     header("Location: ../users/signin.php");
        // }
    }
}
