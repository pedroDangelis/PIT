create database VMH;
use VMH;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(250),
    senha VARCHAR(250)
);

insert into usuario(email, senha, rg, nome, telemovel, admin) values (
	'testeadmin@gmail.com',
    '123456',
    'testerg',
    'admin',
    '135246357',
    true
);

select * from usuario;

ALTER TABLE usuario ADD rg varchar(20);
ALTER TABLE usuario ADD nome varchar(20);
ALTER TABLE usuario ADD telemovel varchar(20);
ALTER TABLE usuario ADD lugar varchar(300);
ALTER TABLE usuario ADD crp varchar(20);
alter table usuario ADD admin boolean default false;
