<!DOCTYPE html>
    <head>
        <title>HOME PHP-MODULE3</title>
    </head>
    <body>
    <a href="http://localhost:8888/module3-php/admin">admin interface</a>
    <a href="http://localhost:8888/module3-php/login">login interface</a>
        <h1>homepage</h1>

        <?php foreach ($articles as $article): ?>
            <h2><a href="http://localhost:8888/module3-php/article/<?= $article['slug'] ?>/<?= $article['id'] ?>"><?= $article['title'] ?></a></h2>
            <div><?= $article['subtitle'] ?></div>
            <?php if (isset($_SESSION['auth'])) : ?>
                <form method="post" action="http://localhost:8888/module3-php/delete">
                    <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
                    <input type="submit" value="Delete">
                </form>
                <a href="http://localhost:8888/module3-php/edit/article/<?= $article['id'] ?>">Edit</a>
            <?php endif; ?>
        <?php endforeach; ?>
    </body>
</html>