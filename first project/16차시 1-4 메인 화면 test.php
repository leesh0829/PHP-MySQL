<?php
// 4. 메인 화면
// 메인 화면 페이지
// /ch16/index.php

include("./dbconn.php"); // DB연결을 위한 dbconn.php 파일을 인클루드합니다.
// include()는 하나의 파일을 여러곳에서 사용할 때 사용하는 내장함수
// todo 테이블에 등록되어있는 목록을 조회
$sql = " SELECT * FROM todo ORDER BY id DESC "; // id 기준 내림차순
                                                // ASC : 오름차순(일반)
$result = mysqli_query($conn, $sql);
mysqli_close($conn); // 데이터베이스 접속 종료
                     // 데이터베이스를 접속 종료하더라도 이미 $result 변수에
                     // SQL 문의 실행 결과를 가지고 있기 때문에 아래쪽에서
                     // 해당 결과를 사용할 수 있음
?>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div id="toDo" class="container">
    <div class="row justify-content-sm-center">
        <div class="col-sm-5">
            <form>
                <div class="card">
                    <h2 class="card-header text-center">To Do List</h2>
                    <div class="gw-example">
                        <div class="form-group">

                        </div>
                        <div class="d-grid margin-top-2">
                          
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-sm-center">
        <div class="col-sm-5">
            <section class="show_todo_section margin-top-2">

                    <div class="card gw-example">
                        <div class="card-body box-shadow border-radius-1">
                            등록된 To Do List가 없습니다.
                        </div>
                    </div>

                    <div class="card card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">

                            </div>

                        </div>

                    </div>
                    
            </section>
        </div>
    </div>
</div>

</body>
</html>