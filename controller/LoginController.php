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
                    // session_start ();
                    $_SESSION['auth'] = $user;
                    header('location: http://localhost:8888/project3/admin');
                } else echo "password not ok";
            }
        }
require("../view/login.php");
    }
    
}