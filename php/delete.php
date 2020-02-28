<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>quidlog/delete</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/layout.css">
  </head>
  <body>
    <?php include('ud.php'); ?>
<form class="delete" action="/php/deleteprocess.php" method="post">
  <input type="hidden" name="id" value="<?=$_GET['page'];?>">
<p>
  <?=print_all();?>
</p>
<div class="deletebtn">
<input type="text" name="Dkey" placeholder="삭제 입력">
<button type="submit">삭제하기</button><div>
</form>
  </body>
</html>
