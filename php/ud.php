<?php

function print_all()
{
    include('connect.php');
    $id=$_GET['page'];
    $sql = "SELECT * FROM article where article_id={$id}";
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

function title()
{
    include('connect.php');
    $id=$_GET['page'];
    $sql = "SELECT * FROM article where article_id={$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo "{$row['title']}";
}

function description()
{
    include('connect.php');
    $id=$_GET['page'];
    $sql = "SELECT * FROM article where article_id={$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo "{$row['description']}";
}
