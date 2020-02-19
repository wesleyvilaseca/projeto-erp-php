-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Fev-2019 às 08:12
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_erp_pronto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ipi`
--

CREATE TABLE `ipi` (
  `id_ipi` int(16) NOT NULL,
  `codigo_ipi` varchar(16) NOT NULL,
  `desc_ipi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ipi`
--

INSERT INTO `ipi` (`id_ipi`, `codigo_ipi`, `desc_ipi`) VALUES
(1, '00', '00: Entrada com recuperação de crédito'),
(2, '01', '01: Entrada tributada com alíquota zero'),
(3, '02', '02: Entrada isenta'),
(4, '03', '03: Entrada não-tributada'),
(5, '04', '04: Entrada imune'),
(6, '05', '05: Entrada com suspensão'),
(7, '49', '49: Outras entradas'),
(8, '50', '50: Saída tributada'),
(9, '51', '51: Saída tributada com alíquota zero'),
(10, '52', '52: Saída isenta'),
(11, '53', '53: Saída não-tributada'),
(12, '54', '54: Saída imune'),
(13, '55', '55: Saída com suspensão'),
(14, '99', '99: Outras saídas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipi`
--
ALTER TABLE `ipi`
  ADD PRIMARY KEY (`id_ipi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipi`
--
ALTER TABLE `ipi`
  MODIFY `id_ipi` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
