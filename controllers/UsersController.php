<?php


class UsersController
{
   public function actionView($id)
   {
     echo $id;
     print_r(Users::getUsers());
   }

   public function actionIndex()
   {
    
    require_once(ROOT . '/views/home/index.php');
    return true;
   }



}