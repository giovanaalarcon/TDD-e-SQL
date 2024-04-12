create table professores (
	id_professor int PRIMARY KEY auto_increment,
	nome_professor varchar(50) not null,
	RP varchar(50) not null,
	tempo_casa int not null,
    cursoID int not null,
    FOREIGN KEY (cursoID) REFERENCES curso(id_curso)
);
 
 insert into professores(nome_professor, RP, tempo_casa, cursoID)
 values
	 ('Xastre', 'LX123','12',1),
	 ('Lucia', 'LG234','20',2),
	 ('Takeo','TA134','8', 3),
	 ('Julio','JP456','10', 4),
	 ('Cristiane','CB897','15', 5),
	 ('Juliana','JB356','30', 1),
	 ('Luciano','LT573','11', 3);
COMMIT;