drop database if exists db_mvc;
create database if not exists db_mvc;
use db_mvc;

create table if not exists usuario(
    id int primary key auto_increment,
    nome varchar(45) not null,
    email varchar(100) not null unique,
    senha varchar(100) not null
);

insert into usuario (nome, email, senha) values ("Portugal", "Portugal", sha1("1234"));
