<!DOCTYPE html>
    <head>
        <title>List articles</title>
    </head>
    <body>
        <h1>listing des articles</h1>

        <?php foreach($articles as $article): ?>
            <h2>
            title
                <?=$article['title']?>
            </h2>
            <h2>
            subtitle
                <?=$article['subtitle']?>
            </h2>
            <h2>
            content
                <?=$article['content']?>
            </h2>
            <h2>
            cat
                <?=$article['category']?>
            </h2>
            <h2>
            seo
                <?=$article['seo']?>
            </h2>
            <form method="post" action="http://localhost:8888/module3-php/delete">
                <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                <input type="submit" value="delete">
            </form>
            <form method="post" action="http://localhost:8888/module3-php/edit">
                <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                <input type="submit" value="EDIT">
            </form>
            <form method="post" action="http://localhost:8888/module3-php/view_article">
                <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                <input type="submit" value="VIEW"> 
            </form>
            <hr>
<?php endforeach; ?>
    </body>