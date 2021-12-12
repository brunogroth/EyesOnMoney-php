-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2021 às 11:55
-- Versão do servidor: 10.4.20-MariaDB
-- Versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eyesonmoney`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `invest_rf`
--

CREATE TABLE `invest_rf` (
  `id_invest_rf` int(11) NOT NULL COMMENT 'id',
  `produto_rf` varchar(50) NOT NULL COMMENT 'Produto Investido (CDB, LCI, LCA)',
  `valor_rf` float NOT NULL COMMENT 'Valor inicial do aporte ',
  `rentab_rf` float NOT NULL COMMENT 'Rentabilidade do Investimento (EX: 100% CDI)',
  `banco_emissor_rf` varchar(50) NOT NULL COMMENT 'Banco emissor',
  `data_aquis_rf` date NOT NULL COMMENT 'Data de Aquisição do título de renda fixa adquirido',
  `data_venc_rf` date NOT NULL COMMENT 'Data de Vencimento do título de renda fixa adquirido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `invest_rf`
--

INSERT INTO `invest_rf` (`id_invest_rf`, `produto_rf`, `valor_rf`, `rentab_rf`, `banco_emissor_rf`, `data_aquis_rf`, `data_venc_rf`) VALUES
(6, 'CDB', 12501.6, 98, '001 BANCO DO BRASIL SA', '2016-03-25', '2036-03-25'),
(8, 'CRI/CRA', 19550, 113, '237 BANCO BRADESCO SA', '2018-01-05', '2028-01-06'),
(10, 'LCI', 83500.5, 109, '422 — BANCO SAFRA S.A.', '2014-10-01', '2024-11-15'),
(11, 'CDB', 805000, 119, '001 BANCO DO BRASIL SA', '2020-02-03', '2040-02-03'),
(13, 'CRI/CRA', 31250, 100, 'BANCO INTER SA', '2020-01-01', '2022-01-03'),
(14, 'CDB', 55000, 99.5, '422 — BANCO SAFRA S.A.', '2021-12-02', '2031-12-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `invest_rf`
--
ALTER TABLE `invest_rf`
  ADD PRIMARY KEY (`id_invest_rf`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `invest_rf`
--
ALTER TABLE `invest_rf`
  MODIFY `id_invest_rf` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
