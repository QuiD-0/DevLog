<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>quidlog/update</title>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="/css/dashboard.css">
  </head>
  <body>
<?php include('../php/ud.php'); ?>
    <div class="center">
      <!--수정할 글 수정 부분-->
      <form action="/php/updateprocess.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['page'];?>">
        <!--수정하기전 글 제목-->
        <input type="text" class="title" name="title" value="<?=title()?>">
        <!--CKEDITOR에 수정 하기전 본문 불러오기-->
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
