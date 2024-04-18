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
-- Extraindo dados da tabela `students`
--

insert into alunos (nome, RA, idade, curso_id)
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
commit;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;