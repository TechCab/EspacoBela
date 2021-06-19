-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 19-Jun-2021 às 06:16
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salao1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `nome`, `email`, `senha`) VALUES
(2, 'Teste', 'teste@adm.com.br', '112233'),
(3, 'Teste', 'teste@adm.com.br', '112233'),
(4, 'Teste', 'teste@adm.com.br', '112233'),
(5, 'Thiago', 'thiago@teste.com.br', '112233'),
(6, 'Thiago', 'thiago@teste.com.br', '112233');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `agenda_id` int(5) NOT NULL,
  `agenda_data` date NOT NULL,
  `agenda_hora` text NOT NULL,
  `servico` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`agenda_id`, `agenda_data`, `agenda_hora`, `servico`) VALUES
(31, '2021-06-18', '19:00', 'Progressiva'),
(32, '2021-06-18', '19:00', 'Progressiva'),
(33, '2021-06-25', '19:00', 'Maquiagem'),
(34, '2021-06-26', '14:00', 'Luzes'),
(35, '2021-06-26', '14:00', 'Luzes'),
(36, '2021-06-26', '14:00', 'Luzes'),
(37, '2021-06-26', '14:00', 'Luzes'),
(38, '2021-06-23', '11:00', 'DepilaÃ§Ã£o'),
(39, '2021-06-21', '09:00', 'Manicure'),
(40, '2021-06-29', '09:00', 'Manicure'),
(41, '2021-06-29', '09:00', 'Manicure'),
(42, '2021-06-29', '09:00', 'Manicure'),
(43, '2021-06-24', '09:00', 'Manicure'),
(44, '2021-06-24', '09:00', 'Manicure'),
(45, '2021-06-24', '09:00', 'Manicure'),
(46, '2021-06-24', '09:00', 'Manicure'),
(47, '2021-06-24', '09:00', 'Manicure');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_Id` int(5) NOT NULL,
  `cliente_nome` varchar(45) NOT NULL,
  `cliente_senha` varchar(45) NOT NULL,
  `cliente_email` varchar(45) NOT NULL,
  `cliente_data_nasc` date DEFAULT NULL,
  `cliente_data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `servico_Id` int(5) NOT NULL,
  `servico_preco` decimal(10,2) NOT NULL,
  `servico_descrição` text NOT NULL,
  `servico_runtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_Id` int(5) NOT NULL,
  `usuario_nome` varchar(45) NOT NULL,
  `usuario_senha` varchar(45) NOT NULL,
  `usuario_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_Id`, `usuario_nome`, `usuario_senha`, `usuario_email`) VALUES
(1, 'Teste', '112233', 'teste@teste.com.br'),
(2, 'Thiago Carneiro CaraÃºba', '112233', 'carauba.guitar@gmail.com'),
(3, 'teste2', '112233', 'teste2@teste.com.br'),
(4, 'teste2', '112233', 'teste2@teste.com.br');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_Id`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`servico_Id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `agenda_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `servico_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
