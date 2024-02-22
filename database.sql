mysql> create database tydb6;
Query OK, 1 row affected (0.15 sec)

mysql> create user ty6;
Query OK, 0 rows affected (0.23 sec)

mysql> use tydb6;
Database changed
mysql> select user from mysql.user;
+---------------+
| user          |
+---------------+
| demo          |
| hair          |
| music         |
| ty06          |
| ty6           |
| mysql.session |
| mysql.sys     |
| root          |
+---------------+
8 rows in set (0.00 sec)

mysql> create table user(id int primary key auto_increment,user_name varchar(50) unique,password varchar(12) unique,gender varchar(10) check(gender in('Male','Female','Other')),ph_number numeric,email_id varchar(20),Dob date);
Query OK, 0 rows affected (0.26 sec)

mysql> create table Artist(a_id int primary key auto_increment, a_name varchar(50), gender varchar(10) check(gender in('Male','Female','Other')));
Query OK, 0 rows affected (0.06 sec)

mysql> create table Album(album_no int primary key auto_increment,album_name varchar(30),year int);
Query OK, 0 rows affected (0.04 sec)

mysql> create table Track(t_id int primary key auto_increment,t_name varchar(30),type varchar(30) check(type in('Audio','Video')));
Query OK, 0 rows affected (0.03 sec)

mysql> create table search(id int references user on delete cascade on update set null,a_id int references artist on delete cascade on update set null,album_no int references album on delete cascade on update set null,t_id int references track on delete cascade on update set null,Genre varchar(30));
Query OK, 0 rows affected (0.07 sec)

mysql> desc search;
+----------+-------------+------+-----+---------+-------+
| Field    | Type        | Null | Key | Default | Extra |
+----------+-------------+------+-----+---------+-------+
| id       | int(11)     | YES  |     | NULL    |       |
| a_id     | int(11)     | YES  |     | NULL    |       |
| album_no | int(11)     | YES  |     | NULL    |       |
| t_id     | int(11)     | YES  |     | NULL    |       |
| Genre    | varchar(30) | YES  |     | NULL    |       |
+----------+-------------+------+-----+---------+-------+
5 rows in set (0.10 sec)

mysql> desc user;
+-----------+---------------+------+-----+---------+----------------+
| Field     | Type          | Null | Key | Default | Extra          |
+-----------+---------------+------+-----+---------+----------------+
| id        | int(11)       | NO   | PRI | NULL    | auto_increment |
| user_name | varchar(50)   | YES  |     | NULL    |                |
| password  | varchar(12)   | YES  | UNI | NULL    |                |
| gender    | varchar(10)   | YES  |     | NULL    |                |
| ph_number | decimal(10,0) | YES  |     | NULL    |                |
| email_id  | varchar(20)   | YES  |     | NULL    |                |
| Dob       | date          | YES  |     | NULL    |                |
+-----------+---------------+------+-----+---------+----------------+
7 rows in set (0.02 sec)

mysql> insert into user(user_name,password,gender,ph_number,email_id,Dob) values ('Tanima@2001','Tan@4101','Female',9563248412,'tanidam@gmail.com','2001-10-04');
Query OK, 1 row affected (0.11 sec)

mysql> insert into user(user_name,password,gender,ph_number,email_id,Dob) values ('Siddhi2001','Sidd@9501','Female',9632587410,'siddhih1@gmail.com','2001-05-09');
Query OK, 1 row affected (0.00 sec)

mysql> insert into user(user_name,password,gender,ph_number,email_id,Dob) values ('Ingrid@2001','Ing@01','Female',9602357418,'ingseq@gmail.com','2001-07-17');
Query OK, 1 row affected (0.00 sec)

mysql> select * from user;
+----+-------------+-----------+--------+------------+--------------------+------------+
| id | user_name   | password  | gender | ph_number  | email_id           | Dob        |
+----+-------------+-----------+--------+------------+--------------------+------------+
|  1 | Tanima@2001 | Tan@4101  | Female | 9563248412 | tanidam@gmail.com  | 2001-10-04 |
|  2 | Siddhi2001  | Sidd@9501 | Female | 9632587410 | siddhih1@gmail.com | 2001-05-09 |
|  3 | Ingrid@2001 | Ing@01    | Female | 9602357418 | ingseq@gmail.com   | 2001-07-17 |
+----+-------------+-----------+--------+------------+--------------------+------------+
3 rows in set (0.00 sec)

