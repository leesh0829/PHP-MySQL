<?php
//2. 데이터 베이스 연결 파일 생성
//dbconn.php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "project";

//MYSQL 데이터 베이스 연결
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn)
{
    die("연결 실패: ". mysqli_connect_error());
}

ini_set('display_errors', 'off');

session_start(); //dbconn.php 파일을 include 하는 다른 파일에서,
                //세션을 유지할 수 있도록 dbconn.php 파일의 하단에는
                //세션을 공통으로 사용할 수 있도록 session_start()가 사용됨.
                //이와 같이 공통적으로 사용해야 할 부분을 상담의 공통하일에서 관리
                //페이지를 옮겨다닐때는 session을 사용
?>