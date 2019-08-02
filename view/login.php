<!DOCTYPE html>
    <head>
        <title>Auth page</title>
    </head>
    <body>
        <h1>Identification</h1>


        <?php if (isset($_SESSION['access_denied'])): ?>
            <div style="color: red;">
                <?= $_SESSION['access_denied'] ?>
                <?php unset($_SESSION['access_denied']); ?>
            </div>
        <?php endif; ?>
        
        <form method="post">
            <input type="text" name="username" placeholder="username">
            <input type="text" name="password" placeholder="password">
        <input type="submit" name="submit" value="login">
        </form>
    </body>