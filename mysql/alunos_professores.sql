create table alunos_professores(
    alunoID int references aluno(id_aluno),
    professorID int references professor(id_professor),
    primary key (alunoID, professorID)
);

insert into alunos_professores 
values
	(1,1), (2,1),        (4,1), (5,1), (6,1), (7,1), (8,1), (9,1), (10,1),
    (1,2), (2,2), (3,2), (4,2), (5,2),
    (1,3), (2,3),                      (6,3), (7,3),        (9,3), (10,3),
    (1,4),        (3,4),        (5,4), (6,4),
                                (5,5),                             (10,5),
                                       (6,6), (7,6), (8,6), (9,6), (10,6),
           (2,7), (3,7), (4,7),        (6,7), (7,7), (8,7),        (10,7);
COMMIT;