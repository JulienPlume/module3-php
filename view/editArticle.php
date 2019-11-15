<div class="contentArticle">
   <h1 class="titleEditArticle">Human have been made to evolve.. This article too <br>🦖☄️</h1>
   <form method="post">
      <div>
      <input type="hidden" name="article_id" value="<?=$article['id']?>">
         <input class="form-control" type="text" name="title" value="<?=$article['title']?>" placeholder="the title">
      </div>
      <div>
         <input class="form-control" type="text" name="subtitle" value="<?=$article['subtitle']?>" placeholder="subtitle">
      </div>
      <div>
         <textarea class="form-control" id="editor" name="content" id="" cols="30" rows="20"><?=$article['content']?></textarea>
      </div>
      <div>
         <input class="form-control"type="text" name="category" value="<?=$article['category']?>" placeholder="category">
      </div>
      <div>
         <input class="form-control" type="text" name="seo" placeholder="referencement"  value="<?=$article['seo']?>">
      </div>
      <input class="btn btn-outline-success submitBtn submitBtnArticle" type="submit" name="save_button" value="UPDATE">
   </form>
</div>
