-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Abr-2023 às 03:19
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
-- Banco de dados: `voiddash`
--

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
-- Extraindo dados da tabela `tb_planilhas`
--

INSERT INTO `tb_planilhas` (`locadora`, `lote`, `data_limite`, `data_infracao`, `hora`, `ait`, `placa`, `login_condutor`, `condutor`, `epo`, `supervisor`, `cod_infracao`, `descricao`, `valor`, `pontos`, `fator_multa`, `assinou`) VALUES
('VIX', '2022-07-04', '2022-07-19', '2022-05-05', '06:48:00.000000', 'PMC21797034', 'CRX9173', 'PICAPAU', 'CEIRA', 'GLOBAL NORTE', 'RAFAEL MILANE', 55680, 'Estacionar local/horário de estacionamento e parada proibidos pela sinalização ', 195.23, 5, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-09', '2022-05-13', '17:34:00.000000', 'JRB42156518', 'EHH1230', 'Z243797', 'ANDERSON RICARDO NOGUEIRA SOUZ', 'GLOBAL SUL', 'FLAUBERTO OLIVEIRA', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-09', '2022-05-13', '08:00:00.000000', 'GTA16404867', 'FZE9628', 'T6855354', 'ROBERTO TEODORO', 'GLOBAL NORTE', 'RAFAEL MILANE', 75870, 'Transitar na faixa ou via exclusiva regulam. p/ transp. públ. coletivo passag. ', 293.47, 7, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-09', '2022-05-13', '17:41:00.000000', 'JRB42187448', 'CFZ5730', 'Z236764', 'GUSTAVO DOS SANTOS BARRETO', 'GLOBAL SUL', 'DIEGO MACEDO', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, ''),
('VIX', '2022-07-04', '2022-05-25', '2022-05-16', '11:04:00.000000', 'A2855991', 'FOA3849', 'Z192896', 'MATHEUS DA SILVA BORBA DE REZE', 'AUJ-GLOBAL', 'LEONARDO SOUZA', 51851, 'Deixar o condutor de usar o cinto segurança ', 195.23, 5, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-12', '2022-05-17', '18:34:00.000000', 'JVB45074880', 'GDU1746', 'Z236769', 'WILLIAM RIBEIRO DE ALMEIDA', 'GLOBAL SUL', 'FLAUBERTO OLIVEIRA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-12', '2022-05-17', '06:34:00.000000', 'TPA15968386', 'GFA5499', 'Z263223', 'RODOLFO DOS SANTOS SOUZA', 'GLOBAL SUL', 'FABIO PINHEIRO', 75870, 'Transitar na faixa ou via exclusiva regulam. p/ transp. públ. coletivo passag. ', 293.47, 7, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-12', '2022-05-17', '11:31:00.000000', 'GVB10277572', 'BZG1370', 'Z034699', 'RAFAEL PINTO GOES', 'GLOBAL NORTE', 'DAVID GRANADO', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-06-03', '2022-05-17', '16:54:00.000000', 'A2612691', 'GID2082', 'Z034322', 'ADRIANO DA COSTA SILVA', 'AUJ-GLOBAL', 'WESLEY SILVA', 76332, 'Dirigir veículo manuseando telefone celular ', 293.47, 7, 0, 'OK'),
('LETS', '2022-07-04', '2020-07-12', '2022-05-18', '19:27:00.000000', 'JRB42429182', 'BPQ5066', 'Z267926', 'LUCAS DIOGENES MOURA DA SILVA', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-12', '2022-05-18', '16:58:00.000000', 'TPA15789830', 'GDV8676', 'Z236775', 'JUAN DE SOUZA NEVES', 'GLOBAL SUL', 'DIEGO MACEDO', 75870, 'Transitar na faixa ou via exclusiva regulam. p/ transp. públ. coletivo passag. ', 293.47, 7, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-12', '2022-05-18', '10:30:00.000000', 'GVB10301902', 'FPF9016', 'Z270380', 'HARRISON JAMES ROSARIO', 'GLOBAL NORTE', 'DAVID GRANADO', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-12', '2022-05-18', '19:36:00.000000', 'GRA67919612', 'EOC9785', 'Z274996', 'RAFAEL SANTOS REIS', 'GLOBAL NORTE', 'DAVID GRANADO', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-12', '2022-05-18', '07:34:00.000000', 'HRA74376692', 'FPF9016', 'Z270380', 'HARRISON JAMES ROSARIO', 'GLOBAL NORTE', 'DAVID GRANADO', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-05-30', '2022-05-18', '08:41:00.000000', 'R5227035', 'BSZ3620', 'Z029427', 'ERICK DIAS DOS SANTOS', 'AUJ-GLOBAL', 'WESLEY SILVA', 74630, 'Transitar em velocidade superior à máxima permitida em mais de 20% até 50% ', 195.23, 5, 0, ''),
('LETS', '2022-07-04', '2022-07-12', '2022-05-18', '06:55:00.000000', 'TPA15950649', 'GFA5499', 'Z263223', 'RODOLFO DOS SANTOS SOUZA', 'GLOBAL SUL', 'FABIO PINHEIRO', 75870, 'Transitar na faixa ou via exclusiva regulam. p/ transp. públ. coletivo passag. ', 293.47, 7, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-13', '2022-05-18', '14:32:00.000000', 'J4300039594', 'GDU1746', 'Z236769', 'WILLIAM RIBEIRO DE ALMEIDA', 'GLOBAL SUL', 'FLAUBERTO OLIVEIRA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-16', '2022-05-20', '10:50:00.000000', 'GVB10455934', 'BPO4809', 'Z225726', 'CLENILSON VALMIR DA SILVA', 'GLOBAL NORTE', 'FABIO ROCHA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, ''),
('VIX', '2022-07-04', '2022-07-16', '2022-05-21', '08:05:00.000000', 'JVB45190146', 'GJR6497', 'Z234079', 'RODRIGO FAGUNDES RIBEIRO', 'GLOBAL SUL', 'DIEGO MACEDO', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-16', '2022-05-21', '08:27:00.000000', 'GVB10365056', 'GIA5438', 'Z174581', 'CARLOS HENRIQUE VANNUCCHI', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-23', '2022-05-22', '13:12:00.000000', 'PMC22716186', 'BJM8E33', 'Z267935', 'VINICIUS MATHEUS SANTOS SILVA', 'GLOBAL LESTE', 'MARCIO BARROS', 55500, 'Estacionar em local/horário proibido especificamente pela sinalização ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-19', '2022-05-23', '08:53:00.000000', 'JRB42818260', 'EAE8H92', 'Z281870', 'REINALDO DE SOUZA PRIMO', 'GLOBAL SUL', 'FLAUBERTO OLIVEIRA', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-13', '2022-05-23', '18:45:00.000000', 'A000156483', 'FOA3849', 'Z192896', 'MATHEUS DA SILVA BORBA DE REZE', 'AUJ-GLOBAL', 'LEONARDO SOUZA', 76252, 'Estacionar nas vagas reserv a idosos, s/ credencial ', 293.47, 7, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-17', '2022-05-23', '09:16:00.000000', 'JRB42775846', 'EBQ3622', 'Z003208', 'FABIANO FERREIRA DE OLIVEIRA', 'GLOBAL SUL', 'FLAUBERTO OLIVEIRA', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-17', '2022-05-23', '15:28:00.000000', 'QVB25651640', 'GDU1746', 'Z236769', 'WILLIAM RIBEIRO DE ALMEIDA', 'GLOBAL SUL', 'FLAUBERTO OLIVEIRA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-17', '2022-05-23', '07:13:00.000000', 'GRA68035629', 'EOM6322', 'T7618727', 'AMAURY BOLINI VEGA', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-19', '2022-05-24', '08:20:00.000000', 'GVB10498897', 'GEH0G49', 'Z267909', 'ANDRE LUIZ CARLOS DA SILVA', 'GLOBAL LESTE', 'MARCIO BARROS', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-19', '2022-05-25', '11:06:00.000000', 'PMC12958020', 'GIA5438', 'Z174581', 'CARLOS HENRIQUE VANNUCCHI', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 51851, 'Deixar o condutor de usar o cinto segurança ', 195.23, 5, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-19', '2022-05-25', '06:58:00.000000', 'TPA16101114', 'FVN5A22', 'Z270379', 'DAVID DA SILVA RIBEIRO', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 75870, 'Transitar na faixa ou via exclusiva regulam. p/ transp. públ. coletivo passag. ', 293.47, 7, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-19', '2022-05-25', '07:30:00.000000', 'TPA15994417', 'EOO7194', 'Z131089', 'LEANDRO DE OLIVEIRA DINIZ', ' ', 'FABIO OLIVEIRA', 75870, 'Transitar na faixa ou via exclusiva regulam. p/ transp. públ. coletivo passag. ', 293.47, 7, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-23', '2022-05-25', '22:55:00.000000', 'HVB47553898', 'EWA7497', 'Z187359', 'GABRYEL RIBEIRO DA SILVA', 'GLOBAL NORTE', 'RAFAEL MILANE', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-20', '2022-05-25', '19:38:00.000000', 'JRB43055561', 'BPQ5066', 'Z267926', 'LUCAS DIOGENES MOURA DA SILVA', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 57462, 'Dirigir veículo manuseando telefone celular ', 293.47, 7, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-19', '2022-05-25', '18:58:00.000000', 'GVB10526149', 'GIC3479', 'Z281868', 'RAFAEL DOS SANTOS SOUZA', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-19', '2022-05-25', '08:35:00.000000', 'GRA68109851', 'FWP3165', 'Z108439', 'ERIC PEREIRA DA SILVA', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-06-08', '2022-05-25', '22:52:00.000000', 'S3328346', 'EWA7497', 'Z187359', 'GABRYEL RIBEIRO DA SILVA', 'GLOBAL NORTE', 'RAFAEL MILANE', 60503, 'Avançar o sinal vermelho do semáforo - fiscalização eletrônica ', 293.47, 7, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-20', '2022-05-26', '12:59:00.000000', 'SIB75904424', 'BTR4E92', 'Z149691', 'BRUNO APARECIDO ARAUJO SOUZA', 'GLOBAL SUL', 'FLAUBERTO OLIVEIRA', 55412, 'Estacionar em desacordo com a regulamentação - estacionamento rotativo ', 195.23, 5, 0, ''),
('VIX', '2022-07-04', '2022-07-20', '2022-05-26', '07:43:00.000000', 'SIB76765142', 'GJT7925', 'Z236774', 'FELIPE PEREIRA FEITOSA', 'GLOBAL SUL', 'FLAUBERTO OLIVEIRA', 76332, 'Dirigir veículo manuseando telefone celular ', 293.47, 7, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-05', '2022-05-26', '13:35:00.000000', 'AA00665922', 'GJF5986', 'T6991756', 'PAULO MARCIO DE BRITO CARDOSO', 'GLOBAL SUL', 'DIEGO MACEDO', 73662, 'Dirigir veículo utilizando-se de telefone celular ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-23', '2022-05-27', '16:29:00.000000', 'SIB77420246', 'DUI9650', 'Z182613', 'CLECIO ALVES DE LIMA', 'GLOBAL SUL', 'DIEGO MACEDO', 55412, 'Estacionar em desacordo com a regulamentação - estacionamento rotativo ', 195.23, 5, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-23', '2022-05-27', '06:40:00.000000', 'SIB77264554', 'FZX7019', 'Z180136', 'DANILO GOMES COLEN', 'GLOBAL SUL', 'FLAUBERTO OLIVEIRA', 75870, 'Transitar na faixa ou via exclusiva regulam. p/ transp. públ. coletivo passag. ', 293.47, 7, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-23', '2022-05-27', '23:37:00.000000', 'GVB10614927', 'GFJ9168', 'Z172069', 'DANILO SANTOS LEMOS SOUZA', 'GLOBAL NORTE', 'RAFAEL MILANE', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-23', '2022-05-27', '08:11:00.000000', 'TPA16090147', 'FVN5A22', 'Z270379', 'DAVID DA SILVA RIBEIRO', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 75870, 'Transitar na faixa ou via exclusiva regulam. p/ transp. públ. coletivo passag. ', 293.47, 7, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-11', '2022-05-27', '08:22:00.000000', 'R430162212', 'BSZ3620', 'Z029427', 'ERICK DIAS DOS SANTOS', 'AUJ-GLOBAL', 'WESLEY SILVA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, ''),
('VIX', '2022-07-04', '2022-07-23', '2022-05-28', '07:31:00.000000', 'GVB10616407', 'GIA5438', 'Z174581', 'CARLOS HENRIQUE VANNUCCHI', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-24', '2022-05-28', '17:38:00.000000', 'JVB45437400', 'GJW3G35', 'Z192473', 'MARCOS GABRIEL MARCOLINO INACI', 'GLOBAL PENHA', 'VICTOR CAMPOS', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-26', '2022-05-29', '08:36:00.000000', 'HVB47704462', 'FPT4I18', 'Z188886', 'DANIEL WILLI SILVA ROCHA', 'GLOBAL PENHA', 'JANDERSON SENA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, ''),
('LETS', '2022-07-04', '2022-07-24', '2022-05-30', '19:35:00.000000', 'GRA68228184', 'GJF4C62', 'Z241989', 'LUIZ FERNANDO CAMPOS DOS SANTO', 'GLOBAL PENHA', 'VICTOR CAMPOS', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-30', '2022-05-31', '17:12:00.000000', 'JRB43471484', 'GJZ1D14', 'Z193910', 'MARCIO RODRIGUES BARBOSA', 'GLOBAL NORTE', 'DAVID GRANADO', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-11', '2022-05-31', '06:40:00.000000', 'AA00600443', 'GKB1207', 'Z185631', 'CRISTIAN FERREIRA DE LIMA', 'GLOBAL SUL', 'FABIO PINHEIRO', 73580, 'Dirigir o veículo com apenas uma das mãos, exceto quando permitido pelo CTB ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-07', '0000-00-00', '2022-05-31', '16:18:00.000000', 'GVB10721383', 'EOI3965', '#REF!', 'ROBSON ROGERIO DOS SANTOS', '#REF!', '#REF!', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-07', '2022-07-30', '2022-05-31', '09:17:00.000000', 'GRA68249920', 'GFK4064', '#REF!', 'LUAN FERREIRA DE SOUZA', '#REF!', '#REF!', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-30', '2022-06-01', '18:36:00.000000', 'HRA74878817', 'BVW4J65', 'Z288589', 'LUIZ FILIPE DOS SANTOS', 'GLOBAL LESTE', 'MURILO VIEIRA', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-26', '2022-06-01', '13:42:00.000000', 'SIB76624123', 'FWI5J45', 'Z144123', 'JOÃO PEDRO MENEZES DE SOUZA', 'GLOBAL NORTE', 'DAVID GRANADO', 55500, 'Estacionar em local/horário proibido especificamente pela sinalização ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-26', '2022-06-01', '16:07:00.000000', 'SIB77718792', 'GJV4D18', 'T7377517', 'BRUNO RAMO DE SA SANTANA', 'GLOBAL LESTE', 'MURILO VIEIRA', 55500, 'Estacionar em local/horário proibido especificamente pela sinalização ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-11', '2022-06-01', '13:15:00.000000', 'AA00674181', 'CRX9173', 'Z234066', 'CAIO RIBEIRO VIEIRA', 'GLOBAL NORTE', 'RAFAEL MILANE', 58433, 'Deixar de indicar c/ antec, med gesto de braço/luz indicadora, mudança direção ', 195.23, 5, 0, 'OK'),
('LETS', '2022-07-07', '2022-07-30', '2022-06-01', '09:05:00.000000', 'GRA68288691', 'BQU2206', '#REF!', 'PRISCILA RODRIGUES PINHO DE SO', '#REF!', '#REF!', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-04', '2022-07-30', '2022-06-02', '04:59:00.000000', 'HVB47840188', 'GIA7B66', 'Z296342', 'RUBENS RAIMUNDO DE LUNA', 'GLOBAL LESTE', 'MURILO VIEIRA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-27', '2022-06-02', '17:49:00.000000', 'TPA16020483', 'GDV8676', 'Z236775', 'JUAN DE SOUZA NEVES', 'GLOBAL SUL', 'DIEGO MACEDO', 75870, 'Transitar na faixa ou via exclusiva regulam. p/ transp. públ. coletivo passag. ', 293.47, 7, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-12', '2022-06-02', '06:51:00.000000', '1DA3468391', 'FPY3987', 'Z261692', 'VAGNER FERREIRA DA SILVA', 'GLOBAL SUL', 'DIEGO MACEDO', 51851, 'Deixar o condutor de usar o cinto segurança ', 195.23, 5, 0, ''),
('VIX', '2022-07-04', '2022-06-27', '2022-06-02', '18:24:00.000000', 'SIB76744455', 'GDC8F24', 'Z245147', 'VANDERLEI JUNIOR SARAIVA SILVA', 'GLOBAL SUL', 'DIEGO MACEDO', 72340, 'Em movimento, deixar de manter acesa a luz baixa durante à noite ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-07', '2022-08-02', '2022-06-02', '09:46:00.000000', 'GVB10762608', 'DYF6G72', '#REF!', 'FELIPE FERREIRA GUEDES', '#REF!', '#REF!', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-07', '2022-07-30', '2022-06-03', '15:30:00.000000', 'SIB77524459', 'EBQ3622', '#REF!', 'FABIANO FERREIRA DE OLIVEIRA', '#REF!', '#REF!', 55412, 'Estacionar em desacordo com a regulamentação - estacionamento rotativo ', 195.23, 5, 0, 'OK'),
('LETS', '2022-07-07', '2022-07-30', '2022-06-03', '08:08:00.000000', 'SIB76765878', 'EON1365', '#REF!', 'RENATO SOUZA CRUZ', '#REF!', '#REF!', 76332, 'Dirigir veículo manuseando telefone celular ', 293.47, 7, 0, 'OK'),
('LETS', '2022-07-07', '2022-08-03', '2022-06-03', '19:39:00.000000', 'HRA74974395', 'ESF1E59', '#REF!', 'RODRIGO SILVA VARELA DOS SANTO', '#REF!', '#REF!', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-18', '2022-06-04', '14:04:00.000000', '1O4304037', 'GDU1746', 'Z236769', 'WILLIAM RIBEIRO DE ALMEIDA', 'GLOBAL SUL', 'FLAUBERTO OLIVEIRA', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('LEST', '2022-07-07', '2022-07-25', '2022-06-05', '16:44:00.000000', 'J901108917', 'BPQ5066', 'Z267926', 'LUCAS DIOGENES MOURA DA SILVA', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 55500, 'Estacionar em local/horário proibido especificamente pela sinalização ', 130.16, 4, 0, 'OK'),
('LETS', '2022-07-07', '2022-07-31', '2022-06-06', '07:07:00.000000', 'TPA15993062', 'EXJ4259', '#REF!', 'IGOR CESAR DE OLIVEIRA', '#REF!', '#REF!', 75870, 'Transitar na faixa ou via exclusiva regulam. p/ transp. públ. coletivo passag. ', 293.47, 7, 0, 'OK'),
('LETS', '2022-07-07', '2022-08-03', '2022-06-06', '05:34:00.000000', 'HVB48012823', 'BVW4J65', '#REF!', 'LUIZ FILIPE DOS SANTOS', '#REF!', '#REF!', 74550, 'Transitar em velocidade superior à máxima permitida em até 20% ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-18', '2022-06-07', '07:13:00.000000', 'AA00668739', 'GJU5975', 'Z274984', 'DOUGLAS MULLER CARVALHO', 'GLOBAL NORTE', 'FABIO ROCHA', 51851, 'Deixar o condutor de usar o cinto segurança ', 195.23, 5, 0, ''),
('LETS', '2022-07-07', '2022-08-02', '2022-06-07', '16:00:00.000000', 'PMC17001123', 'CCU7D24', '#REF!', 'CARLOS LEONARDO AMARAL', '#REF!', '#REF!', 76332, 'Dirigir veículo manuseando telefone celular ', 293.47, 7, 0, ''),
('VIX', '2022-07-04', '2022-07-19', '2022-06-08', '18:25:00.000000', 'AA00701677', 'GIC3479', 'Z281868', 'RAFAEL DOS SANTOS SOUZA', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 51851, 'Deixar o condutor de usar o cinto segurança ', 195.23, 5, 0, 'OK'),
('LETS', '2022-07-07', '2022-08-02', '2022-06-08', '10:12:00.000000', 'SIB77441073', 'EEX6B92', '#REF!', 'ALEX CARNEIRO BARBOZA', '#REF!', '#REF!', 55500, 'Estacionar em local/horário proibido especificamente pela sinalização ', 130.16, 4, 0, 'OK'),
('VIX', '2022-07-04', '2022-07-19', '2022-06-09', '07:24:00.000000', 'AA00692947', 'BPQ5066', 'Z267926', 'LUCAS DIOGENES MOURA DA SILVA', 'GLOBAL NORTE', 'FABIO OLIVEIRA', 76332, 'Dirigir veículo manuseando telefone celular ', 293.47, 7, 0, 'OK'),
('LETS', '2022-07-07', '2022-08-03', '2022-06-09', '13:41:00.000000', 'MGA16451715', 'BUD3I03', '#REF!', 'DANILO TAVARES MARIANNO', '#REF!', '#REF!', 76332, 'Dirigir veículo manuseando telefone celular ', 293.47, 7, 0, 'OK'),
('LETS', '2022-07-07', '2022-07-27', '2022-06-17', '08:09:00.000000', 'AA00712277', 'FOL2507', '#REF!', 'EDUARDO LAMANERES', '#REF!', '#REF!', 51851, 'Deixar o condutor de usar o cinto segurança ', 195.23, 5, 0, 'OK'),
('LOCALIZA', '2022-07-04', '2022-07-26', '2022-05-26', '09:05:00.000000', 'GRA68162000', 'QXV9F98', 'Z234068', 'FELIPE OLIVEIRA MENEZES', 'GLOBAL PENHA', 'JANDERSON SENA', 57462, 'Transitar em local/horário não permitido pela regulamentação - rodízio ', 130.16, 4, 0, 'OK'),
('LOCALIZA', '2022-07-04', '2022-08-08', '2022-06-25', '08:43:00.000000', 'AA00741383', 'QXX5J37', 'Z228085', 'LEONARDO ALVES FEITOZA', 'GLOBAL LESTE', 'MURILO VIEIRA', 51851, 'Deixar o condutor de usar o cinto segurança ', 195.23, 5, 0, 'OK'),
('LOCALIZA', '2022-07-04', '2022-08-08', '2022-06-26', '09:27:00.000000', 'AA00652016', 'QXY2J22', 'Z260170', 'LUIZ GUSTAVO HERNANDEZ MARQUES', 'GLOBAL LESTE', 'LEONARDO SOUZA', 51851, 'Deixar o condutor de usar o cinto segurança ', 195.23, 5, 0, 'OK'),
('LOCALIZA', '2022-07-04', '2022-08-08', '2022-06-27', '11:45:00.000000', 'AA00745842', 'QXV9G05', 'Z102109', 'ALEX VALERIO MARTINS DOS SANTO', 'GLOBAL LESTE', 'MURILO VIEIRA', 76332, 'Dirigir veículo manuseando telefone celular ', 293.47, 7, 0, 'OK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
