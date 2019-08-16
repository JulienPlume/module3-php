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
    public function flag()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query( "UPDATE
                comment
            SET
                flag = 1
        WHERE       
            id = '".$_POST['comment_id']."'
        ");
    }

    public function getFlagged()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM comment WHERE flag=1");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
