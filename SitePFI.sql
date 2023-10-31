create database pfi;
use pfi;

create table if not exists usuarios(
	id int(11) NOT NULL AUTO_INCREMENT,
    nome varchar(40) NOT NULL,
    email varchar(40) NOT NULL,
    senha varchar(40) NOT NULL,
    pontos int(10) NOT NULL,
    tipo varchar(20) NOT NULL,
	PRIMARY KEY (id)
);

create table if not exists texto(
	id int(11) NOT NULL AUTO_INCREMENT,
    titulo varchar(40) NOT NULL,
    corpo LONGTEXT NOT NULL,
    autor varchar(40) NOT NULL,
    dat date NOT NULL,
    tipo varchar(20) NOT NULL,
	PRIMARY KEY (id)
);

create table if not exists comentarios(
	id int(11) NOT NULL AUTO_INCREMENT,
    id_texto int(11) NOT NULL,
    corpo TEXT,
    autor varchar(40),
    dat date,
    tipo varchar(20),
	PRIMARY KEY (id)
);

create table if not exists denuncia(
	id int(11) NOT NULL AUTO_INCREMENT,
    id_texto int(11) NOT NULL,
	PRIMARY KEY (id)
);

select * from usuarios;
select * from texto;
select * from denuncia;
select * from comentarios;

# É necessário inserir esse usuário na tabela pois o projeto requer ao menos um administrador já cadastrado.
insert into usuarios (nome, email, senha, pontos, tipo) values ('usuario', 'mail@gmail.com', '123', '0', 'Administrador');