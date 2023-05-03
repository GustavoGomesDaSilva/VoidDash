-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Maio-2023 às 03:32
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_voiddash`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carros`
--

CREATE TABLE `tb_carros` (
  `ID_CARRO` int(11) NOT NULL,
  `MODELO` varchar(35) NOT NULL,
  `COR` int(10) NOT NULL,
  `PLACA` char(7) NOT NULL,
  `LOCADORA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionarios`
--

CREATE TABLE `tb_funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `cargo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_funcionarios`
--

INSERT INTO `tb_funcionarios` (`id`, `nome`, `email`, `senha`, `cargo`) VALUES
(1, 'leonardo dias', 'leo-ds@live.com', 'kirito@2018', 'administrador'),
(5, 'tupinamba21', 'tupinamba.com', '$2y$10$fVE0vSOAa', ''),
(6, 'tupinamba', 'tupinamba.com', '$2y$10$WO.CE4dhJYZms3xCVdjR1uUNRmS3kGsJAVczTRrsLt6dE1VP63Upm', ''),
(7, 'tupinamba', 'tupinamba.com.br', '$2y$10$SsbxOh9WkBdMqcmO3Wwq0.vqn7UjMUDccBUgKDgBZWHSs9AhgHD3q', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_planilhas`
--

CREATE TABLE `tb_planilhas` (
  `locadora` varchar(30) CHARACTER SET utf8 NOT NULL,
  `lote` date NOT NULL,
  `data_limite` date NOT NULL,
  `data_infracao` date NOT NULL,
  `hora` time(6) NOT NULL,
  `ait` varchar(20) CHARACTER SET utf8 NOT NULL,
  `placa` varchar(20) CHARACTER SET utf8 NOT NULL,
  `login_condutor` varchar(20) CHARACTER SET utf8 NOT NULL,
  `condutor` varchar(30) CHARACTER SET utf8 NOT NULL,
  `epo` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `supervisor` varchar(30) CHARACTER SET utf8 NOT NULL,
  `cod_infracao` int(30) NOT NULL,
  `descricao` varchar(100) CHARACTER SET utf8 NOT NULL,
  `valor` double NOT NULL,
  `pontos` int(20) NOT NULL,
  `fator_multa` int(30) NOT NULL,
  `assinou` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_carros`
--
ALTER TABLE `tb_carros`
  ADD PRIMARY KEY (`ID_CARRO`);

--
-- Índices para tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_carros`
--
ALTER TABLE `tb_carros`
  MODIFY `ID_CARRO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
