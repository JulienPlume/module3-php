<!DOCTYPE html>
    <head>
        <title>List articles</title>
    </head>
    <body>
    <a href="http://localhost:8888/module3-php/admin">admin interface</a>
    <a href="http://localhost:8888/module3-php/login">login interface</a>
        <h1>listing des articles</h1>

        <?php foreach ($articles as $article): ?>
            <h2><a href="http://localhost:8888/module3-php/article/<?= $article['slug'] ?>/<?= $article['id'] ?>"><?= $article['title'] ?></a></h2>
            <div><?= $article['subtitle'] ?></div>
            <form method="post" action="http://localhost:8888/module3-php/delete">
                <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                <input type="submit" value="Delete">
            </form>
            <form method="post" action="http://localhost:8888/module3-php/edit">
                <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                <input type="submit" value="Edit">
            </form>
        <?php endforeach; ?>
    </body>
</html>