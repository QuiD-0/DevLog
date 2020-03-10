<h2>홈🏡</h2>
<?php include('../php/print.php') ?>
<div class="left">
  <div class="summary">
    <h3>QUID의 블로그일지</h4><br>
    <div class="view">
      <h4>총 게시글 수 : <?= numarticle();?></h4>
      <h4>최근 글쓴 날짜 : <?= datearticle();?></h4>

    </div>
  </div>
</div>
<div class="right">
      <?php
          include('../php/connect.php');
          $sql = "SELECT * FROM article order by article_id desc";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
              echo "<div class=\"topic\">
              {$row['title']}</div>
              <div class=\"description\">{$row['description']}</div>";
              echo "<div class=\"line\"></div>";
          }
         ?>
</div>
