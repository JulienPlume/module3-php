<!DOCTYPE html>
<head>
   <title>EDIT - <?=$article['title']?></title>
   <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
   <script>
      tinymce.init({
        selector: '#editor'
      });
   </script>      
</head>
<body>
   <div class="content">
      <h1 class="title">Human was built for evolve.. This article too <br> 🦖☄️</h1>
      <form method="post">
         <div>
         ,<input type="hidden" name="article_id" value="<?=$article['id']?>">
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
         <input class="btn btn-outline-success submitBtn" type="submit" name="save_button" value="UPDATE">
      </form>
   </div>
</body>
<style>
   .title{
   text-align: center;
   }
   .content{
   position: absolute;
   top: 50%; left: 50%;
   transform: translate(-50%, -50%);
   }
   .submitBtn{
   width: 100%;
   }
</style>