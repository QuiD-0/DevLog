<?php
//로그아웃
session_start();
session_destroy();
header('location: https://quidlog.herokuapp.com/');
