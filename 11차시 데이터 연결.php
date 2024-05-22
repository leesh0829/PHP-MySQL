<?php
#SET PASSWORD
//사용자 계정의 패스워드 지정
//SET PASSWORD FOR [계정이름]@[호스트] = PASSWORD('[변경할 패스워드]');
//SET PASSWORD FOR root@localhost = PASSWORD('1234');

#데이터 베이스 연결
//MySQLi 확장 API 사용 방법 - 절차 지향 스타일
$mysql_host = "localhost"; //데이터베이스 서버의 호스트 또는 IP
$mysql_user = "root"; //데이터 베이스 사용자 계정
$mysql_password = "1234"; //데이터 베이스 사용자 패스워드
$mysql_db = "mydb"; //연결할 데이터 베이스명

//MySQL 데이터 베이스 연결 실행
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) { //연결 오류 발생 시 스크립트 종료
    die("연결 실패: ".mysqli_connect_error()); //mysqli_connect_error()는 오류 발생 코드를 나타내는 내장함수
}

echo "연결 성공";

#데이터 베이스 연결
//MySQLi 확장 API 사용 방법 - 절차 지향 스타일
$mysql_host = "localhost"; //데이터베이스 서버의 호스트 또는 IP
$mysql_user = "root"; //데이터 베이스 사용자 계정
$mysql_password = "1234"; //데이터 베이스 사용자 패스워드
$mysql_db = "mydb"; //연결할 데이터 베이스명

//MySQL 데이터 베이스 연결 실행
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) { //연결 오류 발생 시 스크립트 종료
    die("연결 실패: ".mysqli_connect_error()); //mysqli_connect_error()는 오류 발생 코드를 나타내는 내장함수
}

echo "연결 성공";
?>