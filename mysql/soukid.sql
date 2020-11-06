-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Nov-2020 às 07:50
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id_escolar` int NOT NULL,
  `id_aluno` int NOT NULL,
  `nome_aluno` varchar(255) NOT NULL,
  `data_nascto_aluno` date NOT NULL,
  `login_aluno` varchar(12) NOT NULL,
  `senha_aluno` varchar(12) NOT NULL,
  PRIMARY KEY (`id_escolar`,`id_aluno`),
  UNIQUE KEY `login_aluno` (`login_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_escolar`, `id_aluno`, `nome_aluno`, `data_nascto_aluno`, `login_aluno`, `senha_aluno`) VALUES
(1001, 3141, 'Amanda Santos', '2015-01-01', '10013141', '8e309b9e9cc9'),
(1001, 3142, 'Matheus Moreira', '2015-02-02', '10013142', '5942b611a0b0'),
(1002, 2014, 'ADM Teste', '0000-00-00', 'admteste', '12345678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
