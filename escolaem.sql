-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26/11/2026 às 23:34
-- Versão do servidor: 9.1.0
-- Versão do PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escolaem`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acesso`
--

DROP TABLE IF EXISTS `acesso`;
CREATE TABLE IF NOT EXISTS `acesso` (
  `idAcesso` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`idAcesso`),
  UNIQUE KEY `nome` (`nome`),
  UNIQUE KEY `senha` (`senha`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `acesso`
--

INSERT INTO `acesso` (`idAcesso`, `nome`, `senha`) VALUES
(1, 'JLS', '$2y$10$vEmnEVeo5O.yhkjA7JR8xeN982LRDEeHhyzt8w3dya2jH3khfJhuC'),
(2, 'lsj', '$2y$10$K68V/iXU52oYiyU8BLV6N.D0HBV.VqxAl4X46FeIfn4miNfpYVwfG'),
(3, 'joao', '$2y$10$cghxq3HqwqeMLqfFCh3z1.6WVwNOqwJtftuwSGNdO79xm/VKEJIia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `idAluno` int NOT NULL AUTO_INCREMENT,
  `nomeCompleto` varchar(100) NOT NULL,
  `dataNascimento` varchar(30) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `nomePai` varchar(100) NOT NULL,
  `nomeMae` varchar(100) NOT NULL,
  `idturma` int NOT NULL,
  `idcurso` int NOT NULL,
  PRIMARY KEY (`idAluno`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`idAluno`, `nomeCompleto`, `dataNascimento`, `telefone`, `cpf`, `nomePai`, `nomeMae`, `idturma`, `idcurso`) VALUES
(1, 'Luiz', '2000-01-04', '336564555', '42156654', 'do filho do espirito santo', 'mamae', 5, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `idCurso` int NOT NULL AUTO_INCREMENT,
  `nomeC` varchar(50) NOT NULL,
  `cargaH` varchar(50) NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `curso`
--

INSERT INTO `curso` (`idCurso`, `nomeC`, `cargaH`) VALUES
(5, 'Técnico em Informática', '1800');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `idProfessor` int NOT NULL AUTO_INCREMENT,
  `nomeP` varchar(100) NOT NULL,
  `dataNP` varchar(20) NOT NULL,
  `telefoneP` varchar(30) NOT NULL,
  `cpfP` varchar(50) NOT NULL,
  `salario` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idProfessor`),
  UNIQUE KEY `cpfP` (`cpfP`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `professor`
--

INSERT INTO `professor` (`idProfessor`, `nomeP`, `dataNP`, `telefoneP`, `cpfP`, `salario`) VALUES
(3, 'Mislene', '2000-04-02', '123456', '0123456', 10.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `idTurma` int NOT NULL AUTO_INCREMENT,
  `nomeT` varchar(50) NOT NULL,
  `idcurso` int NOT NULL,
  `turno` varchar(50) NOT NULL,
  `inicio` varchar(50) NOT NULL,
  `termino` varchar(50) NOT NULL,
  `idprofessor` int NOT NULL,
  `sala` int NOT NULL,
  `ano` varchar(50) NOT NULL,
  PRIMARY KEY (`idTurma`),
  UNIQUE KEY `nomeT` (`nomeT`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `turma`
--

INSERT INTO `turma` (`idTurma`, `nomeT`, `idcurso`, `turno`, `inicio`, `termino`, `idprofessor`, `sala`, `ano`) VALUES
(5, 'Turma da programação', 5, 'Noite', '2026-02-20', '2027-12-12', 3, 304, '2026');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
