<?php

class LoginController
{
    public function login()
    {

       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // ici du POST
            $manager = new UserManager();
            $user = $manager->getUser();
            if (!$user) {
                echo "login error";
            } else {
                if (password_verify($_POST['password'], $user['password'])) {

                    $_SESSION['auth'] = $user;
                    header('location: /module3-php/admin');
                } else echo "password not ok";
            }
        }
require("../view/login.php");
    }
    
}