<?php
class LogoutController
{
    public function logout()
    {
        session_unset();
        session_destroy();
        header('location: /module3-php/');

    }
}

