<?php include('./view/head.php')?>
<head>
    <style>
         <link rel="stylesheet" href="/css/dashboard.css">
         <link rel="stylesheet" href="/css/style.css">
           <link rel="stylesheet" href="/css/layout.css">
        </style>
</head>
<body>
    <?php include('../php/print.php'); ?>
    <header>
       
        <div class="headerlayout">
            <div class="home"><a href="http://quidlog.dev" class="home"><i class="far fa-file-code"></i> QuiD/Log</a></div>
            <div class="github"><a href="https://github.com/QuiD-0"><i class="fab fa-github"></i></a></div>
        </div>
    </header>
    <div class="centerlayout">
        <div class="articlelist" style="width:1200px;">
            <?php
            //id 값에 따른 글 출력
              print_page();
               ?>
        </div>

    </div>
</body>

</html>
