<?php


require "../manager/Manager.php";
require "../manager/ArticleManager.php";
require "../manager/CommentManager.php";
require "../manager/UserManager.php";

    session_start();

if ($_SERVER['REQUEST_URI'] == '/module3-php/') {
    require_once("../controller/ListArticlesController.php");
    $controller = new ListArticlesController();
    $controller->listArticles();
} else if ($_SERVER['REQUEST_URI'] == '/module3-php/add') {
    require_once("../controller/AddArticleController.php");
    $controller = new AddArticleController();
    $controller->AddArticle();

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/delete') {
    require_once("../controller/DeleteArticleController.php");
    $controller = new DeleteArticleController();
    $controller->delete();

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/edit') {
    require_once("../controller/EditArticleController.php");
    $controller = new EditArticleController();
    $controller->edit();

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/view_article') {
    require_once("../controller/ViewArticleController.php");
    $controller = new ViewArticleController();
    $controller->view();

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/login') {
    require_once("../controller/LoginController.php");
    $controller = new LoginController();
    $controller->login();

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/admin') {
    require_once("../controller/AdminController.php");
    $controller = new AdminController();
    $controller->admin();

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/logout') {
    require_once("../controller/LogoutController.php");
    $controller = new LogoutController();
    $controller->logout();

} else {
    echo "test";
    header('location: /module3-php/');
}



