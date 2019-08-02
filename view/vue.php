<!DOCTYPE html>
<html>
<head>
<title>BACKEND PAGE</title>
</head>
<body>
<h1>WEBSITE TITLE</h1>
<ul>
<li>menu</li>
</ul>
<h2>last article</h2>
<? php
<div>
</div>


<div>
<h2>Voici la liste des articles</h2>
<table>
<tr class="tableTitle">
    <th>id</th>
    <th>date</th>
    <th>Title</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php 

foreach($posts as $key => $post) : ?>
<tr>
    <td class="postId">
        <?= $post->getId() ?>
    </td>
    <td class="postDate">
        <?= $post->getDate() ?>
    </td>
    <td class="preview">
        <div>
            <div class="postTitle">
                <?= $post->getTitle() ?>
            </div>
            <div class="postSubtitle">
                <?= $post->getSubtitle() ?>
            </div>
            <div class="postContent">
                <?= $post->getContent() ?>
            </div>
            <div class="postCategory">
                category: <?= $post->getCategory() ?>
            </div>
        </div>
    </td>
<td>
    <form method="post" action="/project3/edit" class="edit_form">
   	<input type="hidden" name="id" value="<?= $post->getId()?>"/>
   	<input type="hidden" name="title" value="<?= $post->getTitle()?>"/>
   	<input type="hidden" name="subtitle" value="<?= $post->getSubtitle()?>"/>
   	<input type="hidden" name="content" value="<?= $post->getContent()?>"/>
   	<input type="hidden" name="category" value="<?= $post->getCategory()?>"/>
   	<input type="submit" name="valider" class="" value="Edit" />
    </form>
</td>
<td>
    <form method="post" action="/project3/delete" class="delete_form">
   	<input type="hidden" name="id" value="<?= $post->getId()?>"/>
   	<input type="submit" name="valider" class="" value="delete" />
    </form>
</td>
</tr>

<?php endforeach; ?>
</table>

</div>
</body>
</html>
<style>
body{
    /* background-color: #FBFee2; */
    /* color: #1C5D99 */
    color: #364652
}
body, td, p{
    margin: 0;
    padding: 0;
}
table {
  border-collapse: collapse;
  width: 90%;
  max-width: 90%;
  margin: 2em auto;
}

th {
  /* border-left: 1px solid #49C6E5; */
  padding: 1em 0.5em;
  background: #364652;
  /* background: #364652; */
  color: #ffffff;

}
th:first-of-type {
  border: none;
  border-top-left-radius: 5px;
}
th:last-of-type {
  border-top-right-radius: 5px;
}

td {
  background: #FFFFFF;
  padding: 0.5em;
  text-align: center;
}
tr:nth-of-type(even) td {
  background: #FAE8EB;
}

tr:last-of-type td:first-of-type {
  border: none;
  border-bottom-left-radius: 10PX;
}
tr:last-of-type td:last-of-type {
  border-bottom-right-radius: 10PX;
}
.tableTitle{
    color: white;
    border-top-right-radius: 15px;
}
.postId{

}
.postTitle{
    font-weight: bold;
    font-size:2em;
}
.postSubtitle{
    font-style: italic;
    font-size:1.5em;
}
.postContent{
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 1.3em;
    /* max-height: 10vh; */
    overflow: hidden;
    height: 75px;
}
.preview{
    max-width:50vw;
    height: 10px;
}

</style>