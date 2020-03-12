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


    public static function setFlashMessage($message)
    {
        $_SESSION['flash'] = $message;
    }

    public static function deleteFlashMessage()
    {
        if (isset($_SESSION['flash'])) {
            unset($_SESSION['flash']);
            return true;
        }
        return false;
    }

    public static function getFlashMessage()
    {
        echo $_SESSION['flash'];
        self::deleteFlashMessage();
        session_destroy();

    }
}
