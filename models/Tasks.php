<?php

class Tasks
{
  public static function getAll()
  {

    $db = Db::getConnection();
    $sql = 'SELECT * from tasks';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }



  public static function create($username, $email, $description)
  {
    
    $db = Db::getConnection();

    $sql = 'INSERT INTO tasks (user_name, email, description) '
      . 'VALUES (:user_name, :email, :description)';

    $result = $db->prepare($sql);
    $result->bindParam(':user_name', $username, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':description', $description, PDO::PARAM_STR);
    return $result->execute();
  }
}
