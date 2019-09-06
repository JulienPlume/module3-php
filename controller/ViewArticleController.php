<?php
class ViewArticleController
{
    public function view($matches)
    {
        $manager = new ArticleManager();
        $comment_manager = new CommentManager();
        if (isset($_POST['submit_comment'])) {
            $to_check = [
                'author',
                'comment',
            ];
            $c = 0;
            $validator = new Validator();
            foreach ($to_check as $item) {
                if(!$validator->notEmpty($_POST[$item])) {
                    $c++;
                }
            }
            if ($c == 0) {
                if ($validator->minimum2($_POST['author'])) {
                    $comment_manager->add();
                }
            }
        }
        if (isset($_POST['signal_comment'])) {
            $comment_manager->signalComment($_POST['comment_id']);
            $message_signaled_comment =  "The comment has been signaled";
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