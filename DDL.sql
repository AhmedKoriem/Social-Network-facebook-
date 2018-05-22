CREATE DATABASE facebook;
use facebook;
CREATE Table Users(
	user_id INT(10) PRIMARY KEY INCREMENT,
	firstname VARCHAR(20) not null,
	lastname VARCHAR(20) not null,
	password VARCHAR(50) not null,
	email    VARCHAR(50) UNIQUE not null ,
    phonenumber VARCHAR(20),
	gender Bit(1) not null,
	birthdate Date not null,
	profile VARCHAR(50),
	hometown VARCHAR(50),
	marital_status VARCHAR(50),
    About_me Text(500)	
);