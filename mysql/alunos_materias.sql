create table alunos_materias(
    alunoID int references aluno(id_aluno),
    materiaID int references materia(id_materia),
    primary key (alunoID, materiaID)
);

insert into alunos_materias 
values
	(1,1), (2,1), (3,1), (4,1), (5,1),
    (1,2),        (3,2),        (5,2),        (7,2), (8,2), (9,2),
    (1,3), (2,3), (3,3), (4,3),        (6,3),        (8,3), (9,3), (10,3),
    (1,4), (2,4),
           (2,5), (3,5), (4,5), (5,5),
                                       (6,6), (7,6), (8,6), (9,6), (10,6),
                                              (7,7),
                                       (6,8),        (8,8), (9,8), (10,8),
    (1,9), (2,9),
    (1,10),(2,10),(3,10),(4,10),(5,10),(6,10),(7,10),(8,10),(9,10),(10,10);
COMMIT;