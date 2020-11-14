CREATE DATABASE guestbook;
CREATE USER 'entryUser'@'localhost' IDENTIFIED WITH mysql_native_password by '1c947d57fce2f21ce0b43fe2ed7cd361';

-- CREATE USER 'entryUser'@'localhost' IDENTIFIED BY '1234';
-- GRANT SELECT,INSERT ON guestbook.* to 'entryUser'@'localhost';
-- alter user 'entryUser'@'localhost' identified with mysql_native_password by '1234';

use guestbook;
CREATE TABLE entry (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20) NOT NULL,
guestEntry VARCHAR(150) NOT NULL
);
