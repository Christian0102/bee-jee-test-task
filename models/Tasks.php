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
    $sql = "INSERT INTO tasks (user_name, email, description) VALUES (?, ?, ?)";
    $result = $db->prepare($sql)->execute([$username, $email , $description]);
   return $result;
      
    
  }
}
