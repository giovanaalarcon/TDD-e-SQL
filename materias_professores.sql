create table materias_professores(
    materiaID int references materia(id_materia),
    professorID int references professor(id_professor),
    primary key (materiaID, professorID)
);

insert into materias_professores 
values
	(1,1), (2,1),
    (3,2),
    (4,3),
    (5,4), (6,4),
    (8,5),
    (9,6),
    (10,7);
COMMIT;