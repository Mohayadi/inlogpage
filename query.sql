-- Maak de database 'login_Info' aan (als deze nog niet bestaat)
DROP DATABASE IF EXISTS login_Info;

CREATE DATABASE login_Info;

USE login_Info;

-- Maak de tabel 'register' aan
CREATE TABLE register (
    register_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(50),
    tussenVoegsel VARCHAR(50),
    last_name VARCHAR(50),
    email CHAR(50),
    pass CHAR(50)
);

-- Maak de tabel 'user_info' aan met een externe sleutelrelatie
CREATE TABLE user_info (
    userId INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    email CHAR(50) NOT NULL,
    pass CHAR(50) NOT NULL,
    register_id INT,
    FOREIGN KEY (register_id) REFERENCES register (register_id) ON DELETE CASCADE
);

-- Voeg privileges toe aan de gebruiker 'osamaelanzi' nadat de database en tabellen zijn aangemaakt
GRANT SELECT, INSERT, UPDATE, DELETE ON login_Info.* TO 'osamaelanzi'@'localhost';
GRANT CREATE ON login_Info.* TO 'osamaelanzi'@'localhost';
GRANT DROP ON login_Info.* TO 'osamaelanzi'@'localhost';
GRANT CREATE, DROP ON login_Info.register TO 'osamaelanzi'@'localhost';
GRANT CREATE, DROP ON login_Info.user_info TO 'osamaelanzi'@'localhost';

-- Zorg ervoor dat de wijzigingen in privileges van kracht worden
FLUSH PRIVILEGES;

