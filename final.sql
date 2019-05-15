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
insert into auth(userid,username,password,firstname,lastname,email,phone) values(1,'Jon','cat','Jonathan','Kennedy','jonathan.kennedy@my.csun.edu','(555)-555-5555');
insert into auth(userid,username,password,firstname,lastname,email,phone) values(2,'charlesw','knife','Charles','Walsh','charles.walsh@my.csun.edu','(555)-555-5556');
insert into auth(userid,username,password,firstname,lastname,email,phone) values(3,'Somebody','no','First','Last','first.last@google.com','(555)-555-5557');

*/
