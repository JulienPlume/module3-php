<?php
class AddArticleController
{
    public function AddArticle(){

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
            $validator = new Validator();
            foreach ($to_check as $item) {
                if(!$validator->notEmpty($_POST[$item])) {
                    $c++;
                }
            }
            if ($c == 0) {
                $slugify = new Slugify();
                $slug    = $slugify->slug($_POST['title']);

            $manager = new ArticleManager();
            $manager->add($slug);

            header('location: /module3-php/');
            }
        }
        require("../view/addArticle.php");
    }
}