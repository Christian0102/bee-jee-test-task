<?php

class AdminController
{


    public function actionAdmin($params, $id)
    {
        print_r(Users::getUsers());
    }

    public function actionView()
    {
        print_r("Adin view");
        return true;
    }
    public function create()
    {
        
    }

    public function store()
    {

    }
}
