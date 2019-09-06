<?php
class CommentManager extends Manager
{
    public function add()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("INSERT INTO 
            comment SET 
            date = NOW(), 
            id_post = '".$_POST['article_id']."', 
            author = '".$_POST['author']."',
            content = '".$_POST['comment']."'
            
            ");
    }
    public function getAll($article_id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM comment WHERE id_post = '".$article_id."'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getNoHidden($article_id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM comment WHERE id_post = '".$article_id."' AND hidden = 0");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function signalComment($comment_id)
    {
        $pdo = $this->getPDO();
        $pdo->query("UPDATE comment SET signaled = 1 WHERE id = '".$comment_id."'");
    }
    
    public function getSignaledComments()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM comment WHERE signaled = 1");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function approveComment($comment_id)
    {
        $pdo = $this->getPDO();
        $pdo->query("UPDATE comment SET approved = 1, signaled = 0 WHERE id = '".$comment_id."'");
    }
    
    public function hiddenComment($comment_id)
    {
        $pdo = $this->getPDO();
        $pdo->query("UPDATE comment SET hidden = 1, signaled = 0 WHERE id = '".$comment_id."'");
    }
}