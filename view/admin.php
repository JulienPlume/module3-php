<!DOCTYPE html>
<head>
   <title>admin interface</title>
</head>
<body>
   <h1>
      hello admin !
   </h1>
   <hr>
   <h2 class="text-primary">Comments to moderate</h2>
   <div class="moderateSection">
      <table class="table table-hover">
         <tr class="text-info table-dark">
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
                  <input type="submit" class="btn btn-outline-danger" name="delete" value="Delete">
                  <!--<input type="submit" name="approve" value="Approve">-->
                  <input type="submit"class="btn btn-outline-success" name="approve" value="Approve">
               </form>
            </td>
         </tr>
         <?php endforeach; ?>
         <tr class="table-dark"><td colspan="3">&nbsp;</td></tr>
      </table>
   </div>
</body>
<style>
   .moderateSection{
   width:50%;
   margin : 0 auto;
   }
   .btn{width:100%;}
</style>