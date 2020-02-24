<?php
include('connect.php');
include('hash.php');
$id = $_POST['id'];
$pw = $_POST['pw'];
$hash_pw = password_hash($pw, PASSWORD_DEFAULT);
$result = mysqli_query($conn, "SELECT * FROM  member WHERE userid = '$id'");
$array = mysqli_fetch_array($result);
$hash_password  = $array['userpw'];
if (password_verify($pw, $hash_password)) {
    header('location:../managepage.php');
} else {
    header('location:../admin.html');
}
