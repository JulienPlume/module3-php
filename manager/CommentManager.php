<?php
class CommentManager extends Manager
{
    public function add()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("INSERT INTO 
            comment SET 
            date = NOW(), 
            id_post = ?, 
            author = ?,
            content = ?
            ");
        $stmt->execute([$_POST['article_id'], $_POST['author'], $_POST['comment']]);
    }
    public function getAll($article_id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM comment WHERE id_post = ?");
        $stmt->execute([$article_id, ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getNoHidden($article_id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM comment WHERE id_post = ?, hiddden < 1 ");
        $stmt->execute([$article_id, ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function signalComment($comment_id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("UPDATE comment SET signaled = 1 WHERE id = ?");
        $stmt->execute([$comment_id, ]);
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
        $stmt = $pdo->prepare("UPDATE comment SET approved = 1, signaled = 0 WHERE id = ?");
        $stmt->execute([$comment_id, ]);
    }
    public function hiddenComment($comment_id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("UPDATE comment SET hiddden = 1, signaled = 0, id_post = 0 WHERE id = ?");
        $stmt->execute([$comment_id, ]);
    }
}

