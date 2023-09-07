DROP DATABASE IF EXISTS login_Info;
CREATE DATABASE login_Info;
USE login_Info;
CREATE TABLE user_info (
	userId int AUTO_INCREMENT PRIMARY KEY NOT NULL,
	email char(50) NOT NULL,
	pass varchar(50) NOT NULL
);
INSERT INTO user_info 	(email, pass)
VALUES 	('test@gmail.com', 'root123');
