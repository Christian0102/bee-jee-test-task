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
        $result = Tasks::create($userName, $email, $description);
        if ($result == true) {
          SessionHelper::setFlashMessage('Task was added Successfully');
          header("Location:/");
        }
      }
    }
    require_once(ROOT . '/views/home/create.php');
    return true;
  }
}
