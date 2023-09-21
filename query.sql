DROP DATABASE IF EXISTS login_Info;
CREATE DATABASE login_Info;
USE login_Info;

CREATE TABLE register(
    register_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(50),
	tussenVoegsel VARCHAR(50),
    last_name VARCHAR(50),
    email char(50),
    pass char(50)
);

CREATE TABLE user_info(
	userId int AUTO_INCREMENT PRIMARY KEY NOT NULL,
	email char(50) NOT NULL,
	pass char(50) NOT NULL,
    register_id int,
    FOREIGN KEY(register_id) REFERENCES register(register_id)
);
ALTER TABLE user_info
ADD CONSTRAINT fk_user_info_register
FOREIGN KEY (register_id)
REFERENCES register(register_id)
ON DELETE CASCADE;

