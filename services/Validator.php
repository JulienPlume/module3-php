<?php
    class Validator
    {
        public function notEmpty($string)
        {
            return !empty(trim($string)) && !empty(trim($string));
        }

        public function minimum2($string)
        {
         return strlen($string) >= 3;
        }
    }