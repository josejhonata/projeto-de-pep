create database clinica;

create user 'esculapio' identified by '@lunoifp3';

grant all privileges on clinica.* to 'esculapio';

create table atendente(matricula varchar(15) primary key not null,nome varchar(30) not null,username varchar(12) not null, password varchar(12) not null);

create table cliente(id int primary key auto_increment,nome varchar(30) not null,username varchar(12) not null, password varchar(12) not null,atendente_matri varchar(15) not null, foreign key(atendente_matri) references atendente(matricula));

create table exame(id int primary key auto_increment, nome varchar(30) not null);

create table cli_ex(id int primary key auto_increment, cliente_id int not null, atendente_matricu int not null, id_exame int not null, data timestamp default now(), resultado varchar(100) default null, foreign key(id_exame) references exame(id));


