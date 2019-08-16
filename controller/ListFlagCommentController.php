<?php
class FlagCommentController
{


     public function getFlagged()
    {
     $comment_manager = new CommentManager();
    $comments = $comment_manager->getFlagged();
        require("../view/adminListFlaggedComment.php");
    }
}