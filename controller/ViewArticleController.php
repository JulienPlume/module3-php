<?php
class ViewArticleController
{
    public function view()
    {

        $manager = new ArticleManager();
        $comment_manager = new CommentManager();
        $article = $manager->getArticleWithID($_POST['article_id']);
        if (isset($_POST['submit_comment'])) {
            $comment_manager->add();
        }
        $comments = $comment_manager->getAll();
        require("../view/viewArticle.php");
    }
}