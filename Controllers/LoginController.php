<?php
require_once("../../Models/userModel.php");
//session_start();
class UserController
{
    public $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function invoke()
    {
        if (isset($_POST['submitLogin'])) {

            if ($this->model->login($_POST['username'], $_POST['password']) == true) {

                if ($_POST['username'] == 'admin') {

                    $users =  $this->model->getUserList();
                   // header("Location: ../admin/customers.php");
                   echo "<script>
                      window.location.href = '../admin/customers.php';
                     </script>";
                } else {
                    $_SESSION['username'] = $_POST['username'];
                   // header("Location: ../users/home.php");
                   echo "<script>
                     window.location.href = '../users/home.php';
                     </script>";

                }
            } else {
            //   header("Location: ../users/signin.php?msg=false");

            echo "<script>
                    window.location.href = '../users/signin.php?msg=false';
                </script>";

            }
        } else {
        }
      
    }
}
