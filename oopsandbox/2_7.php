<?php

// Static classes are created as attributes that won't change and are called
// with the :: syntax
class User
{
    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validatePass($pass)
    {
        if (strlen($pass) >= self::$minPassLength) {
            return true;
        } else {
            return false;
        }
    }
}

$password = 'hello1';

if(User::validatePass($password)){
    echo 'Password valid';
} else {
    echo 'Pass NOT valid';
}
