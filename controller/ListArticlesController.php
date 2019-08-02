<?php

class ListArticlesController
{
    public function listArticles()
    {
        $manager = new ArticleManager();
        $articles = $manager->getAll();
        require("../view/listArticles.php");
    }
}