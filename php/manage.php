<?php
if(!isset($_GET['id'])){
    $_GET['id']="home";
}

    include('connect.php');
    if(isset($_GET['search'])){
    $key=$_GET['search'];
    $sql = "SELECT * FROM article WHERE title OR description LIKE '%{$key}%'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<article id=\"{$row['article_id']}\"><div class=\"topic\">
        <a class=\"title\"href=\"managepage.php?id=5&page={$row['article_id']}\">{$row['title']}</a></div>
        <div class=\"description\">{$row['description']}</div>
        </article>";
        
    };
    }


    include('connect.php');
    if(isset($_GET['page'])){
        $id=$_GET['page'];
        $sql = "SELECT * FROM article WHERE article_id={$id}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        echo "<article class=\"focus\">
      <div class=\"topic\">{$row['title']}</div>
      <div class=\"description\">{$row['description']}</div>
      ";
        if($_GET['id']==2){echo "<a href=\"update.php?page={$_GET['page']}\" class=\"update\">update</a></article>";}
        else if($_GET['id']==3){echo "<a href=\"delete.php?page={$_GET['page']}\" class=\"delete\">delete</a></article>";}
        else if($_GET['id']==5){echo "<a href=\"update.php?page={$_GET['page']}\" class=\"update\">update</a><a href=\"delete.php?page={$_GET['page']}\" class=\"delete\">delete</a></article>";}
    }

    include('connect.php');
    if(isset($_GET['id'])&&!isset($_GET['page'])){
    if($_GET['id']==2||$_GET['id']==3){
        echo "<h2>글을 선택 해주세요.😊</h2>";
    $sql = "SELECT * FROM article order by article_id desc";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<article id=\"{$row['article_id']}\"><div class=\"topic\">
        <a class=\"title\"href=\"managepage.php?id={$_GET['id']}&page={$row['article_id']}\">{$row['title']}</a></div>
        <div class=\"description\">{$row['description']}</div>
        </article>";
        
    };
}}

 if($_GET['id']=="home"&&!isset($_GET['search'])){
    echo file_get_contents('./php/managehome.php');
    }

if($_GET['id']==1){
    echo file_get_contents('./php/writeform.php');
    };

