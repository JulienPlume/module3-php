<?php

class ArticleManager extends Manager
{
    public function add()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query( "INSERT INTO
        article SET date = NOW(),
        title = '".$_POST['title']."',
        subtitle = '".$_POST['subtitle']."',
        content = '".$_POST['content']."',
        category = '".$_POST['category']."',
        seo = '".$_POST['seo']."'
        ");
        //$stmt->execute();
        echo $_POST['title'];
        echo $_POST['content'];
    }

    public function getAll()
    {
        $pdo = $this->getPDO();
        $stmt = $pdo->query( "SELECT * FROM article");

        return $stmt->fetchAll();
    }
}