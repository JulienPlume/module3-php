<!DOCTYPE html>
    <head>
        <title>List articles</title>
    </head>
    <body>
        <h1>Voici l'article selectionné</h1>

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

            <?php
            if(isset($message_signaled_comment)): ?>
                <div style="background: forestgreen;">
                    <?= $message_signaled_comment ?>
                </div>
            <?php endif; ?>

            <?php foreach ($comments as $comment): ?>
                <div>
                    <strong><?= $comment['author'] ?></strong> le <?= $comment['date'] ?>

                <form method="post" action="http://localhost:8888/module3-php/flag">
                    <input type="hidden" name="comment_id" value="<?= $comment['id'] ?>">
                    <input type="submit" value="flag">
            
            </form>
                </div>
                <div>
                    <?= htmlspecialchars($comment['content']) ?>
                </div>
                <div>
                    <form method="post">
                        <input type="hidden" name="comment_id" value="<?= $comment['id'] ?>">
                        <?php if(!$comment['approved']): ?>
                        <input type="submit" value="Signal" name="signal_comment">
                        <?php endif; ?>
                    </form>
                </div>
                <hr>
            <?php endforeach; ?>


            <h2>add a comment!</h2>
                <form method="post">
                    <input type="text" name ="author" value="">
                    <input type="hidden" name ="article_id" value="<?= $article['id']?>">
                    <h3>comment : </h3>
                    <textarea name="comment" id="" cols="30" rows="10" class=""></textarea>
                    <input type="submit" name="submit_comment" value="Add a comment">
            
                </form>
    </body>