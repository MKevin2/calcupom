create database dbcalcupom;
use dbcalcupom;

create table tbFeedback (
	id int primary key auto_increment,
    nome varchar(80) not null,
    email varchar(80) not null,
    mensagem varchar(300) not null
);

select * from tbFeedback;