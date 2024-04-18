-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 22-Nov-2022 às 23:53
-- Versão do servidor: 8.0.30
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

--
-- Extraindo dados da tabela `alunos_professores`
--

insert into alunos_professores(id_aluno, id_professor)
values
	(1,1), (2,1),        (4,1), (5,1), (6,1), (7,1), (8,1), (9,1), (10,1),
    (1,2), (2,2), (3,2), (4,2), (5,2),
    (1,3), (2,3),                      (6,3), (7,3),        (9,3), (10,3),
    (1,4),        (3,4),        (5,4), (6,4),
                                (5,5),                             (10,5),
                                       (6,6), (7,6), (8,6), (9,6), (10,6),
           (2,7), (3,7), (4,7),        (6,7), (7,7), (8,7),        (10,7);
commit;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;