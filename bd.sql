
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `cobana`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_backupentrada`
--

CREATE TABLE IF NOT EXISTS `tb_backupentrada` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `matricula` int(20) NOT NULL,
  `tipo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `situacao` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `identidade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `placa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `veiculo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dataentrada` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `horaentrada` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `horasaida` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricula` (`matricula`,`horasaida`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--
 
CREATE TABLE IF NOT EXISTS `tb_cadastro` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  
  `matricula` int(30) NOT NULL,
  `tipo` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `situacao` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `identidade` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `placa` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `veiculo` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `cidade` varchar(30) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `uf` char(2) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `empresa` varchar(30) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `datacadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identidade` (`identidade`),
  UNIQUE KEY `id` (`id`,`tipo`,`nome`,`identidade`,`placa`,`veiculo`,`cidade`,`uf`,`empresa`),
  UNIQUE KEY `tipo` (`tipo`,`nome`,`placa`,`veiculo`,`cidade`,`uf`,`empresa`),
  UNIQUE KEY `matricula` (`matricula`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`id`, `matricula`, `tipo`, `situacao`, `nome`, `identidade`, `placa`, `veiculo`, `cidade`, `uf`, `empresa`, `datacadastro`, `foto`) VALUES
(1, 1225, 'PRESTADOR DE SERVIÇOS', '1', 'MR BEEN', '123456788899', 'NGO-4578', 'ROMIZETA', 'INHUMAS', 'GO', 'VARIAS EMPRESAS', '2017-06-27 15:47:32', '27062017_artigo__ecff42f9790c1a935dd946ed4362af81.jpg'),
(2, 1012, 'TESTE', '1', 'TESTE DE CADASTRO', '11111111111111', 'NNN-0000', 'CARRO', 'CIDADE', 'UF', 'TODAS', '2017-06-27 16:10:17', '27062017_404.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_entrada`
--

CREATE TABLE IF NOT EXISTS `tb_entrada` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `matricula` int(20) NOT NULL,
  `tipo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `situacao` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `identidade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `placa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `veiculo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dataentrada` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `horaentrada` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `horasaida` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricula` (`matricula`,`horasaida`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `tb_entrada`
--

INSERT INTO `tb_entrada` (`id`, `matricula`, `tipo`, `situacao`, `nome`, `identidade`, `placa`, `veiculo`, `cidade`, `uf`, `empresa`, `dataentrada`, `horaentrada`, `horasaida`, `foto`) VALUES
(19, 1225, 'PRESTADOR DE SERVIÇOS', '1', 'MR BEEN', '123456788899', 'NGO-4578', 'ROMIZETA', 'INHUMAS', 'GO', 'VARIAS EMPRESAS', '27/06/2017', '13:17:00', '', ''),
(20, 1012, 'TESTE', '1', 'TESTE DE CADASTRO', '11111111111111', 'NNN-0000', 'CARRO', 'CIDADE', 'UF', 'TODAS', '27/06/2017', '13:17:00', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(520) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'CLEIMAR LEMES', 'cleimar@hotmail.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2017-05-25 00:00:00', '2017-05-25 21:58:01'),
(3, 'USUARIO TESTE', 'demo@demo.com', '62cc2d8b4bf2d8728120d052163a77df', 1, 1, '2017-06-21 10:44:00', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
