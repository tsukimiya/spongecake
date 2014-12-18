<?php
class Session
{
    public static function start()
    {
        session_start();
    }

    public static function unsetId()
    {
        unset($_SESSION['id']);
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null)
    {

        return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
    }

    public static function delete($key)
    {
        unset($_SESSION[$key]);
    }
}
