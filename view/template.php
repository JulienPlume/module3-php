<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
      <link rel="stylesheet" href="https://bootswatch.com/4/superhero/_variables.scss">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand" href="/">Jean Forteroche 's blog</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
               <?php if (isset($_SESSION['auth'])) : ?>
               <li class="nav-item active">
                  <a class="nav-link" href="/module3-php/add">New article<span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="/module3-php/admin">Admin interface<span class="sr-only">(current)</span></a>
               </li>
               <?php endif; ?>
               <!--            <li class="nav-item">
                  <a class="nav-link" href="/">Features</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/">About</a>
                  </li>
                  -->           
            </ul>
            <?php if (!isset($_SESSION['auth'])) : ?>
            <a class="nav-link" href="/module3-php/login">🔓</a><span class="sr-only">(current)</span></a>
            <?php endif; ?>
            <?php if (isset($_SESSION['auth'])) : ?>
            <a class="nav-link" href="/module3-php/logout">Logout 🔐</a><span class="sr-only">(current)</span></a>
            <?php endif; ?>
         </div>
      </nav>
      </header>
      <main class="main">
         <?= $content ?>
      </main>
      <footer class="bg-dark">
         Blog Footer
      </footer>
   </body>
</html>
<style>
   body{
   /* width: 100%; */
   /* max-height: 100vh; */
   }
   footer{
   width: 100%;
   height: 48px;
   background-color: secondary;
   position: fixed;
   bottom: 0;
   }
   .main{
   width: 90%;
   margin: 0 auto;
   margin-top: 48px;
      margin-bottom: 48px;
   }
</style>