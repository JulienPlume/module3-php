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
            <input type="hidden" name="article_id" value="<?=$article['id']?>">
                <input type="text" name="title" placeholder="the title" value="<?=$article['title']?>">
            </div>
            <div>
                <input type="text" name="subtitle" placeholder="subtitle" value="<?=$article['subtitle']?>">
            </div>
            <div>
                <textarea name="content" id="editor"   cols="30" rows="10" ><?=$article['content']?></textarea>
            </div>
                        <div>
                <input type="text" name="category" placeholder="category" value="<?=$article['category']?>">
            </div>
                        <div>
                <input type="text" name="seo" placeholder="referencement"  value="<?=$article['seo']?>">
            </div>
            <input type="submit" name="save_button">
        </form>
    </body>