mysql> desc artist;
+--------+-------------+------+-----+---------+----------------+
| Field  | Type        | Null | Key | Default | Extra          |
+--------+-------------+------+-----+---------+----------------+
| a_id   | int(11)     | NO   | PRI | NULL    | auto_increment |
| a_name | varchar(50) | YES  |     | NULL    |                |
| gender | varchar(10) | YES  |     | NULL    |                |
+--------+-------------+------+-----+---------+----------------+
3 rows in set (0.03 sec)

mysql> insert into Artist(a_name,gender) values('sonu nigam','Male');
Query OK, 1 row affected (0.00 sec)

mysql> insert into Artist(a_name,gender) values('Shreya Ghoshal','Female');
Query OK, 1 row affected (0.00 sec)

mysql> insert into Artist(a_name,gender) values('Arijit Singh','Male');
Query OK, 1 row affected (0.00 sec)

mysql> select * from artist;
+------+----------------+--------+
| a_id | a_name         | gender |
+------+----------------+--------+
|    1 | sonu nigam     | Male   |
|    2 | Shreya Ghoshal | Female |
|    3 | Arijit Singh   | Male   |
+------+----------------+--------+
3 rows in set (0.00 sec)

mysql> desc album;
+------------+-------------+------+-----+---------+----------------+
| Field      | Type        | Null | Key | Default | Extra          |
+------------+-------------+------+-----+---------+----------------+
| album_no   | int(11)     | NO   | PRI | NULL    | auto_increment |
| album_name | varchar(30) | YES  |     | NULL    |                |
| year       | int(11)     | YES  |     | NULL    |                |
+------------+-------------+------+-----+---------+----------------+
3 rows in set (0.03 sec)

mysql> insert into Album(album_name,year) values ('House party Hits','2020');
Query OK, 1 row affected (0.00 sec)

mysql> insert into Album(album_name,year) values ('Pop rising','2021');
Query OK, 1 row affected (0.00 sec)

mysql> insert into Album(album_name,year) values ('Romantic','2010');
Query OK, 1 row affected (0.00 sec)

mysql> select * from album;
+----------+------------------+------+
| album_no | album_name       | year |
+----------+------------------+------+
|        1 | House party Hits | 2020 |
|        2 | Pop rising       | 2021 |
|        3 | Romantic         | 2010 |
+----------+------------------+------+
3 rows in set (0.00 sec)

mysql> desc track;
+--------+-------------+------+-----+---------+----------------+
| Field  | Type        | Null | Key | Default | Extra          |
+--------+-------------+------+-----+---------+----------------+
| t_id   | int(11)     | NO   | PRI | NULL    | auto_increment |
| t_name | varchar(30) | YES  |     | NULL    |                |
| type   | varchar(30) | YES  |     | NULL    |                |
+--------+-------------+------+-----+---------+----------------+
3 rows in set (0.04 sec)

mysql> insert into Track(t_name, type) values('Always been you','Audio');
Query OK, 1 row affected (0.00 sec)

mysql> insert into Track(t_name, type) values('Closer','Video');
Query OK, 1 row affected (0.00 sec)

mysql> insert into Track(t_name, type) values('Ghungroo','Video');
Query OK, 1 row affected (0.00 sec)

mysql> insert into Track(t_name, type) values('Tere bin','Audio');
Query OK, 1 row affected (0.00 sec)

mysql> insert into Track(t_name, type) values('Hasi Ban Gaye','Audio');
Query OK, 1 row affected (0.00 sec)

mysql> desc search;
+----------+-------------+------+-----+---------+-------+
| Field    | Type        | Null | Key | Default | Extra |
+----------+-------------+------+-----+---------+-------+
| id       | int(11)     | YES  |     | NULL    |       |
| a_id     | int(11)     | YES  |     | NULL    |       |
| album_no | int(11)     | YES  |     | NULL    |       |
| t_id     | int(11)     | YES  |     | NULL    |       |
| Genre    | varchar(30) | YES  |     | NULL    |       |
+----------+-------------+------+-----+---------+-------+
5 rows in set (0.00 sec)

mysql> insert into search(id,a_id,album_no,t_id,Genre) values(1,1,3,4,'Romantic');
Query OK, 1 row affected (0.00 sec)

mysql> insert into search(id,a_id,album_no,t_id,Genre) values(2,2,3,5,'Romantic');
Query OK, 1 row affected (0.00 sec)

