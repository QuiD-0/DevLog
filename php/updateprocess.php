<?php
include('connect.php');
//글의 id 변경된 제목과 본문 내용 받아와서 DB에 수정
$id=$_POST['id'];
$title=$_POST['title'];
$desc=$_POST['description'];
$sql="UPDATE article SET title='{$title}', description='{$desc}' WHERE article_id='{$id}' ";
pg_query($conn, $sql);
header('location: https://quidlog.herokuapp.com/view/managepage.php');
