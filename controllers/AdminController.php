<?php

class AdminController extends AdminBase
{


   

    public function actionIndex()
    {
        $tasks = Tasks::getAll();
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }
    public function create()
    {
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();

        $task = Tasks::getById($id);

    
        if (isset($_POST['submit'])) {
          
            $username = $_POST['username'];
            $email = $_POST['email'];
            $description = $_POST['description'];
            $status = $_POST['status'];

           
            Tasks::updateUpdateById($id, $username, $email, $description,$status);

            
            header("Location: /admin/index");
        }
        require_once(ROOT . '/views/admin_category/update.php');
        return true;


    }
}
