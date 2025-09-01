CREATE DATABASE book_exchange;

USE book_exchange;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    author VARCHAR(100) NOT NULL,
    category VARCHAR(100),
    book_condition VARCHAR(50),
    owner_name VARCHAR(100),
    contact VARCHAR(100)
);
