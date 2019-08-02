<?php
class AddArticleController
{
    public function AddArticle(){

        // get
        if (isset($_POST['submit'])) {
            // POST
            $manager = new ArticleManager();
            $manager->add();
            echo "bouton clique";

            header('location: /module3-php/');

        }
        require("../view/addArticle.php");
    }
}