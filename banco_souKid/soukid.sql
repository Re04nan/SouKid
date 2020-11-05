-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2020 às 17:54
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `soukid`
--
CREATE DATABASE IF NOT EXISTS `soukid` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `soukid`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_escolar` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(255) NOT NULL,
  `data_nascto_aluno` date NOT NULL,
  `login_aluno` varchar(12) NOT NULL,
  `senha_aluno` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_escolar`, `id_aluno`, `nome_aluno`, `data_nascto_aluno`, `login_aluno`, `senha_aluno`) VALUES
(1001, 3141, 'Amanda Santos', '2015-01-01', '10013141', '8e309b9e9cc9'),
(1001, 3142, 'Matheus Moreira', '2015-02-02', '10013142', '5942b611a0b0');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_escolar`,`id_aluno`),
  ADD UNIQUE KEY `login_aluno` (`login_aluno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
