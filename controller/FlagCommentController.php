<?php
class FlagCommentController
{
    public function flag()
    {
        $manager = new CommentManager();
        $manager->flag();

        header('location: /module3-php/');
    }

    public function getFlagged()
    {
        $manager = new CommentManager();
        $manager->getFlagged();

        // header('location: /module3-php/');
        
    }
}

