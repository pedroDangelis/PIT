create database VMH;
use VMH;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(250),
    senha VARCHAR(250)
);

CREATE TABLE `questionario` (
  `resposta1` varchar(250) NOT NULL,
  `resposta2` varchar(250) NOT NULL,
  `resposta3` varchar(250) NOT NULL,
  `resposta4` varchar(250) NOT NULL,
  `resposta5` varchar(250) NOT NULL
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
select * from questionario;


ALTER TABLE usuario ADD rg varchar(20);
ALTER TABLE usuario ADD nome varchar(20);
ALTER TABLE usuario ADD telemovel varchar(20);
ALTER TABLE usuario ADD lugar varchar(300);
ALTER TABLE usuario ADD crp varchar(20);
alter table usuario ADD admin boolean default false;
