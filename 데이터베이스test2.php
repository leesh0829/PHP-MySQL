<?php
//레코드 생성
//데이터 베이스 'mydb'에 있는 'movie_director'테이블에 저장된 레코드를 가져옴
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password =  "1234";
$mysql_db = "mydb"; // mydb라는 데이터베이스에 접속

$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

$sql = "SELECT * FROM movie_director";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {  //검색된 레코드의 개수가 0보다 크면
    while($row = mysqli_fetch_array($result)) {
        echo "id : ".$row['id']. " - name : ".$row['name']. "- birthday : ".$row['birthday']. "<br>";
    }
}
else {
    echo "저장되 데이터가 없습니다.";
}
mysqli_close($conn);

?>