-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2015 às 23:24
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parkmaneger`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `status` char(1) DEFAULT NULL,
  `totalGasto` decimal(10,0) DEFAULT NULL,
  `numeroLocacoes` int(11) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `FK_Cliente_0` (`idUsuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `status`, `totalGasto`, `numeroLocacoes`, `idUsuario`) VALUES
(1, '1', '122', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empregado`
--

CREATE TABLE IF NOT EXISTS `empregado` (
  `idEmpregado` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` char(10) DEFAULT NULL,
  `login` varchar(40) NOT NULL,
  `senha` char(20) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idEmpregado`),
  KEY `FK_Empregado_0` (`idUsuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `empregado`
--

INSERT INTO `empregado` (`idEmpregado`, `tipo`, `login`, `senha`, `idUsuario`) VALUES
(1, '1', 'admin', 'admin', 1),
(15, '2', 'nome', '123', 0),
(5, '2', 'teste3', 'sen', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `idHorario` char(10) NOT NULL,
  `data` date DEFAULT NULL,
  `horaEntrada` time DEFAULT NULL,
  `horaSaida` time DEFAULT NULL,
  PRIMARY KEY (`idHorario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao`
--

CREATE TABLE IF NOT EXISTS `locacao` (
  `idLocacao` char(10) NOT NULL,
  `idVaga` int(11) NOT NULL,
  `idHorario` char(10) NOT NULL,
  `idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idLocacao`),
  KEY `FK_locacao_0` (`idVaga`),
  KEY `FK_locacao_1` (`idHorario`),
  KEY `FK_locacao_2` (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(100) DEFAULT NULL,
  `cpf` char(20) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` char(10) DEFAULT NULL,
  `indentidade` char(20) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) NOT NULL,
  `uf` char(10) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nomeUsuario`, `cpf`, `rua`, `numero`, `indentidade`, `cidade`, `bairro`, `uf`) VALUES
(1, 'Jerffeson Gonalves d', '05751215303', 'Papa João Paulo', '456', '23123', 'Juazeiro do Norte', 'Tiradentes', 'Ce'),
(2, 'Rebe', '32131', 'njsadn', 'jnsjdnsa', 'njsndjsan', 'jndjsan', '', 'qjnwwdjwq'),
(3, 'kçkkçkççkççk', 'çkçkçkçkçk', 'çkçkçkkçk', 'kçkççkçkçk', 'çkçkçkçkçkçkçk', 'çkçkçkçkçk', 'çkçkçkçkççk', 'kçkçkçkç');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE IF NOT EXISTS `vaga` (
  `idVaga` int(11) NOT NULL AUTO_INCREMENT,
  `valor` int(11) NOT NULL,
  `localizacaoHorizontal` int(11) DEFAULT NULL,
  `localizacaoVertical` int(11) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`idVaga`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`idVaga`, `valor`, `localizacaoHorizontal`, `localizacaoVertical`, `status`) VALUES
(1, 5, 1, 1, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
