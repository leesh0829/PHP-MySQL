<?php
//레코드 삭제
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password =  "1234";
$mysql_db = "mydb"; // mydb라는 데이터베이스에 접속

$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

$sql = " DELETE FROM movie_director WHERE name='토트넘 트로피'";

if(mysqli_query($conn, $sql)) {
    echo "레코드가 성공적으로 삭제 되었습니다.";
} else {
    echo "삭제 실패: ". mysqli_error($conn);
}
mysqli_close($conn);

?>