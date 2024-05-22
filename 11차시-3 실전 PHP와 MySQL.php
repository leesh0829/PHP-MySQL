<?php
#실전 PHP와 MySQL
//레코드 선택
//데이터베이스 'mydb'에 있는 'movie_director' 테이블에 저장된  레코드를 가져오는 PHP예제
$mysql_host = "localhost"; //데이터베이스 서버의 호스트 또는 IP
$mysql_user = "root"; //데이터 베이스 사용자 계정
$mysql_password = "1234"; //데이터 베이스 사용자 패스워드
$mysql_db = "mydb"; //연결할 데이터 베이스명

$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn) {
    die ("연결 실패: ".mysqli_connect_error());
}

$sql = " SELECT * FROM movie_director ";
//$sql 변수에 MySQL에서 실행할 SQL문을 저장
$result = mysqli_query($conn, $sql); //mysqli_query() 함수로 SQL문 실행
//mysqli_query(연결된 데이터 베이스 리소스, SQL문을 담고 있는 변수)
if(mysqli_num_rows($result) > 0) { //검색된 레코드의 개수가 0보다 크면
    while($row = mysqli_fetch_array($result)) {
        echo "id : ".$row['id']. " - name: " .$row['name']. " - birthday: ".$row['birthday']. "<br>";
        //검색 항목을 반복문을 이용하여 순서대로 출력
    } 
}
else {
    echo "저장된 데이터가 없습니다.";
}
mysqli_close($conn); //데이터 베이스 접속 종료

//mysqli_num_rows($result); -> 반환된 레코드의 개수, 총 몇개의 행을 가졌는지 그 개수를 반환
//$result로부터 가져온 결과는 다음 세가지 함수와 함께 사용이 가능
//1. mysql_fetch_assoc() -> 연관 배열 반환.
//2. mysql_fetch_row() -> 숫자 인덱스와 일반배열 반환.
//3. mysql_fetch_array() -> 연관배열 및 숫자 인덱스, 일반배열 모두 반환 가능.
?>