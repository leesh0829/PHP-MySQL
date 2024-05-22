<?php
#union 
//여러 개의 SELECT 문의 결과를 하나의 테이블이나 결과 집합으로 표현할 떄 사용
//이때 각각의 SELECT 문으로 선택된필드의 개수와 필드의 타입은 모두 같아야함

    CREATE TABLE class1 (
        id INT(11) NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    );

    INSERT INTO class1 VALUES (1, '강현빈');
    INSERT INTO class1 VALUES (2, '김새솔');
    INSERT INTO class1 VALUES (3, '김현석');
    INSERT INTO class1 VALUES (4, '박범영');
    INSERT INTO class1 VALUES (5, '이승현');

    CREATE TABLE class2 (
        id INT(11) NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    );

    INSERT INTO class2 VALUES (1, '김기철');
    INSERT INTO class2 VALUES (2, '김기현');
    INSERT INTO class2 VALUES (3, '김민재');
    INSERT INTO class2 VALUES (4, '박성준');
    INSERT INTO class2 VALUES (5, '이승현');

    //중복되는 레코드는 하나만 가져옴
    SELECT name FROM class1
    union
    SELECT name FROM class2;

    #SUB QUERY
    //다음 SQL문 내부에 포함되어 있는SELECT 문을 의미
    //서브쿼리를내부쿼리(INNER QUERY),
    //서브 쿼리를 포함하고 있는 쿼리를 외부 쿼리(OUTHER QUERY)라고도 부름
    //서브 쿼리를 사용할 때는 반드시 괄호()로 감싸서 사용
    SELECT title, opening_day FROM movie_list //1
    WHERE director_id = (SELECT id FROM movie_director //2
                        WHERE name = '박찬우');
    //1번은 외부 쿼리, 2번은 내부 쿼리
    //2번의 서브 쿼리가 먼저 실행되어 movie_director 테이블의 name필드의 값이
    //박찬우인 레코드의 name 필드를 모두 가져움
    //그 다음 1번의 외부 쿼리가 실행되어 movie_list 테이블의 2와 일치하는 레코드만
    //다시 가져옴

    //여러 값을 비교하고 싶으면 WHERE 절 뒤에 IN 키워드 추가
    DELETE FROM movie_director
    WHERE id IN (SELECT director_id
                FROM movie_list
                WHERE title LIKE '명량');
?>