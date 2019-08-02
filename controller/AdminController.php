<?php
class AdminController
{
    public function admin()
    {
        if (!isset($_SESSION['auth'])) {
            $_SESSION['access_denied'] = 'You need to be login to access in the admin area';
            header('location: /module3-php/login');
        }
        require "../view/admin.php";
    }
}