create table materias (
	id_materia int PRIMARY KEY auto_increment,
    codigo_materia varchar(7) not null,
    nome_materia varchar (70) not null,
    cursoID int not null,
    FOREIGN KEY (cursoID) REFERENCES curso(id_curso)
);

insert into materias(codigo_materia, nome_materia, cursoID) 
values 
	('P0120', 'Calculo_1', 2),
    ('P0121', 'Desenho_Grafico', 2),
    ('P0122', 'Fisica', 4),
    ('P0123', 'Mecanica dos Solidos', 4),
    ('P0124', 'Python', 3),
    ('P0125', 'Javascript', 3),
    ('P0126', 'Economia', 1),
    ('P0127', 'Empreendedorismo', 1),
    ('P0128', 'Marketing', 1),
    ('P0129', 'Aplicativos', 5);
COMMIT;