mysql> insert into search(id,a_id,album_no,t_id,Genre) values(3,3,1,3,'Party');
Query OK, 1 row affected (0.00 sec)

mysql> select * from search;
+------+------+----------+------+----------+
| id   | a_id | album_no | t_id | Genre    |
+------+------+----------+------+----------+
|    1 |    1 |        3 |    4 | Romantic |
|    2 |    2 |        3 |    5 | Romantic |
|    3 |    3 |        1 |    3 | Party    |
+------+------+----------+------+----------+
3 rows in set (0.00 sec)

mysql> select * from album;
+----------+------------------+------+
| album_no | album_name       | year |
+----------+------------------+------+
|        1 | House party Hits | 2020 |
|        2 | Pop rising       | 2021 |
|        3 | Romantic         | 2010 |
+----------+------------------+------+
3 rows in set (0.00 sec)

mysql> select * from track;
+------+-----------------+-------+
| t_id | t_name          | type  |
+------+-----------------+-------+
|    1 | Always been you | Audio |
|    2 | Closer          | Video |
|    3 | Ghungroo        | Video |
|    4 | Tere bin        | Audio |
|    5 | Hasi Ban Gaye   | Audio |
+------+-----------------+-------+
5 rows in set (0.00 sec)

mysql> select * from artist;
+------+----------------+--------+
| a_id | a_name         | gender |
+------+----------------+--------+
|    1 | sonu nigam     | Male   |
|    2 | Shreya Ghoshal | Female |
|    3 | Arijit Singh   | Male   |
+------+----------------+--------+
3 rows in set (0.00 sec)

mysql> select * from user;
+----+-------------+-----------+--------+------------+--------------------+------------+
| id | user_name   | password  | gender | ph_number  | email_id           | Dob        |
+----+-------------+-----------+--------+------------+--------------------+------------+
|  1 | Tanima@2001 | Tan@4101  | Female | 9563248412 | tanidam@gmail.com  | 2001-10-04 |
|  2 | Siddhi2001  | Sidd@9501 | Female | 9632587410 | siddhih1@gmail.com | 2001-05-09 |
|  3 | Ingrid@2001 | Ing@01    | Female | 9602357418 | ingseq@gmail.com   | 2001-07-17 |
+----+-------------+-----------+--------+------------+--------------------+------------+
3 rows in set (0.00 sec)

mysql> create table report(r_id int primary key auto_increment,id int references user on delete cascade on update set null);
Query OK, 0 rows affected (0.13 sec)

mysql> desc report;
+-------+---------+------+-----+---------+----------------+
| Field | Type    | Null | Key | Default | Extra          |
+-------+---------+------+-----+---------+----------------+
| r_id  | int(11) | NO   | PRI | NULL    | auto_increment |
| id    | int(11) | YES  |     | NULL    |                |
+-------+---------+------+-----+---------+----------------+
2 rows in set (0.00 sec)

mysql> insert into report(id) values(1);
Query OK, 1 row affected (0.00 sec)

mysql> insert into report(id) values(3);
Query OK, 1 row affected (0.00 sec)

mysql> insert into report(id) values(2);
Query OK, 1 row affected (0.00 sec)

mysql> select * from report;
+------+------+
| r_id | id   |
+------+------+
|    1 |    1 |
|    2 |    3 |
|    3 |    2 |
+------+------+
3 rows in set (0.00 sec)

mysql> show tables;
+-----------------+
| Tables_in_tydb6 |
+-----------------+
| album           |
| artist          |
| report          |
| search          |
| track           |
| user            |
+-----------------+
6 rows in set (0.00 sec)

mysql> use tydb6;
Database changed
mysql> select * from artist;
+------+----------------+--------+
| a_id | a_name         | gender |
+------+----------------+--------+
|    1 | sonu nigam     | Male   |
|    2 | Shreya Ghoshal | Female |
|    3 | Arijit Singh   | Male   |
+------+----------------+--------+
3 rows in set (0.08 sec)

mysql> desc artist;
+--------+-------------+------+-----+---------+----------------+
| Field  | Type        | Null | Key | Default | Extra          |
+--------+-------------+------+-----+---------+----------------+
| a_id   | int(11)     | NO   | PRI | NULL    | auto_increment |
| a_name | varchar(50) | YES  |     | NULL    |                |
| gender | varchar(10) | YES  |     | NULL    |                |
+--------+-------------+------+-----+---------+----------------+
3 rows in set (0.10 sec)

