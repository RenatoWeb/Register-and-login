CREATE DATABASE aprendizado;
USE aprendizado;

CREATE TABLE usuario(
	id SMALLINT AUTO_INCREMENT,
	nome VARCHAR (50),
    dt_nasc DATE,
    email VARCHAR (50),
    senha VARCHAR (20),
    PRIMARY KEY(id)
);

SELECT * FROM usuario;

TRUNCATE TABLE usuario;

