<?php


class AuthController extends AdminBase
{

    public function actionLogin()
    {
        $username = false;
        $password = false;


        if (isset($_POST['submit'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $errors = false;

            if (!Users::checkName($username)) {
                $errors[] = 'Invalid user name ';
            }
            if (!Users::checkPassword($password)) {
                $errors[] = 'Invalid Password';
            }

            $userId = Users::getUser($username, $password);

            if ($userId == false) {

                $errors[] = 'Invalid credentials';
            } else {

                SessionHelper::auth($userId);


                header("Location: /admin/index");
            }
        }


        require_once(ROOT . '/views/auth/login.php');
        return true;
    }

    public function actionLogout()
    {
        session_start();
        unset($_SESSION["user"]);
        header("Location: /");
    }
}
