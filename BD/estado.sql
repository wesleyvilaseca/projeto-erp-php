-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Fev-2019 às 08:11
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
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(16) NOT NULL,
  `nome_estado` varchar(64) NOT NULL,
  `uf_estado` varchar(2) NOT NULL,
  `codigo_estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `nome_estado`, `uf_estado`, `codigo_estado`) VALUES
(1, 'Acre', 'AC', '12'),
(2, 'Alagoas', 'AL', '27'),
(3, 'Amapá', 'AP', '16'),
(4, 'Amazonas', 'AM', '13'),
(5, 'Bahia', 'BA', '29'),
(6, 'Ceará', 'CE', '23'),
(7, 'Distrito Federal', 'DF', '53'),
(8, 'Espírito Santo', 'ES', '32'),
(9, 'Goiás', 'GO', '52'),
(10, 'Maranhão', 'MA', '21'),
(11, 'Mato Grosso do Sul', 'MS', '50'),
(12, 'Mato Grosso', 'MT', '51'),
(13, 'Minas Gerais', 'MG', '31'),
(14, 'Paraná', 'PR', '41'),
(15, 'Paraíba', 'PB', '25'),
(16, 'Pará', 'PA', '15'),
(17, 'Pernambuco', 'PE', '26'),
(18, 'Piauí', 'PI', '22'),
(19, 'Rio de Janeiro', 'RJ', '33'),
(20, 'Rio Grande do Norte', 'RN', '24'),
(21, 'Rio Grande do Sul', 'RS', '43'),
(22, 'Rondônia', 'RO', '11'),
(23, 'Roraima', 'RR', '14'),
(24, 'Santa Catarina', 'SC', '42'),
(25, 'Sergipe', 'SE', '28'),
(26, 'São Paulo', 'SP', '35'),
(27, 'Tocantins', 'TO', '17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
