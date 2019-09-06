<!DOCTYPE html>
    <head>
        <title>admin interface</title>
    </head>
    <body>
    <h1>
        hello admin !
    </h1>
    <a href="http://localhost:8888/module3-php/add">New article</a>
    <a href="http://localhost:8888/module3-php/manageComment">Manage comments</a>
    <a href="http://localhost:8888/module3-php/logout">Logout</a>
    <hr>
    <h2>Comments to moderate</h2>

        <table>
            <tr>
                <th>Date</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($comments_to_moderate as $comment): ?>
            <tr>
                <td><?= $comment['date'] ?></td>
                <td><?= $comment['content'] ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" value="<?= $comment['id'] ?>" name="comment_id">
                        <input type="submit" name="delete" value="Delete">
                        <input type="submit" name="approve" value="Approve">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>