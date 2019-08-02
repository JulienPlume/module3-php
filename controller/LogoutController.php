<?php

class LogoutController
{
    public function logout()
    {
        session_destroy();
        header('location: /module3-php/');

    }
}