<?php

class AdminController extends AdminBase
{




    public function actionIndex()
    {
        self::checkAdmin();

        $tasks = Tasks::getAll();
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }
    public function actionCreate()
    {
        self::checkAdmin();

        $userName = false;
        $email = false;
        $description = false;
        $errors = false;

        //SessionHelper::deleteFlashMessage();

        if (isset($_POST['submit'])) {

            $userName = htmlspecialchars($_POST['user_name']);
            $email = htmlspecialchars($_POST['email']);
            $description = htmlspecialchars($_POST['description']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Please Enter Valid Email';
            }
            if (!isset($userName)) {
                $errors[] = 'Please Insert Username';
            }

            if (!isset($description)) {
                $errors[] = 'Pleases insert decription';
            }
            if ($errors == false) {
                $result = Tasks::create($userName, $email, $description, 1);
                if ($result == true) {
                    SessionHelper::setFlashMessage('Task was added Successfully');
                    header("Location:/admin/index");
                }
            }
        }
        require_once(ROOT . '/views/admin/create.php');
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();

        $task = Tasks::getById($id);


        if (isset($_POST['submit'])) {

            $username = htmlspecialchars($_POST['user_name']);
            $email = htmlspecialchars($_POST['email']);
            $description = htmlspecialchars($_POST['description']);
            $status = htmlspecialchars($_POST['status']);


            $result = Tasks::updateUpdateById($id, $username, $email, $description, $status, 1);
            if ($result == true) {
                header("Location: /admin/index");
            }
        }

        require_once(ROOT . '/views/admin/update.php');
        return true;
    }
}
