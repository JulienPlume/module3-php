<?php
class AddArticleController
{
    public function AddArticle(){
        if (!isset($_SESSION['auth'])) {
            $_SESSION['access_denied'] = 'You need to be login to access in the admin area';
            header('location: /module3-php/login');
        } 
        
        // get
       if (isset($_POST['submit'])) {
            $to_check = [
                'title',
                'subtitle',
                'category',
                'seo',
                'content',
            ];
            $c = 0;

            foreach ($to_check as $item) {
                if(!Validator::notEmpty($_POST[$item])) {
                    $c++;
                }
            }
            if ($c == 0) {
                $slugify = new Slugify();
                $slug = $slugify->slug($_POST['title']);

                $manager = new ArticleManager();
                $manager->add($slug);
                
            header('location: /module3-php/');
            }
        }
        // require("../view/addArticle.php");
                $view = new View();
        $view->generateView('addArticle.php', [
            // 'comment_id' => $comment_id,
            // 'comments_to_moderate' => $comments_to_moderate
        ]);
    }
}