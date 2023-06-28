create database VMH;
use VMH;

create table usuario (
	id int auto_increment primary key,
    email varchar(250),
    senha varchar(250)
);

select * from usuario;

ALTER TABLE usuario ADD rg varchar(20);
ALTER TABLE usuario ADD nome varchar(20);
ALTER TABLE usuario ADD telemovel varchar(20);
ALTER TABLE usuario ADD lugar varchar(300);
ALTER TABLE usuario ADD crp varchar(20);

ALTER TABLE usuario DROP COLUMN local;
