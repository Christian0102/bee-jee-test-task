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
    $result = $db->prepare($sql)->execute([$username, $email, $description]);
    return $result;
  }

  public static function updateUpdateById($id, $username, $email, $description, $status)
  {
    $db = Db::getConnection();
    $sql = "UPDATE tasks
        SET 
            username = :username, 
            email = :email, 
            status = :status,
            description= :description
        WHERE id = :id";

    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->bindParam(':username', $username, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_INT);
    $result->bindParam(':status', $status, PDO::PARAM_INT);
    $result->bindParam(':description', $description, PDO::PARAM_INT);
    return $result->execute();
  }



  public static function getById($id)
  {
    $db = Db::getConnection();

    $sql = 'SELECT * FROM tasks WHERE id = :id';

    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);


    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute();

    return $result->fetch();
  }
}
