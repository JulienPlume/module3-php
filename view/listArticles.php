<head>
   <title>Jean Forteroche - Billet simple pour l'Alaska</title>
</head>
<body>
   <h1>homepage</h1>
   <div class="listarticles">
      <?php foreach ($articles as $article): ?>
      <div class="center article">
         <h2 class="center"><a href="http://localhost:8888/module3-php/article/<?= $article['slug'] ?>/<?= $article['id'] ?>"><?= $article['title'] ?></a></h2>
         <div><?= $article['subtitle'] ?></div>
         <?php if (isset($_SESSION['auth'])) : ?>
         <div class="flexAdminBtn">
            <form method="post" action="http://localhost:8888/module3-php/delete">
               <input type="hidden" name="article_id" value="<?= $article['id'] ?>">
               <input type="submit" class="btn btn-outline-warning" value="Delete">
            </form>
            <form method="post" action="http://localhost:8888/module3-php/edit/article/<?= $article['id'] ?>">
               <input type="submit" class="btn btn-outline-success" value="Edit">
            </form>
         </div>
         <?php endif; ?>
      </div>
      <?php endforeach; ?>
   </div>
</body>
<style>
   .center{
   /* width: 100%; */
   text-align: center;
   /* opacity: 0.1; */
   }
   .listarticles{
   width: 100%;
   margin: 0 auto;
   /* background-color: blue; */
   }
   .article{
   /* width: 60%; */
   background-color: rgba(255,255,255,.1);
   margin: 10px;
   padding: 20px;
   }
   .flexAdminBtn{
   display: flex;
   justify-content: center;
   }
</style>