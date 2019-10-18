-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 18-Out-2019 às 02:26
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_help`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS `administradores` (
  `idadministrador` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(10) DEFAULT NULL,
  `senha` varchar(10) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idadministrador`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`idadministrador`, `usuario`, `senha`, `nome`, `ativo`) VALUES
(1, '01admin', '01admin', 'Arthur', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

DROP TABLE IF EXISTS `chamados`;
CREATE TABLE IF NOT EXISTS `chamados` (
  `idchamado` int(11) NOT NULL AUTO_INCREMENT,
  `chamado` varchar(200) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` varchar(5) DEFAULT NULL,
  `fk_administrador` int(11) DEFAULT NULL,
  `fk_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idchamado`),
  KEY `fk_cliente` (`fk_cliente`) USING BTREE,
  KEY `fk_administrador` (`fk_administrador`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('9fvdte6ct3q1me01rhc2cglhmur21vf6', '::1', 1571364139, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537313336343133393b),
('a2ga7jnibrg76goebsf39qnlipgelkjd', '::1', 1571363917, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537313336333931373b),
('dcaull1dj7vn55akg4hp2utshpaskb57', '::1', 1571364624, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537313336343632343b7573756172696f7c733a31303a2261727468757270617373223b6c6f6761646f7c623a313b),
('lobhm95gmdqrlecddk0bnkrudbfe10db', '::1', 1571365302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537313336353037383b7573756172696f7c733a31303a2261727468757270617373223b6c6f6761646f7c623a313b),
('q58mp6q1f8be86o9hbf12kq61ab1gcdj', '::1', 1571365078, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537313336353037383b7573756172696f7c733a31303a2261727468757270617373223b6c6f6761646f7c623a313b),
('ujd1h1f949d0ohip88nrv7aprgf8ra1r', '::1', 1571364222, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537313336343232323b7573756172696f7c733a31303a2261727468757270617373223b6c6f6761646f7c623a313b);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(10) DEFAULT NULL,
  `senha` varchar(10) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idUsuario`, `usuario`, `senha`, `nome`, `ativo`) VALUES
(1, '01admin', '01admin', 'Arthur', NULL),
(2, 'arthurpass', 'ninj.art16', 'Arthur Passos', 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `fk_mensagem_Administrador1` FOREIGN KEY (`fk_administrador`) REFERENCES `administradores` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mensagem_Usuario1` FOREIGN KEY (`fk_cliente`) REFERENCES `clientes` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
