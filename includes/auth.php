<?php

class Authenticate
{
    protected static $auth = [
        'name' => 'isLogin',
        'defaultValue' => '',
        'value' => ''
    ];

    public static function isAuth()
    {
        if (isset($_COOKIE[self::$auth['name']])) {
            return true;
        }

        return false;
    }
}