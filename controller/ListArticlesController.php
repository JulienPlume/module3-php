<?php
class ListArticlesController
{
    public function listArticles()
    {
        $manager = new ArticleManager();
        $articles = $manager->getAll();
        $view = new View();
        $view->generateView('listArticles.php', ['articles' => $articles, ]);
        #require("../view/listArticles.php");
        
    }
}

