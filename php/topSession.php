<?php
    $user_id = $_SESSION['user_id'];
    $user_name = "QuiD";
    //로그인된 유저 닉네임 표시
    echo "<p><i class=\"far fa-user\"></i>{$user_name}님";
    //로그아웃 버튼
    echo "<a href=\"/php/logout.php\" class=\"logout\"><i class=\"fas fa-sign-out-alt\"></i>logout</a></p>";
