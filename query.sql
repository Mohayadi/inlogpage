DROP DATABASE IF EXISTS login_Info;
CREATE DATABASE login_Info;
USE login_Info;
CREATE TABLE user_info(
	userId int AUTO_INCREMENT PRIMARY KEY NOT NULL,
	email char(50) NOT NULL,
	pass varchar(50) NOT NULL
);

CREATE TABLE register(
    register_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(50),
	tussenVoegsel VARCHAR(50),
    last_name VARCHAR(50),
    email char(50),
    pass char(50),
    userId int,
    FOREIGN KEY(userId) REFERENCES user_info(userId)
);
