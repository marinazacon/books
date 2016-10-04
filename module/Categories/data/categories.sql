CREATE TABLE categories
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(50)
);

INSERT INTO books.categories (title) VALUES ('Azione');
INSERT INTO books.categories (title) VALUES ('Romantico');
INSERT INTO books.categories (title) VALUES ('Horror');