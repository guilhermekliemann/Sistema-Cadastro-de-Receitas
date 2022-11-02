-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Nov-2022 às 23:57
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projectstw_sql`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `ingrediente_id` int(11) NOT NULL,
  `nome_ingrediente` varchar(64) NOT NULL,
  `previsto_kg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`ingrediente_id`, `nome_ingrediente`, `previsto_kg`) VALUES
(64, 'emily', 111);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes_receitas`
--

CREATE TABLE `ingredientes_receitas` (
  `ingrediente_id` int(11) NOT NULL,
  `receita_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ingredientes_receitas`
--

INSERT INTO `ingredientes_receitas` (`ingrediente_id`, `receita_id`) VALUES
(64, 97);

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `receita_id` int(11) NOT NULL,
  `nome_receita` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`receita_id`, `nome_receita`) VALUES
(97, 'Ração de Porco');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`ingrediente_id`);

--
-- Índices para tabela `ingredientes_receitas`
--
ALTER TABLE `ingredientes_receitas`
  ADD PRIMARY KEY (`ingrediente_id`,`receita_id`),
  ADD KEY `receita_id` (`receita_id`);

--
-- Índices para tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`receita_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `ingrediente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `receita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ingredientes_receitas`
--
ALTER TABLE `ingredientes_receitas`
  ADD CONSTRAINT `ingredientes_receitas_ibfk_1` FOREIGN KEY (`ingrediente_id`) REFERENCES `ingredientes` (`ingrediente_id`),
  ADD CONSTRAINT `ingredientes_receitas_ibfk_2` FOREIGN KEY (`receita_id`) REFERENCES `receitas` (`receita_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
