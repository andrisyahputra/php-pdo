CREATE TABLE customers (
    id VARCHAR(100) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
)ENGINE = InnoDB;

CREATE TABLE admin (
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (username)
)ENGINE = InnoDB;

CREATE TABLE comment (
    id INT NOT NULL AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    komentar TEXT,
    PRIMARY KEY (id)
)ENGINE = InnoDB;