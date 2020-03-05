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
    
    echo "Return on VIew";
   }



}