<?php
    class Validator
    {
        public function notEmpty($string)
        {
            return !empty(trim($string)) && !empty(trim($string));
        }
    }