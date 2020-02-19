-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Fev-2019 às 08:13
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
-- Estrutura da tabela `pis`
--

CREATE TABLE `pis` (
  `id_pis` int(16) NOT NULL,
  `codigo_pis` varchar(16) NOT NULL,
  `desc_pis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pis`
--

INSERT INTO `pis` (`id_pis`, `codigo_pis`, `desc_pis`) VALUES
(1, '01', '01: Operação tributável (BC = Operação alíq. normal (cumul./não cumul.)'),
(2, '02', '02: Operação tributável (BC = valor da operação (alíquota diferenciada)'),
(3, '03', '03: Operação tributável (BC = quant. x alíq. por unidade de produto)'),
(4, '04', '04: Operação tributável (tributação monofásica, alíquota zero)'),
(5, '06', '06: Operação tributável (alíquota zero)'),
(6, '07', '07: Operação isenta da contribuição'),
(7, '08', '08: Operação sem incidência da contribuição'),
(8, '09', '09: Operação com suspensão da contribuição'),
(9, '49', '49: Outras Operações de Saída'),
(10, '50', '50: Direito a Crédito. Vinculada Exclusivamente a Receita Tributada no Mercado Interno'),
(11, '51', '51: Direito a Crédito. Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno'),
(12, '52', '52: Direito a Crédito. Vinculada Exclusivamente a Receita de Exportação'),
(13, '53', '53: Direito a Crédito. Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno'),
(14, '54', '54: Direito a Crédito. Vinculada a Receitas Tributadas no Mercado Interno e de Exportação'),
(15, '55', '55: Direito a Crédito. Vinculada a Receitas Não-Trib. no Mercado Interno e de Exportação'),
(16, '56', '56: Direito a Crédito. Vinculada a Rec. Trib. e Não-Trib. Mercado Interno e Exportação'),
(17, '60', '60: Créd. Presumido. Aquisição Vinc. Exclusivamente a Receita Tributada no Mercado Interno'),
(18, '61', '61: Créd. Presumido. Aquisição Vinc. Exclusivamente a Rec. Não-Trib. no Mercado Interno'),
(19, '62', '62: Créd. Presumido. Aquisição Vinc. Exclusivamente a Receita de Exportação'),
(20, '63', '63: Créd. Presumido. Aquisição Vinc. a Rec. Trib. e Não-Trib. no Mercado Interno'),
(21, '64', '64: Créd. Presumido. Aquisição Vinc. a Rec. Trib. no Mercado Interno e de Exportação'),
(22, '65', '65: Créd. Presumido. Aquisição Vinc. a Rec. Não-Trib. Mercado Interno e Exportação'),
(23, '66', '66: Créd. Presumido. Aquisição Vinc. a Rec. Trib. e Não-Trib. Mercado Interno e Exportação'),
(24, '67', '67: Crédito Presumido - Outras Operações'),
(25, '70', '70: Operação de Aquisição sem Direito a Crédito'),
(26, '71', '71: Operação de Aquisição com Isenção'),
(27, '72', '72: Operação de Aquisição com Suspensão'),
(28, '73', '73: Operação de Aquisição a Alíquota Zero'),
(29, '74', '74: Operação de Aquisição sem Incidência da Contribuição'),
(30, '75', '75: Operação de Aquisição por Substituição Tributária'),
(31, '98', '98: Outras Operações de Entrada'),
(32, '99', '99: Outras operações');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pis`
--
ALTER TABLE `pis`
  ADD PRIMARY KEY (`id_pis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pis`
--
ALTER TABLE `pis`
  MODIFY `id_pis` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
