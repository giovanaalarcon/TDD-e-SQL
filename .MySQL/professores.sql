-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 22-Nov-2022 às 23:50
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
-- Extraindo dados da tabela `courses`
--

 insert into professores(nome, RP, tempo_casa, curso_id)
 values
	 ('Xastre', 'LX123','12',1),
	 ('Lucia', 'LG234','20',2),
	 ('Takeo','TA134','8', 3),
	 ('Julio','JP456','10', 4),
	 ('Cristiane','CB897','15', 5),
	 ('Juliana','JB356','30', 1),
	 ('Luciano','LT573','11', 3);
commit;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;