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



  public static function create($username, $email, $description, $status = 0)
  {

    $db = Db::getConnection();
    $sql = "INSERT INTO tasks (user_name, email, description, status) VALUES (?, ?, ?, ?)";
    $result = $db->prepare($sql)->execute([$username, $email, $description, $status]);
    return $result;
  }

  public static function updateUpdateById($id, $username, $email, $description, $status,$edit = 0)
  {
    $db = Db::getConnection();
    $sql = "UPDATE tasks
        SET 
            user_name = :user_name, 
            email = :email, 
            status = :status,
            description= :description,
            edit_admin = :edit_admin
        WHERE id = :id";

    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->bindParam(':user_name', $username, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':status', $status, PDO::PARAM_INT);
    $result->bindParam(':description', $description, PDO::PARAM_STR);
    $result->bindParam(':edit_admin', $edit, PDO::PARAM_INT);
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
