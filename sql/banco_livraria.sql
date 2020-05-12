-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Maio-2020 às 19:56
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
  `cat_satus` varchar(255) DEFAULT NULL,
  `cat_data_criacao` datetime DEFAULT NULL,
  `cat_data_modificacao` datetime DEFAULT NULL,
  `liv_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `liv_id` int(10) NOT NULL,
  `liv_titulo` varchar(200) NOT NULL,
  `liv_autor` varchar(100) NOT NULL,
  `liv_categoria` int(11) NOT NULL,
  `liv_status` varchar(100) NOT NULL,
  `liv_num_pagina` int(11) NOT NULL,
  `liv_num_edicao` int(11) NOT NULL,
  `liv_data_criacao` datetime NOT NULL,
  `liv_data_modificacao` datetime NOT NULL,
  `liv_editora` varchar(150) NOT NULL,
  `liv_descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`liv_id`, `liv_titulo`, `liv_autor`, `liv_categoria`, `liv_status`, `liv_num_pagina`, `liv_num_edicao`, `liv_data_criacao`, `liv_data_modificacao`, `liv_editora`, `liv_descricao`) VALUES
(1, 'Abelhas', 'MAria', 0, 'Disponivel', 40, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'TreePaper', 'Livro de abelhas'),
(2, 'PHP 1', 'Professor 2', 0, 'Emprestado', 200, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Caleb', 'Livro em php de ensino ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `fk_CatLiv` (`liv_id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`liv_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `liv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `fk_CatLiv` FOREIGN KEY (`liv_id`) REFERENCES `livros` (`liv_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
