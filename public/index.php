<?php


require "../manager/Manager.php";
require "../manager/ArticleManager.php";
require "../manager/CommentManager.php";
require "../manager/UserManager.php";
require "../services/Slugify.php";

    session_start();

if ($_SERVER['REQUEST_URI'] == '/module3-php/') {
    require_once("../controller/ListArticlesController.php");
    $controller = new ListArticlesController();
    $controller->listArticles();
    
} else if ($_SERVER['REQUEST_URI'] == '/module3-php/delete') {
    require_once("../controller/DeleteArticleController.php");
    $controller = new DeleteArticleController();
    $controller->delete();
    
} else if ($_SERVER['REQUEST_URI'] == '/module3-php/flag') {
    require_once("../controller/FlagCommentController.php");
    $controller = new FlagCommentController();
    $controller->flag();

} else if (preg_match('#/module3-php/article/([a-z-]+)/([0-9]+)$#', $_SERVER['REQUEST_URI'], $matches)) {
    require_once("../controller/ViewArticleController.php");
    $controller = new ViewArticleController();
    $controller->view($matches);


    //ADMIN
} else if ($_SERVER['REQUEST_URI'] == '/module3-php/login') {
    require_once("../controller/LoginController.php");
    $controller = new LoginController();
    $controller->login();

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/admin') {
    require_once("../controller/AdminController.php");
    $controller = new AdminController();
    $controller->admin();

//////////////WIP//////////////////
    } else if ($_SERVER['REQUEST_URI'] == '/module3-php/admin/manage-comment') {
    require_once("../controller/ListFlagCommentController.php");
    $controller = new ListFlagCommentController();
    $controller->getFlagged();
 //////////////WIP//////////////////
   
} else if ($_SERVER['REQUEST_URI'] == '/module3-php/add') {
    require_once("../controller/AddArticleController.php");
    $controller = new AddArticleController();
    $controller->AddArticle();
    
} else if (preg_match('#/module3-php/edit/article/([0-9]+)$#', $_SERVER['REQUEST_URI'], $matches)) {
    require_once("../controller/EditArticleController.php");
    $controller = new EditArticleController();
    $controller->edit($matches);

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/logout') {
    require_once("../controller/LogoutController.php");
    $controller = new LogoutController();
    $controller->logout();
    



} else {
    echo "test";
    header('location: /module3-php/');
}



