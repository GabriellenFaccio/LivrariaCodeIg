-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Maio-2020 às 15:23
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(255) DEFAULT NULL,
  `cat_status` char(1) NOT NULL,
  `cat_data_criacao` datetime DEFAULT NULL,
  `cat_data_modificacao` datetime DEFAULT NULL,
  `cat_descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nome`, `cat_status`, `cat_data_criacao`, `cat_data_modificacao`, `cat_descricao`) VALUES
(1, 'Animacao', '1', '2020-06-05 16:15:01', '2020-06-05 16:15:03', NULL),
(2, 'Suspense', '0', '2020-06-05 16:15:01', '2020-06-05 16:15:03', NULL),
(3, 'Terror', '1', '2020-06-05 16:15:01', '2020-06-05 16:15:03', NULL),
(4, 'Romance', '1', '2020-06-05 16:15:01', '2020-06-05 16:15:03', NULL),
(11, 'Ficcao', '1', '2020-05-13 10:20:52', '2020-05-13 10:20:52', 'categoria de ficcao'),
(12, 'Loops', '0', '2020-05-13 10:21:21', '2020-05-13 10:21:21', 'categoria de loops');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `liv_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `liv_titulo` varchar(255) DEFAULT NULL,
  `liv_autor` varchar(255) DEFAULT NULL,
  `liv_status` varchar(255) DEFAULT NULL,
  `liv_num_pagina` int(11) DEFAULT NULL,
  `liv_num_edicao` int(11) DEFAULT NULL,
  `liv_editora` varchar(200) DEFAULT NULL,
  `liv_data_criacao` datetime DEFAULT NULL,
  `liv_data_modificacao` datetime DEFAULT NULL,
  `liv_descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`liv_id`, `cat_id`, `liv_titulo`, `liv_autor`, `liv_status`, `liv_num_pagina`, `liv_num_edicao`, `liv_editora`, `liv_data_criacao`, `liv_data_modificacao`, `liv_descricao`) VALUES
(3, 1, 'João e Maria', 'Maria', 'Disponivel', 100, 1, 'TreePaper', NULL, NULL, 'Um livro infantil para momentos e rondas noturnas'),
(4, 3, 'A floresta Escura', 'Joao Lice', 'Emprestado', 200, 2, 'TreePaper', NULL, NULL, 'Um livro que fará voce tremer.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`liv_id`),
  ADD KEY `fk_LivCat` (`cat_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `liv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `fk_LivCat` FOREIGN KEY (`cat_id`) REFERENCES `categoria` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
