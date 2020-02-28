<?php
include('connect.php');
$title= $_POST['title'];
$desc= $_POST['description'];
$sql = "INSERT INTO article (title,description,time) VALUES('{$title}','{$desc}',NOW())";
mysqli_query($conn, $sql);
header('location: https://quidlog.dev/managepage.php');
