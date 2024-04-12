create table cursos (
	id_curso int PRIMARY KEY auto_increment,
    nome_curso varchar(60) not null,
    codigo_curso varchar(6) not null
);

insert into cursos (nome_curso, codigo_curso)
values
	('Administração', 'AD5010'), 
	('Engenharia Civil', 'EC0120'), 
	('Engenharia de Computação', 'ET0230'), 
	('Engenharia Mecânica', 'EM2012'), 
	('Sistemas de Informação', 'SI1205');
COMMIT;