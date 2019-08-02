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
    public function getAll()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM comment WHERE id_post = '".$_POST['article_id']."'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}