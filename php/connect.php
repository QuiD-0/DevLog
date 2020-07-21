<?php 
// 메인DB연결

    $db_host="host=ec2-54-146-91-153.compute-1.amazonaws.com";    //접속할 IP: 서버 PHP에서 해당 로컬 호스트 DB로 접속하기에 localhost
    $db_port="port=5432";        //접속할 포트
 
    $db_pw="user=jrgamsvabeowqz password=ac6f786048974b44bda9fc0e2cb2ba5c6b4040b21c9611abf8af2eadf2c46764";    //DB접속 user와 pw정보 문자열로 저장
    $db_name="dbname=dea5rsggdnkttm";                    //접속할 데이터베이스의 이름 저장
 
    //psql접속하는 명령어 :  host, port, dbname, user, password
    $conn=pg_connect("$db_host $db_port $db_name $db_pw");
?>