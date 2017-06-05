DROP TABLE IF EXISTS users;

CREATE TABLE users (
        user_id INT AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL,
        PRIMARY KEY (user_id)
);