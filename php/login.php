<?php
session_start();
include('connect.php');
include('hash.php');
$id = $_POST['id'];
$pw = $_POST['pw'];
//해시 알고리즘으로 비밀번호 해싱
$hash_pw = password_hash($pw, PASSWORD_DEFAULT);
$result = mysqli_query($conn, "SELECT * FROM  member WHERE userid = '$id'");
$array = mysqli_fetch_array($result);
//form 에서 입력받은 userpw를 해싱 
$hash_password  = $array['userpw'];
if (password_verify($pw, $hash_password)) {
    //로그인 성공
    $_SESSION['user_id']=$id;
    header('location:../view/managepage.php');
} else {
    //로그인 실패
    header('location:../view/admin.html');
}
