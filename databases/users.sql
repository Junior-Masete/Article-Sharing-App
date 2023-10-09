BEGIN;
CREATE TABLE IF NOT EXISTS `users` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name  VARCHAR(100) NOT NULL,
    surname  VARCHAR(100) NOT NULL,
    email  VARCHAR(100) NOT NULL,
    password  VARCHAR(255) NOT NULL,
    work VARCHAR(100),
    relationship VARCHAR(50),
    location VARCHAR(50),
    api_key VARCHAR(100) NOT NULL
);
