<?php
include('connect.php');
$id=$_POST['id'];
$Dkey=$_POST['Dkey'];
$sql = "SELECT deletekey FROM security";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if ($row[0]==$Dkey) {
    $sql = "DELETE from article where article_id={$id}";
    mysqli_query($conn, $sql);
    header('location: https://quidlog.dev/view/managepage.php');
} else {
    echo "삭제 실패";
}
