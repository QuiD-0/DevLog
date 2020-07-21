<?php
//메인 페이지 중앙에 모든 글 출력
function print_all()
{
    include('connect.php');
    $sql = "SELECT * FROM article order by article_id desc";
    $result = pg_query($conn, $sql);
    while ($row = pg_fetch_array($result)) {
        echo "
        <article id=\"{$row['article_id']}\">
        <div class=\"topic\">
        <a class=\"title\"href=\"view/page.php?id={$row['article_id']}\">{$row['title']}
        </a></div>
        <div class=\"description\">{$row['description']}</div>
        <div class=\"timestamp\">{$row['time']} by QuiD.</div>
        </article>";
        echo "<div class=\"line\"></div>";
    }
}
// 제목 클릭시 이동하는 page, 선택된 하나의 글 출력
function print_page()
{
    include('connect.php');
    $a_id=$_GET['id'];
    $sql = "SELECT * FROM article where article_id={$a_id}";
    $result = pg_query($conn, $sql);
    $row = pg_fetch_array($result);
    if (!isset($row)) {
        //url을 통해 이동했을 경우 중 글이 없는 경우(해당하는 id값의 글이 없을경우)
        echo "삭제되어 볼수없습니다.";
    } else {
        echo "
      <article class=\"focus\">
      <div class=\"topic\">{$row['title']}</div>
      <div class=\"description\">{$row['description']}</div>
      <div class=\"timestamp\">{$row['time']} by QuiD.</div>
      </article>";
    }
}
//메인 페이지의 최근글 목록에 모든 제목 출력
function print_title()
{
    include('connect.php');
    $sql = "SELECT * FROM article order by article_id desc";
    $result = pg_query($conn, $sql);
    while ($row = pg_fetch_array($result)) {
        echo "
        <div class=\"title\">
        <a class=\"title\"href=\"#{$row['article_id']}\">{$row['title']}</a>
        </div>";
    }
}
//대시보드의 총 글 갯수 표시
function numarticle()
{
    include('connect.php');
    $sql = "SELECT COUNT(*) FROM article";
    $result = pg_query($conn, $sql);
    $row = pg_fetch_array($result);
    echo $row[0];
}
//대시보드의 가장 최근에 작성된 글 날짜 표시
function datearticle()
{
    include('connect.php');
    $sql = "SELECT * FROM article ORDER BY article_id desc";
    $result = pg_query($conn, $sql);
    $row =pg_fetch_array($result);
    echo $row[2];
}
