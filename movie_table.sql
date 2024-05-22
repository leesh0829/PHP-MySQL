CREATE TABLE movie_director (
	id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL,
   	PRIMARY KEY (id)
);

INSERT INTO movie_director (name, birthday)
VALUES('박찬우', '1963-08-23');

INSERT INTO movie_director (name, birthday)
VALUES('류승완', '1973-12-15');

INSERT INTO movie_director (name, birthday)
VALUES('윤제균', '1969-05-14');

INSERT INTO movie_director (name, birthday)
VALUES('최동훈', '1971-02-24');

INSERT INTO movie_director (name, birthday)
VALUES('홍륜규', '1200-02-22');

INSERT INTO movie_director (name, birthday)
VALUES('이승현', '1563-05-19');

INSERT INTO movie_director (name, birthday)
VALUES('정교진', '1823-01-26');

INSERT INTO movie_director (name, birthday)
VALUES('전병현', '3663-12-26');


CREATE TABLE movie_list (
	id INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    opening_day DATE NOT NULL,
    director_id VARCHAR(255) NULL DEFAULT NULL,
    
    PRIMARY KEY (id)
);

INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (1, '공동경비구역 JSA', '2000-09-09', 1);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (2, '아가씨', '2016-06-01', 1);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (3, '친절한 금자씨', '2005-07-29', 1);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (4, '베테랑', '2015-08-05', 2);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (5, '부당거래', '2010-10-28', 2);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (6, '국제시장', '2014-12-17', 3);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (7, '해운대', '2009-07-22', 3);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (8, '암살', '2015-07-22', 4);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (9, '타짜', '2006-09-28', 4);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (10, '괴물', '2006-07-27', 5);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (11, '살인의추억', '2003-04-25', 5);
INSERT INTO movie_list (id, title, opening_day, director_id) VALUES (12, '명량', '2014-07-30', 6);
INSERT INTO movie_list (id, title, opening_day) VALUES (13, '7번방의 선물', '2013-01-23');
INSERT INTO movie_list (id, title, opening_day) VALUES (14, '광해', '2012-09-13');

SELECT *
FROM movie_director
INNER JOIN movie_list
ON movie_director.id = movie_list.director_id;
---------------------셋이 같음------------------------------
SELECT *
FROM movie_director, movie_list
WHERE movie_director.id = movie_list.director_id;
---------------------셋이 같음------------------------------
SELECT *
FROM movie_director AS a, movie_list AS b
WHERE a.id = b.director_id;

//// LEFT JOIN ////

SELECT *
FROM movie_director
LEFT JOIN movie_list
ON movie_director.id = movie_list.director_id
WHERE birthday < '1970-01-01';

SELECT a.id, a.name, a.birthday, b.director_id, b.title, b.opening_day
FROM movie_director AS a
LEFT JOIN movie_list AS b
ON a.id = b.director_id;

//// RIGHT JOIN ////

SELECT *
FROM movie_director
RIGHT JOIN movie_list
ON movie_director.id = movie_list.director_id;

SELECT *
FROM movie_director AS a
RIGHT JOIN movie_list AS b
ON a.id = b.director_id;

//// CROSS JOIN ////

SELECT *
FROM movie_director
CROSS JOIN movie_list;