mysql> insert into artist(a_name,gender) values('Charlie Puth','Male');
Query OK, 1 row affected (0.05 sec)

mysql> insert into artist(a_name,gender) values('Maroon 5','Male');
Query OK, 1 row affected (0.00 sec)

mysql> insert into artist(a_name,gender) values('Olivia Rodrigo','Female');
Query OK, 1 row affected (0.00 sec)

mysql> insert into artist(a_name,gender) values('Adnan Sami','Male');
Query OK, 1 row affected (0.00 sec)

mysql> insert into artist(a_name,gender) values('Sunidhi Chauhan','Female');
Query OK, 1 row affected (0.00 sec)

mysql> insert into artist(a_name,gender) values('Harry Styles','Male');
Query OK, 1 row affected (0.00 sec)

mysql> select * from artist;
+------+-----------------+--------+
| a_id | a_name          | gender |
+------+-----------------+--------+
|    1 | sonu nigam      | Male   |
|    2 | Shreya Ghoshal  | Female |
|    3 | Arijit Singh    | Male   |
|    4 | Charlie Puth    | Male   |
|    5 | Maroon 5        | Male   |
|    6 | Olivia Rodrigo  | Female |
|    7 | Adnan Sami      | Male   |
|    8 | Sunidhi Chauhan | Female |
|    9 | Harry Styles    | Male   |
+------+-----------------+--------+
9 rows in set (0.00 sec)

mysql> select * from album;
+----------+------------------+------+
| album_no | album_name       | year |
+----------+------------------+------+
|        1 | House party Hits | 2020 |
|        2 | Pop rising       | 2021 |
|        3 | Romantic         | 2010 |
+----------+------------------+------+
3 rows in set (0.07 sec)

mysql> desc album;
+------------+-------------+------+-----+---------+----------------+
| Field      | Type        | Null | Key | Default | Extra          |
+------------+-------------+------+-----+---------+----------------+
| album_no   | int(11)     | NO   | PRI | NULL    | auto_increment |
| album_name | varchar(30) | YES  |     | NULL    |                |
| year       | int(11)     | YES  |     | NULL    |                |
+------------+-------------+------+-----+---------+----------------+
3 rows in set (0.03 sec)

mysql> insert into album(album_name,year) values('Chill Hits',2020);
Query OK, 1 row affected (0.03 sec)

mysql> insert into album(album_name,year) values('Bollywood Mush',2021);
Query OK, 1 row affected (0.00 sec)

mysql> insert into album(album_name,year) values('Mood Booster',2021);
Query OK, 1 row affected (0.00 sec)

mysql> select * from album;
+----------+------------------+------+
| album_no | album_name       | year |
+----------+------------------+------+
|        1 | House party Hits | 2020 |
|        2 | Pop rising       | 2021 |
|        3 | Romantic         | 2010 |
|        4 | Chill Hits       | 2020 |
|        5 | Bollywood Mush   | 2021 |
|        6 | Mood Booster     | 2021 |
+----------+------------------+------+
6 rows in set (0.00 sec)

mysql> select * from track;
+------+-----------------+-------+
| t_id | t_name          | type  |
+------+-----------------+-------+
|    1 | Always been you | Audio |
|    2 | Closer          | Video |
|    3 | Ghungroo        | Video |
|    4 | Tere bin        | Audio |
|    5 | Hasi Ban Gaye   | Audio |
+------+-----------------+-------+
5 rows in set (0.02 sec)

mysql> desc track;
+--------+-------------+------+-----+---------+----------------+
| Field  | Type        | Null | Key | Default | Extra          |
+--------+-------------+------+-----+---------+----------------+
| t_id   | int(11)     | NO   | PRI | NULL    | auto_increment |
| t_name | varchar(30) | YES  |     | NULL    |                |
| type   | varchar(30) | YES  |     | NULL    |                |
+--------+-------------+------+-----+---------+----------------+
3 rows in set (0.01 sec)

mysql> insert into track(t_name,type) values('Cheating on you','Audio');
Query OK, 1 row affected (0.03 sec)

mysql> insert into track(t_name,type) values('Memories','Video');
Query OK, 1 row affected (0.00 sec)

mysql> insert into track(t_name,type) values('Drivers license','Audio');
Query OK, 1 row affected (0.00 sec)

mysql> insert into track(t_name,type) values('Tu yaad aya','Audio');
Query OK, 1 row affected (0.00 sec)

mysql> insert into track(t_name,type) values('Lae dooba','Audio');
Query OK, 1 row affected (0.00 sec)

