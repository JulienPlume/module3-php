<?php


require "../manager/Manager.php";
require "../manager/ArticleManager.php";


if ($_SERVER['REQUEST_URI'] == '/module3-php/') {
    require_once("../controller/ListArticlesController.php");
    $controller = new ListArticlesController();
    $controller->listArticles();
} else if ($_SERVER['REQUEST_URI'] == '/module3-php/add') {
    require_once("../controller/AddArticleController.php");
    $controller = new AddArticleController();
    $controller->AddArticle();

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/delete') {
    require_once("controller/DeleteController.php");
    $controller = new DeleteController();
    $controller->pageTest();

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/edit') {
    require_once("controller/EditController.php");
    $controller = new EditController();
    $controller->editorPage();

} else if ($_SERVER['REQUEST_URI'] == '/module3-php/updated') {
    require_once("controller/UpdatedController.php");
    $controller = new UpdatedController();
    $controller->pageTest();
}
else {
    echo "test";
}



