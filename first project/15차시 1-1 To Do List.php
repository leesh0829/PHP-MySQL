<?php
#To Do List 프로그램 구현
//브라우저 -> 메인화면(index.php) -> 할 일 추가(add.php)
//                              -> 할 일 삭제(remove.php)
//                              -> 할 일 체크(check.php)

// 1. To Do List 테이블 생성

CREATE TABLE todo(
    id INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL DEFAULT '',
    checked TINYINT(1) NOT NULL DEFAULT '0',
    datetime datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    
    PRIMARY KEY (id),
    UNIQUE KEY id (id),
    KEY datetime (datetime)
)
?>