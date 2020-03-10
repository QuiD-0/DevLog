<?php
// 삭제 선택후 확인 페이지, 제목과 본문 모두 출력
function delete_print_all()
{
    include('connect.php');
    $id=$_GET['page'];
    $sql = "SELECT * FROM article where article_id={$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
        echo "
        <article class=\"focus\">
    <div class=\"topic\">{$row['title']}</div>
    <div class=\"description\">{$row['description']}</div>
    <div class=\"timestamp\">{$row['time']} by QuiD.</div>
    </article>";
}
//수정 페이지에서 기존의 제목 출력
function title()
{
    include('connect.php');
    $id=$_GET['page'];
    $sql = "SELECT * FROM article where article_id={$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo "{$row['title']}";
}
//수정 페이지에서 기존의 본문 출력
function description()
{
    include('connect.php');
    $id=$_GET['page'];
    $sql = "SELECT * FROM article where article_id={$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo "{$row['description']}";
}
