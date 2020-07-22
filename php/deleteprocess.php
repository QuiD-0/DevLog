<?php
include('connect.php');
$id=$_POST['id'];
$Dkey=$_POST['Dkey'];
$sql = "SELECT deletekey FROM security";
$result = pg_query($conn, $sql);
$row = pg_fetch_array($result);
//삭제 키 입력 확인
if ($row[0]==$Dkey) {
    $sql = "DELETE from article where article_id={$id}";
    pg_query($conn, $sql);
    header('location: https://quidlog.dev/view/managepage.php');
} else {
    echo "삭제 실패";
}
