<?php
class EditArticleController
{
    public function edit()
    {
        $manager = new ArticleManager();
        $article = $manager->getArticleWithId($_POST['article_id']);

        // var_dump($article);
        // die;

        if (isset($_POST['save_button'])) {

            $manager->edit();

            header('location: /module3-php/');
        }


        require("../view/editArticle.php");
        // header('location: /module3-php/');
    }
}