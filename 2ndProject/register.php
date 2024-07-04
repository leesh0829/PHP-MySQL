<?php
//4.회원가입 및 회원정보 수정 파일 생성
//register.php

include("./dbconn.php");

//세션이 있다면 회원 정보를 가져오고 회원수정 mode로 설정
if(isset($_SESSION['ss_mb_id'])) {
    $mb_id = $_SESSION['ss_mb_id'];
    //회원 정보를 조회하는 SQL 문
    $sql = " SELECT * FROM member WHERE mb_id = '$mb_id'";
    $result = mysqli_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);

    mysqli_close($conn);

    $mode = "modify";
    $title = "회원 수정";
    $modify_mb_info = "readonly";
    $href = "./member_list.php";
} else
{
    $mode = "insert";
    $title = "회원 가입";
    $modify_mb_info = "";
    $href = "./index.php";
}
?>

<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class = "container">
            <h4 class = "display-4 text-center"><?php echo $title ?></h4>
            <form action = "./register_update.php" method = "post">
                <input type = "hidden" name = "mode" value = "<?php echo $mode ?>">

                <label for = "mb_id">아이디</label>
                <div class = "mb-3">
                    <input type = "text"
                    id = "md_id"
                    name = "mb_id"
                    class = "form-control"
                    value = "<?php echo $mb['mb_id'] ?? '' ?>" <?php echo $modify_mb_info ?>>
                    <!-- value에는 위에서 서정한 $mb 변쉥 아이디 값이 들어가는데
                    회원정보 수정상태라면 읽기 전용으로 아이디가 나타나고
                    회원가입 상태라면 빈값이 들어가게 된다. -->
                    <!-- ?? '' : null 병합 연산자를 사용하여 값이 있다면 해당 값을 사용하고,
                    없다면 공백을 넣어줌 -->
                </div>

                <label for = "mb_password">비밀번호</label>
                <div class = "mb-3">
                    <input type = "password"
                    id = "mb_password"
                    name = "mb_password"
                    class = "form-control">
                </div>

                <label for = "mb_password_re">비밀번호 확인</label>
                <div class = "mb-3">
                    <input type = "password"
                    id = "mb_password_re"
                    name = "mb_password_re"
                    class = "form-control">
                </div>

                <label for = "mb_name">이름</label>
                    <div class = "mb-3">
                        <input type = "text"
                        id = "md_name"
                        name = "mb_name"
                        class = "form-control"
                        value = "<?php echo $mb['mb_name'] ?? '' ?>">
                    </div>

                <label for = "mb_name">이메일</label>
                    <div class = "mb-3">
                        <input type = "email"
                        id = "md_email"
                        name = "mb_email"
                        class = "form-control"
                        value = "<?php echo $mb['mb_email'] ?? '' ?>">
                    </div>

                <label>직업</label>
                <div class = "mb-3">
                    <select class = "form-select" name = "mb_job">
                        <option value = "">선택하세요</option>
                        <option value = "학생" <?php echo ($mb['mb_job'] == "학생") ? "seclected" : "";?>>학생</option>
                        <option value = "회사원" <?php echo ($mb['mb_job'] == "회사원") ? "seclected" : "";?>>회사원</option>
                        <option value = "공무원" <?php echo ($mb['mb_job'] == "공무원") ? "seclected" : "";?>>공무원</option>
                        <option value = "주부" <?php echo ($mb['mb_job'] == "주부") ? "seclected" : "";?>>주부</option>
                        <option value = "무직" <?php echo ($mb['mb_job'] == "무직") ? "seclected" : "";?>>무직</option>
                        <!--회원정보 수정 상태하면 $mb['mb_job']의 값을 확인하여 저장된 값과 일치하는
                        <option>에 삼항 연산자를 사용하여 문자열 selected를 출력하여 자동선택이 되도록 함 -->
                    </select>
                </div>
                
                <label>성별</label>
                <div class = "mb-3">
                    <div class = "form-check form-check-inline">
                        <input type = "radio"
                        class = "form-check-input"
                        name = "mb_gender"
                        id = "gender1"
                        value = "남자" <?php echo ($mb['mb_gender'] == "남자" ) ? "checked" : "";?>>
                        <label for "gender1">남자</label>
                    </div>
                    <div class = "form-check form-check-inline">
                        <input type = "radio"
                        class = "form-check-input"
                        name = "mb_gender"
                        id = "gender2"
                        value = "여자" <?php echo ($mb['mb_gender'] == "여자" ) ? "checked" : "";?>>
                        <label for "gender2">여자</label>
                    </div> 
                </div>

                <label>관심언어</label>
                <div class = "mb-3">
                    <div class = "form-check form-check-inline">
                        <input type = "checkbox"
                        id = "mb_language1"
                        name = "mb_language[]"
                        class = "form-check-input"
                        value = "HTML" <?php echo str_contains($mb['mb_language'], "HTML") ? "checked" : "";?>>
                        <!--str_constains() 함수는 대소문자를 구분해서 문자열에 특정 문자열에 특정 문자가 포함되었는지를 확인 -->
                    <label for = "mb_language1">HTML</label>
                    <!--HTML 텍스트를 클릭해도 체크박스에 체크가 됨 -->
                </div>

                <div class = "form-check form-check-inline">
                    <input type = "checkbox"
                    id = "mb_language2"
                    name = "mb_language[]"
                    class = "form-check-input"
                    value = "CSS" <?php echo str_contains($mb['mb_language'], "CSS") ? "checked" : "";?>>
                <label for = "mb_language2">CSS</label>
                </div>

                <div class = "form-check form-check-inline">
                    <input type = "checkbox"
                    id = "mb_language3"
                    name = "mb_language[]"
                    class = "form-check-input"
                    value = "PHP" <?php echo str_contains($mb['mb_language'], "PHP") ? "checked" : "";?>>
                <label for = "mb_language3">PHP</label>
                </div>

                <div class = "form-check form-check-inline">
                    <input type = "checkbox"
                    id = "mb_language4"
                    name = "mb_language[]"
                    class = "form-check-input"
                    value = "MYSQL" <?php echo str_contains($mb['mb_language'], "MYSQL") ? "checked" : "";?>>
                <label for = "mb_language4">MYSQL</label>
                </div>

                <button type = "submit" class = "btn btn-primary"<?php echo $title ?> </button>
                <!-- 로그인 상태에 따라 회원수정이나 회원가입으로 타이틀이 바뀜-->
                <a href = "<?php echo $href ?>" class = "btn btn-danger">취소</a>
                <!-- 로그인 상태에 따라 회원목록 페이지 또는 메인화면으로 이동-->
            </form>
        </div>
    </body>
</html>