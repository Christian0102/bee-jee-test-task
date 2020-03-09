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
}
