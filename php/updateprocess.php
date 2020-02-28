<?php
include('connect.php');
$id=$_POST['id'];
$title=$_POST['title'];
$desc=$_POST['description'];
$sql="UPDATE article SET title='{$title}', description='{$desc}' WHERE article_id='{$id}' ";
mysqli_query($conn, $sql);
header('location: https://quidlog.dev/managepage.php');
