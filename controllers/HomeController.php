<?php


class HomeController
{
   public function actionView($id)
   {
     echo $id;
     
   }

   public function actionIndex()
   {
    $tasks = Tasks::getAll();
    require_once(ROOT . '/views/home/index.php');
    return true;
   }



}