<?php
class Error404Controller
{
    public function error()
    {
        // require "../view/admin.php";
        $view = new View();
        $view->generateView('error404.php', [
]);
    }
}