-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Maio-2023 às 06:34
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

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
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `placa` varchar(8) NOT NULL,
  `locadora` varchar(10) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `carro` varchar(30) DEFAULT NULL,
  `modelo` varchar(4) DEFAULT NULL,
  `cor` varchar(10) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`placa`, `locadora`, `marca`, `carro`, `modelo`, `cor`, `ativo`) VALUES
('DEF-5678', 'Car4U', 'Fiat', 'Uno', '2022', 'Prata', 1),
('EFG-2345', 'Car4U', 'Ford', 'Fiesta', '2022', 'Azul', 1),
('EFG-4567', 'Car4U', 'Ford', 'Fiesta', '2021', 'Azul', 1),
('FGH-8901', 'Car4U', 'Volkswagen', 'UP', '2023', 'Prata', 1),
('GHI-9012', 'EasyCar', 'Chevrolet', 'Onix', '2023', 'Preto', 1),
('HIJ-6789', 'EasyCar', 'Renault', 'March', '2021', 'Cinza', 1),
('HIJ-8901', 'EasyCar', 'Renault', 'March', '2022', 'Cinza', 1),
('IJK-2345', 'EasyCar', 'Fiat', 'Argo', '2022', 'Preto', 1),
('JKL-3456', 'DriveOut', 'Fiat', 'Palio', '2022', 'Vermelho', 1),
('KLM-0123', 'DriveOut', 'Volkswagen', 'Voyage', '2023', 'Branco', 1),
('KLM-2345', 'DriveOut', 'Volkswagen', 'Voyage', '2021', 'Branco', 1),
('LMN-6789', 'DriveOut', 'Renault', 'Clio', '2021', 'Vermelho', 1),
('MNO-7890', 'Car4U', 'Ford', 'Ka', '2021', 'Azul', 1),
('NOP-4567', 'Car4U', 'Renault', 'Logan', '2022', 'Prata', 1),
('NOP-6789', 'Car4U', 'Renault', 'Logan', '2023', 'Prata', 1),
('OPQ-0123', 'Car4U', 'Chevrolet', 'Onix', '2023', 'Azul', 1),
('PQR-2345', 'EasyCar', 'Renault', 'Sandero', '2023', 'Cinza', 1),
('QRS-0123', 'EasyCar', 'Honda', 'Fit', '2022', 'Preto', 1),
('QRS-8901', 'EasyCar', 'Honda', 'Fit', '2021', 'Preto', 1),
('RST-4567', 'EasyCar', 'Ford', 'Ka', '2022', 'Cinza', 1),
('STU-6789', 'DriveOut', 'Hyundai', 'HB20', '2022', 'Branco', 1),
('TUV-2345', 'DriveOut', 'Fiat', 'Siena', '2023', 'Vermelho', 1),
('TUV-8901', 'DriveOut', 'Hyundai', 'HB20', '2021', 'Branco', 1),
('VWX-0123', 'Car4U', 'Toyota', 'Corolla', '2023', 'Prata', 1),
('VWX-2345', 'Car4U', 'Toyota', 'Corolla', '2022', 'Prata', 1),
('WXY-6789', 'Car4U', 'Toyota', 'Etios', '2022', 'Azul', 1),
('YZA-4567', 'EasyCar', 'Honda', 'Civic', '2022', 'Preto', 1),
('YZA-6789', 'EasyCar', 'Honda', 'Civic', '2023', 'Preto', 1),
('ZAB-0123', 'EasyCar', 'Peugeot', '208', '2021', 'Cinza', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motoristas`
--

CREATE TABLE `motoristas` (
  `matricula` varchar(5) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `cnh` char(11) DEFAULT NULL,
  `dtNasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `motoristas`
--

INSERT INTO `motoristas` (`matricula`, `nome`, `cnh`, `dtNasc`) VALUES
('0021', 'José Eduardo Ferreira Costa', '30853266679', '1995-06-26'),
('0112', 'Tiago da Silva Souza', '18223861454', '1996-05-06'),
('0451', 'Rafael de Almeida Gonçalves', '13724009882', '1992-07-05'),
('0985', 'Luiz Henrique dos Santos Golveia', '27485169240', '1990-02-12'),
('1264', 'Diego Cardoso Rodrigues', '84840898287', '1994-02-20'),
('2477', 'Felipe Ribeiro Silva', '49096010301', '1991-10-30'),
('2564', 'André Luiz Oliveira Santos', '73336039306', '1994-12-04'),
('3201', 'Pedro Gabriel Almeida Santos', '18223861454', '1990-12-09'),
('4456', 'Rodrigo Alves Pereira', '78456298467', '1997-01-27'),
('4510', 'Leonardo da Silva Ribeiro', '10677877525', '1986-11-18'),
('4511', 'Marcos Vinicius Costa Pereira', '66353195652', '1989-12-14'),
('4512', 'Gabriel Alves de Oliveira', '43993299034', '1988-03-12'),
('4513', 'Vinicius Oliveira Lima', '18799312645', '1986-11-19'),
('4521', 'Pedro Henrique de Souza', '50611641929', '1987-05-07'),
('4578', 'Gustavo Ferreira Costa', '99305992351', '1985-08-15'),
('4700', 'Eduardo Henrique Oliveira Santos', '52215412200', '1993-09-22'),
('4715', 'Luiz Fernando Souza Santos', '61776976656', '1996-07-17'),
('4774', 'Thiago dos Santos Silva', '76936604347', '1989-12-04'),
('4826', 'Bruno Henrique de Almeida', '59357418184', '1998-12-14'),
('4853', 'Bruno Almeida Ribeiro', '66861045017', '1991-04-28'),
('4952', 'Lucas Gabriel dos Santos', '12116893346', '1986-05-20'),
('7468', 'Guilherme da Silva Cosdta', '31965662296', '1988-04-05'),
('7585', 'Victor Hugo Santos Oliveira', '25840445336', '1987-06-29'),
('7638', 'João Victor Cardoso Lima', '15896190664', '1989-12-17'),
('7784', 'João Paulo Ribeiro Gonçalves', '80283362732', '1991-12-23'),
('7815', 'Rafael Gomes Rodrigues', '42057443195', '1990-11-01'),
('7854', 'Lucas da Silva Santos', '42617354165', '1995-07-21'),
('7999', 'Gabriel Henrique Pedroso', '16691574097', '2000-07-14'),
('9531', 'Eduardo Henrique Silva', '40297476890', '1992-11-07'),
('9566', 'Lucas Gabriel da Costa', '96888892503', '1989-09-16'),
('9588', 'Daniel Pereira Gonçalves', '57141775530', '1993-05-14'),
('9686', 'Matheus Cardoso Almeida', '34570188601', '1993-02-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

CREATE TABLE `registros` (
  `idRegistro` int(11) NOT NULL,
  `matricula` varchar(5) NOT NULL,
  `placa` varchar(8) NOT NULL,
  `dtInicioUso` date DEFAULT NULL,
  `dtFimUso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`idRegistro`, `matricula`, `placa`, `dtInicioUso`, `dtFimUso`) VALUES
(2, '0112', 'DEF-5678', '2023-05-27', '2023-05-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinistros`
--

CREATE TABLE `sinistros` (
  `idSinistro` int(11) NOT NULL,
  `idRegistro` int(11) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `descricao` varchar(1000) DEFAULT NULL,
  `dtSinistro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sinistros`
--

INSERT INTO `sinistros` (`idSinistro`, `idRegistro`, `tipo`, `descricao`, `dtSinistro`) VALUES
(4, 2, 'avarias', 'carro retornou ao pátio com alguns riscos na porta do motorista', '2023-05-18 18:04:24');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`placa`);

--
-- Índices para tabela `motoristas`
--
ALTER TABLE `motoristas`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `fkPlacaRegistros` (`placa`),
  ADD KEY `fkMatriculaRegistros` (`matricula`);

--
-- Índices para tabela `sinistros`
--
ALTER TABLE `sinistros`
  ADD PRIMARY KEY (`idSinistro`),
  ADD KEY `fkRegistrosSinistros` (`idRegistro`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `registros`
--
ALTER TABLE `registros`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `sinistros`
--
ALTER TABLE `sinistros`
  MODIFY `idSinistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `fkMatriculaRegistros` FOREIGN KEY (`matricula`) REFERENCES `motoristas` (`matricula`),
  ADD CONSTRAINT `fkPlacaRegistros` FOREIGN KEY (`placa`) REFERENCES `carros` (`placa`);

--
-- Limitadores para a tabela `sinistros`
--
ALTER TABLE `sinistros`
  ADD CONSTRAINT `fkRegistrosSinistros` FOREIGN KEY (`idRegistro`) REFERENCES `registros` (`idRegistro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
