DROP DATABASE IF EXISTS finaldb;
CREATE DATABASE finaldb;
USE finaldb;

CREATE TABLE auth
(
    userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username    varchar(60),
    password    varchar(60),
    firstname   varchar(60),
    lastname    varchar(60),
    email       varchar(60),
    phone       varchar(60)
);

/*
CREATE DATABASE finaldb;
USE finaldb;
CREATE TABLE auth (userid int NOT NULL AUTO_INCREMENT,primary key (userid),username varchar(60),password varchar(60),firstname varchar(60),lastname varchar(60),email varchar(60),phone varchar(60), );
insert into auth(userid,username,password,firstname,lastname,email,phone) values(1,'char','1','charlie','walsh','1234567@csun.com','1111111111');
insert into auth(userid,username,password,firstname,lastname,email,phone) values(2,'jae','2','jae','lee','2234567@csun.com','2222222222');
insert into auth(userid,username,password,firstname,lastname,email,phone) values(3,'Johnn','3','Johnna','K','3234567@csun.com','3333333333');

*/
