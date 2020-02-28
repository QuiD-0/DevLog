<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>quidlog/update</title>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="/css/dashboard.css">
  </head>
  <body>
<?php include('ud.php'); ?>
    <div class="center">
      <form action="/php/updateprocess.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['page'];?>">
        <input type="text" class="title" name="title" value="<?=title()?>">
        <textarea name="description"><?=description();?></textarea>
        <script>
          CKEDITOR.replace('description', {
            width: '1000px',
            height: '500px'
          });
        </script>
        <input type="submit" class="submit" value="수정하기">
      </form>

    </div>
  </body>
</html>
