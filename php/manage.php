<?php
//managepage의 중앙 부분 출력담당

//id가 없을 경우 id=home으로 세팅
if (!isset($_GET['id'])) {
    $_GET['id']="home";
}
//검색
    include('connect.php');
    if (isset($_GET['search'])) {
        $key=$_GET['search'];
        //입력받은 search값으로 DB에서 검색
        $sql = "SELECT * FROM article WHERE description OR title LIKE '%$key%'";
        $result = pg_query($conn, $sql);
        while ($row = pg_fetch_array($result)) {
            echo "<article id=\"{$row['article_id']}\"><div class=\"topic\">
        <a class=\"title\"href=\"managepage.php?id=5&page={$row['article_id']}\">{$row['title']}</a></div>
        <div class=\"description\">{$row['description']}</div>
        </article>";
        };
    }

//글 클릭시
    include('connect.php');
    if (isset($_GET['page'])) {
        $id=$_GET['page'];
        $sql = "SELECT * FROM article WHERE article_id={$id}";
        $result = pg_query($conn, $sql);
        //모든 글 출력
        $row = pg_fetch_array($result);
        echo "<article class=\"focus\">
      <div class=\"topic\">{$row['title']}</div>
      <div class=\"description\">{$row['description']}</div>
      ";
        //수정
        if ($_GET['id']==2) {
            echo "<a href=\"/php/update.php?page={$_GET['page']}\" class=\"update\">update</a></article>";
        }
        //삭제 
        elseif ($_GET['id']==3) {
            echo "<a href=\"/php/delete.php?page={$_GET['page']}\" class=\"delete\">delete</a></article>";
        } 
        //검색을 통해 글을 클릭시 수정, 삭제 고르기
        elseif ($_GET['id']==5) {
            echo "<a href=\"/php/update.php?page={$_GET['page']}\" class=\"update\">update</a><a href=\"/php/delete.php?page={$_GET['page']}\" class=\"delete\">delete</a></article>";
        }
    }
// 수정 삭제
    include('connect.php');
    if (isset($_GET['id'])&&!isset($_GET['page'])) {
        if ($_GET['id']==2||$_GET['id']==3) {
            echo "<h2>글을 선택 해주세요.😊</h2>";
            $sql = "SELECT * FROM article order by article_id desc";
            $result = pg_query($conn, $sql);
            while ($row = pg_fetch_array($result)) {
                echo "<article id=\"{$row['article_id']}\"><div class=\"topic\">
        <a class=\"title\"href=\view\managepage.php?id={$_GET['id']}&page={$row['article_id']}\">{$row['title']}</a></div>
        <div class=\"description\">{$row['description']}</div>
        </article>";
            };
        }
    }
//홈
 if ($_GET['id']=="home"&&!isset($_GET['search'])) {
     include('../view/managehome.php');
 }
//글쓰기
if ($_GET['id']==1) {
    echo file_get_contents('../view/writeform.html');
};
