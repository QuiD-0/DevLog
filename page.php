<!DOCTYPE html>
<html lang="en">
<!-- 이 프로젝트는 PHP + MySQL을 활용하여 웹페이지를 동적으로 생성하는 게시판형식의 블로그 입니다.-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLog.QuiD</title>
    <style>
        @font-face {
            font-family: 'RIDIBatang';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_twelve@1.0/RIDIBatang.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

    </style>
    <script src="https://kit.fontawesome.com/b1e30c76c7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('./php/print.php'); ?>
    <header>
        <div class="headerlayout">
            <div class="home"><a href="http://quidlog.dev" class="home"><i class="far fa-file-code"></i> QuiD/Log</a></div>
            <div class="github"><a href="https://github.com/QuiD-0"><i class="fab fa-github"></i></a></div>
        </div>
    </header>
    <div class="centerlayout">
        <div class="articlelist" style="width:1200px;">
            <?php
              print_page();
               ?>
        </div>

    </div>
</body>

</html>
