<?php
class ViewArticleController
{
    public function view()
    {
        $manager = new ArticleManager();
        $comment_manager = new CommentManager();
        if (isset($_POST['submit_comment'])) {
            $comment_manager->add();
        }
        $article = $manager->getArticleWithID($_GET['article_id']);
        if ($article == false) {
            exit('Article does not exist');
        } else {
            $comments = $comment_manager->getAll();
            require("../view/viewArticle.php");
        }
    }
}