<!DOCTYPE html>
    <head>
        <title>List articles</title>
    </head>
    <body>
        <h1>Voici l'article selectionné</h1>
<div class="article">
            <h2>
                <?=$article['title']?>
            </h2>
            <h3>
            subtitle
                <?=$article['subtitle']?>
            </h3>
            <h4>

                <?=$article['date']?>
            </h4>
            <h4>
                <?=$article['content']?>
            </h4>
            <h5>
                post in category <?=$article['category']?>
            </h5>
            <h5>
            keyword(s): <?=$article['seo']?>
            </h5>
            </div>
            <hr>
<div class="comments">
            <?php
            if(isset($message_signaled_comment)): ?>
                <div style="background: forestgreen;">
                    <?= $message_signaled_comment ?>
                </div>
            <?php endif; ?>

            <?php foreach ($comments as $comment): ?>
                <div>
                    <strong><?= $comment['author'] ?></strong> le <?= $comment['date'] ?>
          
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
            </div>
    </body>