<?php
//절차지향
/*$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password =  "1234";
$mysql_db = "mydb"; // mydb라는 데이터베이스에 접속

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) {
    die("연결 실패: " . mysqli_connect_error());
}

echo "연결 성공"; */

//객체지향
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password =  "1234";
$mysql_db = "mydb"; // mydb라는 데이터베이스에 접속

$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

echo "연결 성공";


?>