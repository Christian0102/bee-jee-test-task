<?php

class AdminController
{


    public function actionAdmin($params, $id)
    {
        print_r(Users::getUsers());
       
    }

    public function actionView()
    {
        return true;
    }

}