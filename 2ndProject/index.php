<?php
// 3. 로그인 프로세스 파일 생성
// 로그인 페이지
// index.php

include("./dbconn.php");
?>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h4 class="display-4 text-center">로그인</h4>
        <form action="./login_check.php" method="POST">
            <div class="mb-3">
                <label for="mb_id">아이디</label>
                <input type="text" id="mb_id" name="mb_id" class="form-control">
            </div>
            <!-- <label> : <input> 태그를 도와주는 역할
                           글자 부분을 클릭하면 키보드 커서가 text창에 표시됨
                           for 속성을 사용해서 <input> 태그의 id 속성에 연계해서 사용
                           <label> 태그의 for값과 <input> 태그의 id값을 일치시킴 -->
            <div class="mb-3">
                <label for="mb_password">비밀번호</label>
                <input type="password" id="mb_password" name="mb_password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">로그인</button>
            <a href="./register.php" class="btn btn-secondary">회원가입</a>
        </form>
    </div>
</body>
</html>