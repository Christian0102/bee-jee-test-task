<?php

abstract class AdminBase
{

    /**
     * @return boolean
     */
    public function __construct()
    {
        
    }
    

    public static function checkAdmin()
    {
     
     $userId = SessionHelper::checkLogged();

    
     $user = Users::getUserById($userId);
     if ($user['name'] == 'admin') {
        return true;
    }
   
     die('Access denied');
  
    }

}