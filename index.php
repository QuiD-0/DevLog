<!-- html, head, 링크 관련 파일 -->
<?php include('./view/head.php');?>

<body>
    <!--print 관련 함수-->
    <?php include('./php/print.php'); ?>
    <!--상단 header부분 -->
    <header>
        <div class="headerlayout">
            <div class="home"><a href="https://quidlog.herokuapp.com/" class="home">QuiD/Log</a></div>
            <div class="github"><a href="https://github.com/QuiD-0"><i class="fab fa-github"></i></a></div>
        </div>
    </header>
    <!--메인 페이지-->
    <div class="centerlayout">
        <div class="leftlayer">
            <div class="articlelist">
                <?php
                //DB의 모든 글 출력
              print_all();
               ?>
            </div>
        </div>
        <!--우측 프로필-->
        <div class="profile">
            <a href="/view/admin.html"><div class="profileicon"><img src="./res/profile.png" width="190px;"></div></a>
            <div class="name">QuiD</div>
            <div class="email"><i class="fas fa-envelope"></i> wodnd101@naver.com</div>
            <div class="birth"><i class="fas fa-birthday-cake"></i> 1997.06.28</div>
            <div class="profile_description">개발자 지망생의 DEVLOG</div>
        </div>
        <!--우측 최근 글 목록-->
        <div class="titlelist">
            <div class="recent">최신글</div>
            <?php
            //모든 글 제목 출력
            print_title();
            ?>
        </div>
    </div>
    <a href="#" id="scroll" style="display: none;"><span></span></a>
</body>
</html>
