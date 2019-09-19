<?php
class ArticleManager extends Manager
{
    public function add($slug)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("INSERT INTO 
            article SET 
            date = NOW(), 
            title = ?, 
            subtitle = ?,
            category = ?,
            seo = ?,
            content = ?,
            slug = ?
        
        ");
        $stmt->execute([$_POST['title'], $_POST['subtitle'], $_POST['category'], $_POST['seo'], $_POST['content'], $slug]);
    }
    public function getAll()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM article");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function delete()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("DELETE FROM article WHERE id = ?");
        $stmt->execute([$_POST['article_id'], ]);
    }
    public function edit($slug)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("UPDATE 
            article SET 
            date = NOW(), 
            title = ?,
            subtitle = ?,
            category = ?,
            seo = ?,
            content = ?,
            slug = ?
            
            WHERE id = ?
            
            ");
        $stmt->execute([$_POST['title'], $_POST['subtitle'], $_POST['category'], $_POST['seo'], $_POST['content'], $slug, $_POST['article_id'], ]);
    }

    public function getArticleWithIDandSlug($article_id, $slug)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM article WHERE id = ? AND slug = ?");
        $stmt->execute([$article_id, $slug, ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getArticleWithID($article_id)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->prepare("SELECT * FROM article WHERE id = ?");
        $stmt->execute([$article_id, ]);
        $stmt = $pdo->query("SELECT * FROM article WHERE id = '" . $article_id . "'");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

