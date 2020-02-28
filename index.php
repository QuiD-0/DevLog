<!DOCTYPE html>
<html lang="ko">
<!-- 이 프로젝트는 PHP + MySQL을 활용하여 웹페이지를 동적으로 생성하는 게시판형식의 블로그 입니다.-->

<head>
    <meta charset="utf8mb4">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevLog.QuiD</title>
       <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    <style>
        @font-face {
            font-family: 'RIDIBatang';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_twelve@1.0/RIDIBatang.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

    </style>
    <script src="https://kit.fontawesome.com/b1e30c76c7.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="/js/func.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('./php/print.php'); ?>
    <header>
        <div class="headerlayout">
            <div class="home"><a href="https://quidlog.dev" class="home"><i class="far fa-file-code"></i> QuiD/Log</a></div>
            <div class="github"><a href="https://github.com/QuiD-0"><i class="fab fa-github"></i></a></div>
        </div>
    </header>
    <div class="centerlayout">
        <div class="leftlayer">
            <div class="articlelist">
                <?php
              print_all();
               ?>
            </div>
        </div>
        <div class="profile">
            <div class="profileicon"><img src="./res/profile.png" width="190px;"></div>
            <div class="name">QuiD</div>
            <div class="email"><i class="fas fa-envelope"></i> wodnd101@naver.com</div>
            <div class="birth"><i class="fas fa-birthday-cake"></i> 1997.06.28</div>
            <div class="profile_description">개발자 지망생의 DEVLOG</div>
        </div>
        <div class="titlelist">
            <div class="recent">최신글</div>
            <?php
            print_title();
            ?>
        </div>
    </div>
    <a href="#" id="scroll" style="display: none;"><span></span></a>
</body>

</html>
