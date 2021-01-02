-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Jan-2021 às 18:47
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `de_volta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro_funcionario`
--

DROP TABLE IF EXISTS `tb_cadastro_funcionario`;
CREATE TABLE IF NOT EXISTS `tb_cadastro_funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `data_entrada_admisao` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `salario` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cadastro_funcionario`
--

INSERT INTO `tb_cadastro_funcionario` (`id`, `nome_completo`, `cpf`, `data_entrada_admisao`, `cargo`, `salario`, `horario`) VALUES
(37, 'Isael', '000000000', '2020-01-01', 'Sindico', '5000', '07:00 as 17:00'),
(38, 'lucas ', '0000000000', '2020-11-20', 'CFTV', '1350', '07:00 as 17:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro_morador`
--

DROP TABLE IF EXISTS `tb_cadastro_morador`;
CREATE TABLE IF NOT EXISTS `tb_cadastro_morador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(100) NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `data_entrada` varchar(100) NOT NULL,
  `bloco` varchar(100) NOT NULL,
  `apartamento` varchar(100) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `aluguel` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cadastro_morador`
--

INSERT INTO `tb_cadastro_morador` (`id`, `nome_completo`, `cpf`, `data_entrada`, `bloco`, `apartamento`, `nivel`, `aluguel`) VALUES
(13, 'Railson', '00000000000', '2020-11-12', 'Bloco 1', 'Apartamento 2', 'Nivel 1', '2000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contas`
--

DROP TABLE IF EXISTS `tb_contas`;
CREATE TABLE IF NOT EXISTS `tb_contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor` int(255) NOT NULL,
  `parcela` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `pago` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=366 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_contas`
--

INSERT INTO `tb_contas` (`id`, `data`, `descricao`, `valor`, `parcela`, `categoria`, `pago`) VALUES
(364, '2021-01-06', '100', 100, 'avista', 'Categoria', 'Pago'),
(365, '2021-01-06', '100', 100, 'avista', 'Categoria', 'Pago');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estrutura_condominio`
--

DROP TABLE IF EXISTS `tb_estrutura_condominio`;
CREATE TABLE IF NOT EXISTS `tb_estrutura_condominio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bloco` varchar(100) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `apartamento` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_estrutura_condominio`
--

INSERT INTO `tb_estrutura_condominio` (`id`, `bloco`, `nivel`, `apartamento`) VALUES
(48, 'Bloco 1', 'Nivel 1', 'Apartamento 2'),
(47, 'Bloco 1', 'Nivel 1', 'Apartamento 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_historico_delete_funcionario`
--

DROP TABLE IF EXISTS `tb_historico_delete_funcionario`;
CREATE TABLE IF NOT EXISTS `tb_historico_delete_funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `admisao` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `salario` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_historico_delete_funcionario`
--

INSERT INTO `tb_historico_delete_funcionario` (`id`, `nome_completo`, `cpf`, `admisao`, `cargo`, `salario`, `horario`) VALUES
(1, 'isael jose da silva', '077.618.543-86', '222222-02-22', 'Sindico', '1200', '17:00 as 00:00'),
(2, 'josy', '06780422339', '2020-09-13', 'Auxiliar SeviÃ§oes Gerais', '890', '07:00 as 17:00'),
(3, 'isael jose da silva', '077.618.543-86', '2020-09-13', 'Porteiro', '890', '17:00 as 00:00'),
(4, 'lucas silva', '07761854386', '2020-09-15', 'Sindico', '1800', '07:00 as 17:00'),
(5, 'isael jose da silva', '077.618.543-86', '2020-09-26', 'Porteiro', '890', '07:00 as 17:00'),
(6, 'Josilene ', '07761854386', '2020-09-26', 'Jardineiro', '1200', '07:00 as 17:00'),
(7, 'isael', '000000000', '1997-12-28', 'Jardineiro', '3500', '17:00 as 00:00'),
(8, 'josy', '111.111.1', '120202-01-01', 'Jardineiro', '890', '07:00 as 17:00'),
(9, 'valdirene dos santos silva', '000.000.000-0', '2020-01-01', 'Eletricista', '890', '07:00 as 17:00'),
(10, 'isael ', '07761854386', '1997-06-28', 'CFTV', '1800', '17:00 as 00:00'),
(11, 'isael Silva', '07618543600', '1997-06-28', 'Sindico', '2000', '07:00 as 17:00'),
(12, 'isael jose da silva', '0761854386', '2020-10-25', 'Sindico', '5000', '17:00 as 00:00'),
(13, 'isael ', '07761854386', '1997-06-28', 'CFTV', '1300', '07:00 as 17:00'),
(14, 'isael silva  silva ', '07761854386', '1997-06-28', 'GERENTE  ', '900', '07:00 as 17:00'),
(15, 'joÃ£o silva', '0761854335', '2020-10-25', 'CFTV', '900', '00:00 as 70:00'),
(16, 'Lana Kauana Nascimento Silva', '000000000000', '2020-11-11', 'CFTV', '5000', '07:00 as 17:00'),
(17, 'maria silva', '0761854668', '2020-10-25', 'Auxiliar SeviÃ§oes Gerais', '900', '07:00 as 17:00'),
(18, 'railson gay', '06694259684', '2020-11-12', 'Mecanico', '1200', '07:00 as 17:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_historico_delete_morador`
--

DROP TABLE IF EXISTS `tb_historico_delete_morador`;
CREATE TABLE IF NOT EXISTS `tb_historico_delete_morador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `entrada` varchar(100) NOT NULL,
  `bloco` varchar(100) NOT NULL,
  `apartamento` varchar(100) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `aluguel` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_historico_delete_morador`
--

INSERT INTO `tb_historico_delete_morador` (`id`, `nome_completo`, `cpf`, `entrada`, `bloco`, `apartamento`, `nivel`, `aluguel`) VALUES
(4, 'lucas silva', '000.000.000-0', '2020-10-08', 'Bloco 1', 'Apartamento 2', 'Nivel 1', 2000),
(3, 'isael jose da silva', '07761854386', '2020-10-05', 'Bloco 1', 'Apartamento 1', 'Nivel 1', 1650),
(5, 'isael jose da silva', '07761854386', '2020-10-08', 'Bloco 1', 'Apartamento 1', 'Nivel 1', 2000),
(6, 'isael jose  da silva', '07761854386', '1997-06-28', 'Bloco 1', 'Apartamento 2', 'Nivel 1', 1650);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Isael Duarte', 'isaelsilva1039@gmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
