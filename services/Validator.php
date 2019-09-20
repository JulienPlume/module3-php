<?php
class Validator
{
    public static function notEmpty($string)
    {
        return !empty(trim($string)) && !empty(trim($string));
    }

    public static function minimum2($string)
    {
        return strlen($string) >= 2;
    }

}