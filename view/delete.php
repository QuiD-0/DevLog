<!DOCTYPE html>
<!--삭제 확인 페이지-->
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>quidlog/delete</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/layout.css">
  </head>
  <body>
    <?php include('/php/ud.php'); ?>
<form class="delete" action="/php/deleteprocess.php" method="post">
  <input type="hidden" name="id" value="<?=$_GET['page'];?>">
<p>
  <!--삭제할 본문 출력-->
  <?=delete_print_all();?>
</p>
<div class="deletebtn">
  <!--삭제 입력후 삭제가 완료됨 (잘못 눌러서 삭제되는 상황 방지)-->
<input type="text" name="Dkey" placeholder="삭제 입력">
<button type="submit">삭제하기</button><div>
</form>
  </body>
</html>
