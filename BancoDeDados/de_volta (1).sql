-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Jan-2021 às 18:11
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
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cadastro_funcionario`
--

INSERT INTO `tb_cadastro_funcionario` (`id`, `nome_completo`, `cpf`, `data_entrada_admisao`, `cargo`, `salario`, `horario`) VALUES
(39, 'Marcio ', '000000000000', '2021-01-30', 'Mecanico', '1500', '17:00 as 00:00');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cadastro_morador`
--

INSERT INTO `tb_cadastro_morador` (`id`, `nome_completo`, `cpf`, `data_entrada`, `bloco`, `apartamento`, `nivel`, `aluguel`) VALUES
(13, 'Railson', '00000000000', '2020-11-12', 'Bloco 1', 'Apartamento 2', 'Nivel 1', '2000'),
(14, 'Marcio ', '000000000', '0001-01-25', 'Bloco 6', 'Apartamento 10', 'Nivel 5', '9000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contas`
--

DROP TABLE IF EXISTS `tb_contas`;
CREATE TABLE IF NOT EXISTS `tb_contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(120) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor` int(255) NOT NULL,
  `parcela` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `pago` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=458 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_contas`
--

INSERT INTO `tb_contas` (`id`, `data`, `descricao`, `valor`, `parcela`, `categoria`, `pago`) VALUES
(422, '02/02/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(423, '04/03/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(424, '03/04/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(425, '03/05/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(426, '02/06/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(427, '02/07/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(428, '01/08/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(429, '31/08/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(430, '30/09/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(431, '30/10/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(432, '29/11/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(433, '29/12/2021', 'CARRO', 1250, '12', 'Finaciamento', 'sim'),
(434, '03/02/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(435, '06/03/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(436, '05/04/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(437, '05/05/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(438, '04/06/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(439, '04/07/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(440, '03/08/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(441, '02/09/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(442, '02/10/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(443, '01/11/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(444, '01/12/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(445, '31/12/2021', 'Novo Teste ', 1667, '12', 'Salario', 'nao'),
(446, '06/02/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(447, '09/03/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(448, '08/04/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(449, '08/05/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(450, '07/06/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(451, '07/07/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(452, '06/08/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(453, '05/09/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(454, '05/10/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(455, '04/11/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(456, '04/12/2021', 'novo ', 2500, '12', 'Imposto', 'nao'),
(457, '03/01/2022', 'novo ', 2500, '12', 'Imposto', 'nao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_erros_auditoria`
--

DROP TABLE IF EXISTS `tb_erros_auditoria`;
CREATE TABLE IF NOT EXISTS `tb_erros_auditoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuariologado` varchar(225) CHARACTER SET latin1 NOT NULL,
  `data` date NOT NULL,
  `filial` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(255) CHARACTER SET latin1 NOT NULL,
  `rua` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tipoerro` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nomeobjeto` int(255) NOT NULL,
  `nomeerrocolaborador` varchar(255) CHARACTER SET latin1 NOT NULL,
  `usuarioerro` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_erros_auditoria`
--

INSERT INTO `tb_erros_auditoria` (`id`, `usuariologado`, `data`, `filial`, `cidade`, `rua`, `tipoerro`, `nomeobjeto`, `nomeerrocolaborador`, `usuarioerro`) VALUES
(3, 'teste', '2001-10-21', '26 - Mix MarabÃ¡', 'Cidade 1', 'Rua 1', 'Cancelado', 989898898, 'isael jose da silva', '7636'),
(4, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(5, 'teste', '2021-01-12', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(6, 'teste', '2021-01-12', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(7, 'teste', '2021-01-12', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(8, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(9, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(10, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(11, 'teste', '2021-01-29', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(12, 'teste', '2021-01-30', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(13, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(14, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(15, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(16, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(17, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(18, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(19, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(20, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(21, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(22, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(23, 'teste', '2021-01-09', '92 - mix cbacuri', 'Cidade 1', 'Rua 1', 'cancelado', 123345678, 'isael jose da silva', '7636'),
(24, 'teste', '2001-10-21', '17 - Mix Tirirical', 'Cidade 1', 'Rua 1', 'Desinternado', 1989898, 'isael jose da silva', '7636'),
(25, 'teste', '2001-10-21', '28 - Mix Parauapebas', 'Cidade 1', 'Rua 1', 'Cancelado', 9999999, 'Antonio', '1223'),
(26, 'teste', '2001-10-21', '49 - Mix Castanhal', 'Cidade 3', 'Rua 2', 'Cancelado', 123, 'isael jose da silva', '7878'),
(27, 'teste', '2001-10-21', '32 - Mix Timon', 'Cidade 2', 'Rua 1', 'Cancelado', 123, '7636', '7636'),
(28, 'teste', '2021-01-10', '20 - Curva do 90', 'Cidade 1', 'Rua 1', 'Cancelado', 123, 'isael', '7878'),
(29, 'teste', '2021-01-10', '20 - Curva do 90', 'Cidade 2', 'Rua 1', 'Quantidade', 123, 'isael jose da silva', '7636'),
(30, 'teste', '2021-01-10', '37 - Mix BelÃ©m', 'Cidade 2', 'Rua 2', 'Cancelado', 123, 'isael jose da silva', '7636'),
(31, 'teste', '2021-01-11', '99 - Mix Pinheiro', 'Cidade 10', 'Rua 1', 'Cancelado', 123, 'Lucas', '1010\''),
(32, 'teste', '2021-01-11', '51 - Mix Marituba', 'Cidade 1', 'Rua 1', 'Quantidade', 123, '123', '1223'),
(33, 'teste', '2021-01-11', '91 - Mix Santa InÃªs', 'Cidade 2', 'Rua 3', 'Endereco', 123, '123', '123'),
(34, 'teste', '2021-01-11', '252 - Mix Teresina', 'Cidade 2', 'Rua 1', 'Endereco', 123, 'isael jose da silva', '7636');

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
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_estrutura_condominio`
--

INSERT INTO `tb_estrutura_condominio` (`id`, `bloco`, `nivel`, `apartamento`) VALUES
(49, 'Bloco 6', 'Nivel 5', 'Apartamento 10'),
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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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
(18, 'railson gay', '06694259684', '2020-11-12', 'Mecanico', '1200', '07:00 as 17:00'),
(19, 'Isael', '000000000', '2020-01-01', 'Sindico', '5000', '07:00 as 17:00'),
(20, 'lucas ', '0000000000', '2020-11-20', 'CFTV', '1350', '07:00 as 17:00');

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
  `nivel` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id`, `nome`, `email`, `senha`, `nivel`) VALUES
(1, 'Isael Duarte', 'isaelsilva1039@gmail.com', '123', 1),
(2, 'teste', 'teste@gmail.com', '123', 2),
(3, 'isael duarte ', 'isael@gmail.com', '123', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
