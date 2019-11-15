   <h1>Identification</h1>
   <?php if (isset($_SESSION['access_denied'])): ?>
   <div style="color: red;">
      <?= $_SESSION['access_denied'] ?>
      <?php unset($_SESSION['access_denied']); ?>
   </div>
   <?php endif; ?>
   <div class="popup">
      <form method="post">
         <input type="text" class="form-control" name="username" placeholder="username">
         <input type="password" class="form-control" name="password" placeholder="password">
         <input type="submit" class="btn btn-primary button" name="submit" value="login">
      </form>
   </div>