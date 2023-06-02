<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

//require_once '../../Models/UserModel.php';
class UserController
{
    public $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function invoke()
    {
        if (isset($_POST['submitSignup'])) {
            switch ($this->model->register($_POST['username'], $_POST['password'], $_POST['email'], $_POST['phoneNum'], $_POST['address'], $_POST['name'], $_POST['confirmPass'])) {
                case 0: {
                        //header("Location: ../users/signin.php?msg=true");
                        echo "<script>
                        window.location.href = '../users/signin.php?msg=true';
                         </script>";
                        break;
                    }
                case 1: {
                       // header("Location: ../users/signup.php?msg=account_has_been_exist");
                       echo "<script>
                        window.location.href = '../users/signup.php?msg=account_has_been_exist';
                         </script>";
                        break;
                    }
                case 3: {
                        //header("Location: ../users/signup.php?msg=invalid_input_data");
                        echo "<script>
                        window.location.href = '../users/signup.php?msg=invalid_input_data';
                         </script>";
                        break;
                    }
                default:
                    break;
            }
        }
    }
}
