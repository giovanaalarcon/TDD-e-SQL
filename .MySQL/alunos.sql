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
-- Extraindo dados da tabela `alunos`
--



insert into alunos (nome, RA, idade)
values
	('Daniela Hayashi', '22005265', '22'), 
	('Carlos Teixeira', '22004932', '24'), 
	('Beatriz Newman', '22001652', '19'),
	('Matheus Silveira', '22003456', '22'), 
	('Flavia Medeiros', '22009596', '20'), 
	('Paola Pereira', '22007712', '20'), 
	('Giovana Alarcon', '22003652', '19'),
	('Luis Miguel', '22008967', '25'), 
	('Luana Baptista', '22006728', '20'),
	('Marcos Silva', '22003768', '22');
commit;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;