mysql> insert into track(t_name,type) values('Watermelon sugar','Audio');
Query OK, 1 row affected (0.00 sec)

mysql> insert into track(t_name,type) values('Good 4 u','Video');
Query OK, 1 row affected (0.00 sec)

mysql> select * from track;
+------+------------------+-------+
| t_id | t_name           | type  |
+------+------------------+-------+
|    1 | Always been you  | Audio |
|    2 | Closer           | Video |
|    3 | Ghungroo         | Video |
|    4 | Tere bin         | Audio |
|    5 | Hasi Ban Gaye    | Audio |
|    6 | Cheating on you  | Audio |
|    7 | Memories         | Video |
|    8 | Drivers license  | Audio |
|    9 | Tu yaad aya      | Audio |
|   10 | Lae dooba        | Audio |
|   11 | Watermelon sugar | Audio |
|   12 | Good 4 u         | Video |
+------+------------------+-------+
12 rows in set (0.00 sec)

mysql> select * from search;
+------+------+----------+------+----------+
| id   | a_id | album_no | t_id | Genre    |
+------+------+----------+------+----------+
|    1 |    1 |        3 |    4 | Romantic |
|    2 |    2 |        3 |    5 | Romantic |
|    3 |    3 |        1 |    3 | Party    |
+------+------+----------+------+----------+
3 rows in set (0.03 sec)

mysql> insert into search(id,a_id,album_no,t_id,Genre) values(3,5,4,7,'Reggae pop');
Query OK, 1 row affected (0.02 sec)

mysql> insert into search(id,a_id,album_no,t_id,Genre) values(1,9,6,11,'Indie pop');
Query OK, 1 row affected (0.00 sec)

mysql> insert into search(id,a_id,album_no,t_id,Genre) values(2,6,4,8,'Pop');
Query OK, 1 row affected (0.00 sec)

mysql> insert into search(id,a_id,album_no,t_id,Genre) values(1,8,5,10,'Romantic');
Query OK, 1 row affected (0.00 sec)

mysql> insert into search(id,a_id,album_no,t_id,Genre) values(2,4,4,6,'Pop');
Query OK, 1 row affected (0.00 sec)

mysql> select * from search;
+------+------+----------+------+------------+
| id   | a_id | album_no | t_id | Genre      |
+------+------+----------+------+------------+
|    1 |    1 |        3 |    4 | Romantic   |
|    2 |    2 |        3 |    5 | Romantic   |
|    3 |    3 |        1 |    3 | Party      |
|    3 |    5 |        4 |    7 | Reggae pop |
|    1 |    9 |        6 |   11 | Indie pop  |
|    2 |    6 |        4 |    8 | Pop        |
|    1 |    8 |        5 |   10 | Romantic   |
|    2 |    4 |        4 |    6 | Pop        |
+------+------+----------+------+------------+
8 rows in set (0.00 sec)

*****************************************************************

mysql> create table report1(r_id int primary key auto_increment,u_id int references user on delete cascade on update set null);
Query OK, 0 rows affected (0.04 sec)

mysql> insert into report1(u_id) values(1);
Query OK, 1 row affected (0.04 sec)

mysql> insert into report1(u_id) values(3);
Query OK, 1 row affected (0.00 sec)

mysql> insert into report1(u_id) values(2);
Query OK, 1 row affected (0.00 sec)

mysql> select * from user;
+----+-------------+-----------+--------+------------+--------------------+------------+
| id | user_name   | password  | gender | ph_number  | email_id           | Dob        |
+----+-------------+-----------+--------+------------+--------------------+------------+
|  1 | Tanima@2001 | Tan@4101  | Female | 9563248412 | tanidam@gmail.com  | 2001-10-04 |
|  2 | Siddhi2001  | Sidd@9501 | Female | 9632587410 | siddhih1@gmail.com | 2001-05-09 |
|  3 | Ingrid@2001 | Ing@01    | Female | 9602357418 | ingseq@gmail.com   | 2001-07-17 |
+----+-------------+-----------+--------+------------+--------------------+------------+
3 rows in set (0.00 sec)

mysql> select * from report1;
+------+------+
| r_id | u_id |
+------+------+
|    1 |    1 |
|    2 |    3 |
|    3 |    2 |
+------+------+
3 rows in set (0.00 sec)

mysql> select * from report1 where u_id=3;
+------+------+
| r_id | u_id |
+------+------+
|    2 |    3 |
+------+------+
1 row in set (0.10 sec)

