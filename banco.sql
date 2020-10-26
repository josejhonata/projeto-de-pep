create database clinica;

create user 'esculapio' identified by '@lunoifp3';

grant all privileges on clinica.* to 'esculapio';

create table cliente(id int primary key auto_increment,nome varchar(30) not null,username varchar(12) not null, password varchar(12) not null,atendente_matri varchar(15) not null, foreign key(atendente_matri) references atendente(matricula));

create table exame(nome varchar(30) primary key not null,tipo_exame int not null, foreign key(tipo_exame) references tipo_ex(id));

create table cli_ex(id int auto_increment primary key, nome_exame varchar(30) not null , cliente_id int not null, foreign key(nome_exame) references exame(nome),foreign key(cliente_id) references cliente(id));

create table atendente(matricula varchar(15) primary key not null,nome varchar(30) not null,username varchar(12) not null, password varchar(12) not null);

create table resultado(id int auto_increment primary key,exame_nome varchar(30) not null,atendente_matricula varchar(15) not null,foreign key(exame_nome) references exame(nome), foreign key(atendente_matricula) references atendente(matricula));

create table tipo_ex(id int primary key);