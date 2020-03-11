<?php



class SessionHelper
{

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public static function checkLogged()
    {

        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /admin/login");
    }

    public static function auth($userId)
    {

        $_SESSION['user'] = $userId;
    }
}
