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
            <hr>
<?php endforeach; ?>
    </body>