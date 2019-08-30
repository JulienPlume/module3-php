<?php
class ListFlagCommentController
{


     public function getFlagged()
    {
     $comment_manager = new CommentManager();
    $comments = $comment_manager->getFlagged();
        require("../view/adminListFlaggedComment.php");
    }
}