mysql> select * from user,report1 where  user.id=report1.u_id and u_id=3;
+----+-------------+----------+--------+------------+------------------+------------+------+------+
| id | user_name   | password | gender | ph_number  | email_id         | Dob        | r_id | u_id |
+----+-------------+----------+--------+------------+------------------+------------+------+------+
|  3 | Ingrid@2001 | Ing@01   | Female | 9602357418 | ingseq@gmail.com | 2001-07-17 |    2 |    3 |
+----+-------------+----------+--------+------------+------------------+------------+------+------+
1 row in set (0.04 sec)

mysql> alter table report1 change u_id id int;
Query OK, 0 rows affected (0.26 sec)
Records: 0  Duplicates: 0  Warnings: 0

mysql> desc report1;
+-------+---------+------+-----+---------+----------------+
| Field | Type    | Null | Key | Default | Extra          |
+-------+---------+------+-----+---------+----------------+
| r_id  | int(11) | NO   | PRI | NULL    | auto_increment |
| id    | int(11) | YES  |     | NULL    |                |
+-------+---------+------+-----+---------+----------------+
2 rows in set (0.00 sec)

mysql> select * from report1;
+------+------+
| r_id | id   |
+------+------+
|    1 |    1 |
|    2 |    3 |
|    3 |    2 |
+------+------+
3 rows in set (0.00 sec)

888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
mysql> alter table user add type char(20);
Query OK, 4 rows affected (0.12 sec)
Records: 4  Duplicates: 0  Warnings: 0

mysql> select * from user;
+----+-------------+-----------+--------+------------+--------------------+------------+------+
| id | user_name   | password  | gender | ph_number  | email_id           | Dob        | type |
+----+-------------+-----------+--------+------------+--------------------+------------+------+
|  1 | Tanima@2001 | Tan@4101  | Female | 9563248412 | tanidam@gmail.com  | 2001-10-04 | NULL |
|  2 | Siddhi2001  | Sidd@9501 | Female | 9632587410 | siddhih1@gmail.com | 2001-05-09 | NULL |
|  3 | Ingrid@2001 | Ing@01    | Female | 9602357418 | ingseq@gmail.com   | 2001-07-17 | NULL |
|  5 | 5410_tanima | 1234      |        |      78990 | tan@gmail.com      | 2001-09-28 | NULL |
+----+-------------+-----------+--------+------------+--------------------+------------+------+
4 rows in set (0.00 sec)

mysql> update user set type='admin' where id=1;
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> select * from user;
+----+-------------+-----------+--------+------------+--------------------+------------+-------+
| id | user_name   | password  | gender | ph_number  | email_id           | Dob        | type  |
+----+-------------+-----------+--------+------------+--------------------+------------+-------+
|  1 | Tanima@2001 | Tan@4101  | Female | 9563248412 | tanidam@gmail.com  | 2001-10-04 | admin |
|  2 | Siddhi2001  | Sidd@9501 | Female | 9632587410 | siddhih1@gmail.com | 2001-05-09 | NULL  |
|  3 | Ingrid@2001 | Ing@01    | Female | 9602357418 | ingseq@gmail.com   | 2001-07-17 | NULL  |
|  5 | 5410_tanima | 1234      |        |      78990 | tan@gmail.com      | 2001-09-28 | NULL  |
+----+-------------+-----------+--------+------------+--------------------+------------+-------+
4 rows in set (0.00 sec)

mysql> update user set type='user' where id=5;
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> select * from user;
+----+-------------+-----------+--------+------------+--------------------+------------+-------+
| id | user_name   | password  | gender | ph_number  | email_id           | Dob        | type  |
+----+-------------+-----------+--------+------------+--------------------+------------+-------+
|  1 | Tanima@2001 | Tan@4101  | Female | 9563248412 | tanidam@gmail.com  | 2001-10-04 | admin |
|  2 | Siddhi2001  | Sidd@9501 | Female | 9632587410 | siddhih1@gmail.com | 2001-05-09 | NULL  |
|  3 | Ingrid@2001 | Ing@01    | Female | 9602357418 | ingseq@gmail.com   | 2001-07-17 | NULL  |
|  5 | 5410_tanima | 1234      |        |      78990 | tan@gmail.com      | 2001-09-28 | user  |
+----+-------------+-----------+--------+------------+--------------------+------------+-------+
4 rows in set (0.00 sec)