--Médico de exemplo
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/10/2024 às 10:28
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `médico`
--

CREATE TABLE `médico` (
  `id_medico` int(10) UNSIGNED NOT NULL,
  `nome_medico` varchar(100) DEFAULT NULL,
  `crm_medico` varchar(10) DEFAULT NULL,
  `especialidade_medico` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `médico`
--

INSERT INTO `médico` (`id_medico`, `nome_medico`, `crm_medico`, `especialidade_medico`) VALUES
(1, 'Sakura Haruno', '12345678', 'Ser uma diva '),
(2, 'Orochimaru', '65412645', 'Experimentos ilegais'),
(3, 'Tsunade Senju', '984256', 'Venenos e magia'),
(4, 'Kabuto', '9821248', 'Experimentos ilegais');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `médico`
--
ALTER TABLE `médico`
  ADD PRIMARY KEY (`id_medico`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `médico`
--
ALTER TABLE `médico`
  MODIFY `id_medico` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
