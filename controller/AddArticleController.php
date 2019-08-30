<?php
class AddArticleController
{
    public function AddArticle(){

        // get
        if (isset($_POST['submit'])) {

            $slugify = new Slugify();
            $slug = $slugify->slug($_POST['title']);

            $manager = new ArticleManager();
            $manager->add($slug);

            header('location: /module3-php/');

        }
        require("../view/addArticle.php");
    }
}