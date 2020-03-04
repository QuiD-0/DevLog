<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php session_start();?>

<head>
    <meta charset="utf8mb4">
    <style>
        @font-face {
            font-family: 'RIDIBatang';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_twelve@1.0/RIDIBatang.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

    </style>
    <script src="https://kit.fontawesome.com/b1e30c76c7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>quidlog/Dashboard</title>
</head>

<body>
        <ul>
            <li class="logo"><a href="https://quidlog.dev" class="toMain">QuidLog.dev</a></li>
            <li><a href="managepage.php">Home</a></li>
            <li><a href="managepage.php?id=1">Write</a></li>
            <li><a href="managepage.php?id=2">Update</a></li>
            <li><a href="managepage.php?id=3">Delete</a></li>
            <div class="user">
                <?php include("./php/topSession.php");?></div>
        </ul>
    <div class="main">
        <div class="search">
            <form method="GET">
                <input type="search" class="searchbox" placeholder="Search" name="search">
                <button type="submit" class="searchbtn"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <?php include('./php/manage.php');?>
    </div>
</body>

</html>
