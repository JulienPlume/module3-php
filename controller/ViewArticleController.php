<?php
class ViewArticleController
{
    public function view($matches)
    {
        $manager = new ArticleManager();
        $comment_manager = new CommentManager();
        if (isset($_POST['submit_comment'])) {
            $comment_manager->add();
        }
        $article = $manager->getArticleWithIDandSlug($matches[2], $matches[1]);
        if ($article == false) {
            exit('Article does not exist');
        } else {
            $comments = $comment_manager->getAll($matches[2]);
            require("../view/viewArticle.php");
        }
    }
}