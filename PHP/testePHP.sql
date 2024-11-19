create database teste;
use teste;

create table Usuario(
	 id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
    senha varchar(100) NOT NULL
);

INSERT INTO Usuario (nome, senha) VALUES
('Cauê', '312613');

select * from Usuario;


