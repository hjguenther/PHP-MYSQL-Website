USE misc;
CREATE TABLE users (
    user_id INTEGER NOT NULL AUTO_INCREMENT,
    name VARCHAR(128),
    email VARCHAR(128),
    password VARCHAR(128),
    PRIMARY Key(user_id),
    INDEX(email)
) ENGINE = INNODB, CHARSET=Utf8;
