--Exemplo de pacientes
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/10/2024 às 10:29
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
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(10) UNSIGNED NOT NULL,
  `nome_paciente` varchar(100) DEFAULT NULL,
  `cpf_paciente` varchar(14) DEFAULT NULL,
  `data_nasc_paciente` date DEFAULT NULL,
  `sexo_paciente` char(1) DEFAULT NULL,
  `fone_paciente` varchar(20) DEFAULT NULL,
  `email_paciente` varchar(100) DEFAULT NULL,
  `endereco_paciente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nome_paciente`, `cpf_paciente`, `data_nasc_paciente`, `sexo_paciente`, `fone_paciente`, `email_paciente`, `endereco_paciente`) VALUES
(1, 'Naruto Uzumaki', '78563214', '2000-10-10', 'M', '1010-1010', 'narutouzumakihokage@gmail.com', 'Vila da Folha'),
(2, 'Sasuke Uchiha', '66612453', '2000-07-23', 'M', '0723-0723', 'sasukeuchiha@gmail.com', 'Vila da Folha'),
(3, 'Gaara', '75168494', '2000-01-19', 'M', '1901-1901', 'gaarakazekage@gmail.com', 'Vila da Areia'),
(4, 'Hinata Hyuuga', '2317495752', '2000-12-27', 'F', '2712-2712', 'hinatahyuuga@gmail.com', 'Vila da Folha'),
(5, 'Killer Bee', '15484542', '1990-05-15', 'M', '1505-1505', 'rapperdanuvemfodaprakrl@gmail.com', 'Vila da Nuvem'),
(6, 'Nagato', '1357845', '1990-09-19', 'M', '1909-1909', 'nagatouzumaki@akatsuki.com', 'É segredo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
