<!DOCTYPE html>
<head>
   <meta name="description" content="<?=$article['subtitle']?> - <?=$article['category']?>">
   <title>Jean Forteroche - <?=$article['title']?></title>
</head>
<body>
   <h1>Selected Article</h1>
   <div class="article">
      <h2 class="text-primary">
         <?=$article['title']?>
      </h2>
      <h3 class="text-secondary">
         <?=$article['subtitle']?>
      </h3>
      <h4 class="articleDate">
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
   <div class="commentSection">
      <?php
         if(isset($message_signaled_comment)): ?>
      <div style="background: forestgreen;">
         <?= $message_signaled_comment ?>
      </div>
      <?php endif; ?>
      <?php foreach ($comments as $comment): ?>
      <div class="text-muted">
         <strong class="text-primary"><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['date'] ?>
      </div>
      <div>
         <?= htmlspecialchars($comment['content']) ?>
      </div>
      <div>
         <form method="post">
            <input type="hidden" name="comment_id" value="<?= $comment['id'] ?>">
            <?php if(!$comment['approved']): ?>
            <input type="submit" value="signal" name="signal_comment" class="btn btn-sm btn-outline-danger" style="outline:o;">
            <?php endif; ?>
         </form>
      </div>
      <hr>
      <?php endforeach; ?>
      <div class="card">
         <div class="card-header">add a comment!</div>
         <div class="card-body">
            <form method="post">
               <input type="text" name ="author" value="" placeholder="nickname">
               <input type="hidden" name ="article_id" value="<?= $article['id']?>">
               <textarea name="comment" id="" cols="10" rows="1" class="form-control" placeholder="content"></textarea>
               <input type="submit" class="btn btn-outline-info" name="submit_comment" value="Add a comment">
            </form>
         </div>
      </div>
   </div></div>
</body>
<style>
   .articleDate{
   font-size: smaller;
   opacity:0.4;
   color: yellow
   }
   p{
   background-color: initial !important
   }
   .commentSection{
   width:50% !important;
   margin: 0 auto;
   }
   .card{
   margin-bottom: 68px;
   }
</style>