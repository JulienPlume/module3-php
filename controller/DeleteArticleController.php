<?php
class DeleteArticleController
{
    public function delete()
    {
        $manager = new ArticleManager();
        $manager->delete();

        header('location: /module3-php/');
    }
}