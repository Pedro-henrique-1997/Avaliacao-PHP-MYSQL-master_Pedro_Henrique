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
-- Banco de dados: `teste_sql`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `cod_prod` int(11) NOT NULL,
  `loj_cod` int(11) NOT NULL,
  `qtd_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`cod_prod`, `loj_cod`, `qtd_prod`) VALUES
(25, 4, 69),
(40, 1, 14),
(67, 1, 34),
(89, 2, 15),
(100, 3, 26),
(170, 2, 37),
(200, 200, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `loj_prod` int(11) NOT NULL,
  `desc_loj` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`loj_prod`, `desc_loj`) VALUES
(1, 'Loja de produtos 1'),
(2, 'Loja de produtos 2'),
(3, 'Loja de produtos 3'),
(4, 'Loja de produtos 4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod_prod` int(8) NOT NULL,
  `loj_cod` int(8) NOT NULL,
  `desc_prod` varchar(40) NOT NULL,
  `dt_inclu_prod` date NOT NULL,
  `preco_prod` double(8,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod_prod`, `loj_cod`, `desc_prod`, `dt_inclu_prod`, `preco_prod`) VALUES
(11, 7, 'Coca cola', '2022-03-01', 9.000),
(25, 4, 'Lapis', '2022-07-13', 3.000),
(40, 1, 'Caixa de chocolate', '2022-03-08', 12.000),
(67, 1, 'Saco de carvão', '2022-07-13', 89.000),
(89, 2, 'Garrafa de agua', '2022-01-10', 10.000),
(100, 3, 'Pacote de biscoitos', '2021-12-14', 8.000),
(170, 2, 'LEITE CONSENSADO', '2012-05-30', 11.000);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
