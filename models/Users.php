<?php

class Users
{
      public static function getUser($name, $password)
      {

            $db = Db::getConnection();


            $sql = 'SELECT * FROM users WHERE name = :name AND password = :password';

            $result = $db->prepare($sql);
            $result->bindParam(':name', $name, PDO::PARAM_INT);
            $result->bindParam(':password', $password, PDO::PARAM_INT);
            $result->execute();


            $user = $result->fetch();

            if ($user) {
                  return $user['id'];
            }
            return false;
      }
      public static function getUserById($id)
      {
            
            $db = Db::getConnection();
            $sql = 'SELECT * FROM users WHERE id = :id';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
      }


      public static function checkName($name)
      {
            if (strlen($name) >= 2) {
                  return true;
            }
            return false;
      }

      public static function checkPassword($password)
      {
            if (strlen($password) >= 2) {
                  return true;
            }
            return false;
      }
}
