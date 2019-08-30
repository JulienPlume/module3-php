<?php
class ArticleManager extends Manager
{
    public function add($slug)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("INSERT INTO 
            article SET 
            date = NOW(), 
            title = '".$_POST['title']."', 
            subtitle = '".$_POST['subtitle']."',
            category = '".$_POST['category']."',
            seo = '".$_POST['seo']."',
            content = '".$_POST['content']."',
            slug = '".$slug."'
            
            ");
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
        $stmt = $pdo->query("DELETE FROM article WHERE id = '".$_POST['article_id']."'");
    }
    public function edit()
    {
        $pdo = $this->getPDO();
        $pdo->query("UPDATE 
            article SET 
            date = NOW(), 
            title = '".$_POST['title']."', 
            subtitle = '".$_POST['subtitle']."',
            category = '".$_POST['category']."',
            seo = '".$_POST['seo']."',
            content = '".$_POST['content']."'
            
            WHERE id = '".$_POST['article_id']."'
            
            ");
    }
    public function getArticleWithIDandSlug($article_id, $slug)
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query("SELECT * FROM article WHERE id = '".$article_id."' AND slug = '".$slug."'");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}