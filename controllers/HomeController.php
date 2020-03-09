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

  public function actionCreate()
  {


    if (isset($_POST['submit'])) {

      $userName = $_POST['user_name'];
      $email = $_POST['email'];
      $description = $_POST['description'];

      $result = Tasks::create($userName, $email, $description);
      if ($result == true) {
        header("Location: /home");
      }
    }
    require_once(ROOT . '/views/home/create.php');
    return true;
  }
}
