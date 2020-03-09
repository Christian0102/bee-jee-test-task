<?php

class AdminController
{


    public function actionAdmin($params, $id)
    {
        
    }

    public function actionView()
    {

        echo '<pre>';
        print_r(Tasks::getAll());die;
        return true;
    }
    public function create()
    {

    }

    public function store()
    {

    }
}
