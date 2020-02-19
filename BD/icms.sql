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
-- Estrutura da tabela `icms`
--

CREATE TABLE `icms` (
  `id_icms` int(16) NOT NULL,
  `codigo_icms` varchar(16) NOT NULL,
  `desc_icms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `icms`
--

INSERT INTO `icms` (`id_icms`, `codigo_icms`, `desc_icms`) VALUES
(1, '00', '00: Tributada integralmente'),
(2, '10', '10: Tributada com cobr. por subst. trib.'),
(3, '20', '20: Com redução de base de cálculo'),
(4, '30', '30: Isenta ou não trib com cobr por subst trib'),
(5, '40', '40: Isenta'),
(6, '41', '41: Não tributada'),
(7, '50', '50: Suspesão'),
(8, '51', '51: Diferimento'),
(9, '60', '60: ICMS cobrado anteriormente por subst trib'),
(10, '70', '70: Redução de Base Calc e cobr ICMS por subst trib'),
(11, '90', '90: Outros'),
(12, '10Part', 'Partilha 10: Entre UF origem e destino ou definida na legislação com Subst Trib'),
(13, '90Part', 'Partilha 90: Entre UF origem e destino ou definida na legislação - outros'),
(14, '41ST', 'Repasse 41: ICMS ST retido em operações interestaduais com repasses do Subst Trib'),
(15, '101', 'Simples Nacional: 101: Com permissão de crédito'),
(16, '102', 'Simples Nacional: 102: Sem permissão de crédito'),
(17, '103', 'Simples Nacional: 103: Isenção do ICMS para faixa de receita bruta'),
(18, '201', 'Simples Nacional: 201: Com permissão de crédito, com cobr ICMS por Subst Trib'),
(19, '202', 'Simples Nacional: 202: Sem permissão de crédito, com cobr ICMS por Subst Trib'),
(20, '203', 'Simples Nacional: 203: Isenção ICMS p/ faixa de receita bruta e cobr do ICMS por ST'),
(21, '300', 'Simples Nacional: 300: Imune'),
(22, '400', 'Simples Nacional: 400: Não tributada'),
(23, '500', 'Simples Nacional: 500: ICMS cobrado antes por subst trib ou antecipação'),
(24, '900', 'Simples Nacional: 900: Outros');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icms`
--
ALTER TABLE `icms`
  ADD PRIMARY KEY (`id_icms`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `icms`
--
ALTER TABLE `icms`
  MODIFY `id_icms` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
