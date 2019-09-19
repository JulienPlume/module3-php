<?php
class AdminController
{
    public function admin()
    {
        if (!isset($_SESSION['auth'])) {
            $_SESSION['access_denied'] = 'You need to be login to access in the admin area';
            header('location: /module3-php/login');
        }
        
        $comment_manager = new CommentManager();
        
        if (isset($_POST['approve'])) {
            $comment_manager->approveComment($_POST['comment_id']);
        }
        if (isset($_POST['delete'])) {
            $comment_manager->hiddenComment($_POST['comment_id']);
        }
        $comments_to_moderate = $comment_manager->getSignaledComments();

        // require "../view/admin.php";
                $view = new View();
        $view->generateView('admin.php', [
            // 'comment_id' => $comment_id,
            'comments_to_moderate' => $comments_to_moderate
        ]);
    }
}