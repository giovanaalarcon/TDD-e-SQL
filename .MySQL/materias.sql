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

insert into materias(codigo, nome, curso_id, professor_id) 
values 
	('P0120', 'Calculo_1', 2, 1),
    ('P0121', 'Desenho_Grafico', 2, 1),
    ('P0122', 'Fisica', 4, 2),
    ('P0123', 'Mecanica dos Solidos', 4, 3),
    ('P0124', 'Python', 3, 4),
    ('P0125', 'Javascript', 3, 4),
    ('P0126', 'Economia', 1, 5),
    ('P0127', 'Empreendedorismo', 1, 6),
    ('P0128', 'Marketing', 1, 6),
    ('P0129', 'Aplicativos', 5, 7);
commit;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;