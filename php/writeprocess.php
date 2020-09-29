<?php
include('connect.php');
//제목과 본문을 받아와서 DB에 입력
$title= $_POST['title'];
$desc= $_POST['description'];
//now() = 현재의 시간 입력
$sql = "INSERT INTO article (title,description,time) VALUES('{$title}','{$desc}',NOW())";
pg_query($conn, $sql);
header('location: https://quidlog.herokuapp.com/view/managepage.php');
