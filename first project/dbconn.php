<?php
//2. 데이터 베이스 연결
// dbconn.php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "project2";

//MySQL 데이터 베이스 연결
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn) {  //연결 오류 시 스크립트 종료
    die ("연결 실패: ".mysqli_connect_error());
}

ini_set('display_error', 'off');    //PHP에서 발생하는 오류 메세지를 숨김
?>