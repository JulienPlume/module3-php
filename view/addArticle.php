<!DOCTYPE html>
    <head>
        <title>add new article</title>
  <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
  <script>
  tinymce.init({
    selector: '#editor'
  });
  </script>      
    </head>
    <body>
        <h1>titre de la page</h1>
        <form method="post">
            <div>
                <input type="text" name="title" placeholder="the title">
            </div>
            <div>
                <input type="text" name="subtitle" placeholder="subtitle">
            </div>
            <div>
                <textarea id="editor" name="content" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="text" name="category" placeholder="category">
            </div>
                        <div>
                <input type="text" name="seo" placeholder="referencement">
            </div>
            <input type="submit" name="submit">
        </form>
    </body>