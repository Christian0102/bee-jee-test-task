<?php

class AdminController extends AdminBase
{


    public function actionAdmin($params, $id)
    {
    }

    public function actionIndex()
    {
        $tasks = Tasks::getAll();
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }
    public function create()
    {
    }

    public function store()
    {
    }
}
