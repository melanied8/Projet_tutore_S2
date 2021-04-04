CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE list (
    idList INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    id INT(6) NOT NULL,
    FOREIGN KEY (id) REFERENCES users(id)

);


CREATE TABLE listItems (
    idItem INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(30) NOT NULL,
    deadline DATE NOT NULL ,
    idList INT(6) NOT NULL,
    FOREIGN KEY (idList) REFERENCES list(idList)

)

