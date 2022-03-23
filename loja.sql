-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Mar-2022 às 21:24
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `precos`
--

CREATE TABLE `precos` (
  `idpreco` int(11) NOT NULL,
  `preco` double(10,2) NOT NULL,
  `produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `precos`
--

INSERT INTO `precos` (`idpreco`, `preco`, `produto_id`) VALUES
(1, 400.00, 1),
(2, 8.00, 2),
(3, 44.00, 3),
(5, 30.60, 6),
(6, 7.20, 5),
(7, 29.70, 7),
(8, 14.40, 8),
(9, 39.20, 9),
(10, 0.00, 10),
(11, 399.20, 11),
(12, 240.00, 12),
(13, 39.60, 13),
(14, 0.90, 14),
(15, 540.00, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idprod` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idprod`, `nome`, `cor`) VALUES
(1, 'Guidão de Bicicleta', 'amarelo'),
(3, 'Bola de futebol', 'vermelho'),
(5, 'Caixa de Lapis ', 'vermelho'),
(7, 'Bola de Basquete', 'verde'),
(9, 'Jaqueta Jeans', 'vermelho'),
(11, 'Geladeira', 'vermelho'),
(12, 'Caixa de Ferramentas', 'amarelo'),
(13, 'Mesa Grande', 'amarelo'),
(14, 'fogão 4 bocas', 'verde'),
(15, 'microoondas', 'verde');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `precos`
--
ALTER TABLE `precos`
  ADD PRIMARY KEY (`idpreco`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idprod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `precos`
--
ALTER TABLE `precos`
  MODIFY `idpreco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
