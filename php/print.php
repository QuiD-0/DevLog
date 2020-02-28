<?php
function print_all()
{
    include('connect.php');
    $sql = "SELECT * FROM article order by article_id desc";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<article id=\"{$row['article_id']}\"><div class=\"topic\">
        <a class=\"title\"href=\"page.php?id={$row['article_id']}\">{$row['title']}</a></div>
        <div class=\"description\">{$row['description']}</div>
        <div class=\"timestamp\">{$row['time']} by QuiD.</div>
        </article>";
        echo "<div class=\"line\"></div>";
    };
}
function print_page()
{
    include('connect.php');
    $a_id=$_GET['id'];
    $sql = "SELECT * FROM article where article_id={$a_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if (!isset($row)) {
        echo "삭제되어 볼수없습니다.";
    } else {
        echo "<article class=\"focus\">
      <div class=\"topic\">{$row['title']}</div>
      <div class=\"description\">{$row['description']}</div>
      <div class=\"timestamp\">{$row['time']} by QuiD.</div>
      </article>";
    }
}
function print_title()
{
    include('connect.php');
    $sql = "SELECT * FROM article order by article_id desc";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class=\"title\"><a class=\"title\"href=\"#{$row['article_id']}\">{$row['title']}</a></div>";
    };
}
