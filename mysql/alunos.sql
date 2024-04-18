create table alunos (
	id_aluno int PRIMARY KEY auto_increment,
    nome varchar(60) not null,
    ra int not null,
    idade int not null,
    cursoID int not null,
    FOREIGN KEY (cursoID) REFERENCES curso(id_curso)
);

insert into alunos (nome, ra, idade, cursoID)
values
	('Daniela Hayashi', '22005265', '22', 3), 
	('Carlos Teixeira', '22004932', '24', 1), 
	('Beatriz Newman', '22001652', '19', 3),
	('Matheus Silveira', '22003456', '22', 2), 
	('Flavia Medeiros', '22009596', '20', 3), 
	('Paola Pereira', '22007712', '20', 4), 
	('Giovana Alarcon', '22003652', '19', 3),
	('Luis Miguel', '22008967', '25', 5), 
	('Luana Baptista', '22006728', '20', 3),
	('Marcos Silva', '22003768', '22', 2);
COMMIT;