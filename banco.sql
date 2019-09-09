-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Out-2015 às 23:27
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpoo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `nascimento` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `endereco`, `nascimento`, `password`) VALUES
(5, 'Ebony Preto Safado', 'navionegreiro@hotmail.com', '', '', ''),
(7, 'jander galudo', 'alanzz1@hotmail.com', '', '', ''),
(8, 'jander galudo', 'alanzz1@hotmail.com', '', '', ''),
(9, 'Ebony Preto Safado', 'navionegreiro@hotmail.com', '', '', ''),
(14, 'alan Martins 2', 'galudao@hotmail.com', '', '', ''),
(16, 'alan Martins', 'alanzz1@hotmail.com', 'Rua Tiapira', 'z\\x\\zxz\\xz\\', 'z|x\\x\\x\\z'),
(17, 'alan Martins', 'alanzz1@hotmail.com', 'Rua Tiapira', 'z\\x\\zxz\\xz\\', 'z|x\\x\\x\\z');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
