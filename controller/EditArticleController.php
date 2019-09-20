<?php
class EditArticleController
{
    public function edit($matches)
    {
        $manager = new ArticleManager();
        $article = $manager->getArticleWithID($matches[1]);

        // var_dump($article);
        // die;
        if (isset($_POST['save_button']))
        {

            $slugify = new Slugify();
            $slug = $slugify->slug($_POST['title']);
            $manager->edit($slug);

            header('location: /module3-php/');
        }

                $view = new View();
        $view->generateView('editArticle.php', ['article' => $article, ]);
        // header('location: /module3-php/');
        
    }
}

