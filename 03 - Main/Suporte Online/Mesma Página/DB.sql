-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Out-2017 às 00:27
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suporte`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sup_conexao`
--

CREATE TABLE `sup_conexao` (
  `id` int(11) NOT NULL,
  `conexao` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sup_mensagem`
--

CREATE TABLE `sup_mensagem` (
  `id` int(11) NOT NULL,
  `fk_conexao` varchar(20) NOT NULL,
  `nick` varchar(30) NOT NULL,
  `mensagem` text NOT NULL,
  `data` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sup_status`
--

CREATE TABLE `sup_status` (
  `id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `sup_status`
--

INSERT INTO `sup_status` (`id`, `status`) VALUES
(1, 'online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sup_conexao`
--
ALTER TABLE `sup_conexao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sup_mensagem`
--
ALTER TABLE `sup_mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sup_status`
--
ALTER TABLE `sup_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sup_conexao`
--
ALTER TABLE `sup_conexao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `sup_mensagem`
--
ALTER TABLE `sup_mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `sup_status`
--
ALTER TABLE `sup_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
