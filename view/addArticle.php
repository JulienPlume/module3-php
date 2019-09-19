<!DOCTYPE html>
    <head>
        <title>add a new article</title>
  <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
  <script>
  tinymce.init({
    selector: '#editor'
  });
  </script>      
    </head>
    <body>
        <div class="content">

            <h1 class="title">Take a breathe, a cup of coffe ☕ and let yourself be inspired</h1>
            <form method="post">
                <div>
                    <input class="form-control" type="text" name="title" placeholder="the title">
                </div>
                <div>
                    <input class="form-control" type="text" name="subtitle" placeholder="subtitle">
                </div>
                <div>
                    <textarea class="form-control" id="editor" name="content" id="" cols="30" rows="20"></textarea>
                </div>
                <div>
                <input class="form-control"type="text" name="category" placeholder="category">
            </div>
            <div>
                <input class="form-control" type="text" name="seo" placeholder="referencement">
            </div>
            <input class="btn btn-outline-success submitBtn" type="submit" name="submit">
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