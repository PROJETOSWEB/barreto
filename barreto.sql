-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Maio-2016 às 03:54
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barreto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `senha` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`admin_id`, `nome`, `email`, `senha`) VALUES
(2, 'ADMINISTRADOR', 'adm@adm.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `categoria_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `nome`) VALUES
(1, 'Início das obras'),
(2, 'Construções'),
(3, 'Acabamentos'),
(4, 'Entrega'),
(5, 'Vídeos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cliente_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `telefone` varchar(45) NOT NULL DEFAULT '',
  `numero_contrato` int(10) unsigned NOT NULL DEFAULT '0',
  `senha` varchar(45) NOT NULL DEFAULT '',
  `empreendimento_id` int(10) unsigned NOT NULL DEFAULT '0',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cliente_id`),
  KEY `FK_cliente_1` (`empreendimento_id`),
  KEY `FK_cliente_2` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `nome`, `email`, `telefone`, `numero_contrato`, `senha`, `empreendimento_id`, `admin_id`) VALUES
(1, 'KAROLINE', 'karol_ingrid_avinte@hotmail.com', '92995478787', 2456465456, '123', 4, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doc_cliente`
--

CREATE TABLE IF NOT EXISTS `doc_cliente` (
  `doc_cliente_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL DEFAULT '',
  `assunto` varchar(45) NOT NULL DEFAULT '',
  `data_doc` varchar(45) NOT NULL DEFAULT '',
  `doc` varchar(45) NOT NULL DEFAULT '',
  `cliente_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`doc_cliente_id`),
  KEY `FK_doc_cliente_1` (`cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `doc_cliente`
--

INSERT INTO `doc_cliente` (`doc_cliente_id`, `titulo`, `assunto`, `data_doc`, `doc`, `cliente_id`) VALUES
(1, 'HDHAUDHAUDHU', 'HUDAHDUAHDU', '2015-09-09', 'script.sql', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doc_empreendimento`
--

CREATE TABLE IF NOT EXISTS `doc_empreendimento` (
  `doc_empreendimento_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL DEFAULT '',
  `assunto` varchar(45) NOT NULL DEFAULT '',
  `data_doc` varchar(45) NOT NULL DEFAULT '',
  `doc` varchar(45) NOT NULL DEFAULT '',
  `empreendimento_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`doc_empreendimento_id`),
  KEY `fk_doc_empreendimento_empreendimento1_idx` (`empreendimento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `doc_empreendimento`
--

INSERT INTO `doc_empreendimento` (`doc_empreendimento_id`, `titulo`, `assunto`, `data_doc`, `doc`, `empreendimento_id`) VALUES
(1, 'hduahsux', 'asjxia', '2015-09-09', 'ftps_ativos.xml', 4),
(2, 'hudhasx', 'hduashxu', '2015-09-09', 'items.png', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empreendimento`
--

CREATE TABLE IF NOT EXISTS `empreendimento` (
  `empreendimento_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `data_inicio` varchar(45) NOT NULL DEFAULT '',
  `endereco` varchar(45) NOT NULL DEFAULT '',
  `cidade` varchar(200) NOT NULL DEFAULT '',
  `porcentagem` int(10) unsigned NOT NULL DEFAULT '0',
  `banner` varchar(45) NOT NULL DEFAULT '',
  `admin_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`empreendimento_id`),
  KEY `fk_empreendimento_admin1_idx` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `empreendimento`
--

INSERT INTO `empreendimento` (`empreendimento_id`, `nome`, `data_inicio`, `endereco`, `cidade`, `porcentagem`, `banner`, `admin_id`) VALUES
(4, 'TESTE', '2015-09-09', 'HUX', 'Manaus', 23, '', 2),
(5, 'dasda', '2015-09-09', 'dadasd', 'Manaus', 56, 'tumblr_n1opydmM5H1rqx86wo1_540.png', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `img_empreendimento`
--

CREATE TABLE IF NOT EXISTS `img_empreendimento` (
  `img_empreendimento_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_img` date DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `legenda` varchar(45) DEFAULT NULL,
  `codigo_video` varchar(45) DEFAULT NULL,
  `legenda_video` varchar(45) DEFAULT NULL,
  `categoria_id` int(10) unsigned NOT NULL,
  `empreendimento_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`img_empreendimento_id`),
  KEY `fk_img_empreendimento_empreendimento_idx` (`empreendimento_id`),
  KEY `fk_img_empreendimento_categoria1_idx` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `img_empreendimento`
--

INSERT INTO `img_empreendimento` (`img_empreendimento_id`, `data_img`, `img`, `legenda`, `codigo_video`, `legenda_video`, `categoria_id`, `empreendimento_id`) VALUES
(1, '1991-10-03', '2.jpg', 'dsadad', 'ddsda', 'dsadad', 1, 5);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `FK_cliente_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `FK_cliente_1` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimento` (`empreendimento_id`);

--
-- Limitadores para a tabela `doc_cliente`
--
ALTER TABLE `doc_cliente`
  ADD CONSTRAINT `FK_doc_cliente_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`);

--
-- Limitadores para a tabela `doc_empreendimento`
--
ALTER TABLE `doc_empreendimento`
  ADD CONSTRAINT `fk_doc_empreendimento_empreendimento1` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimento` (`empreendimento_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `empreendimento`
--
ALTER TABLE `empreendimento`
  ADD CONSTRAINT `fk_empreendimento_admin1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `img_empreendimento`
--
ALTER TABLE `img_empreendimento`
  ADD CONSTRAINT `fk_img_empreendimento_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_img_empreendimento_empreendimento` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimento` (`empreendimento_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
