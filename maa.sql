-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Mar-2019 às 13:52
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `titulo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `img`, `titulo`) VALUES
(2, 'banner-pinceis.png', 'pinceis'),
(3, 'banner-frase.png', 'Banner 2'),
(4, 'banner-feliz2019.png', 'banner 3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bio`
--

CREATE TABLE `bio` (
  `id` int(11) NOT NULL,
  `textoBio` text NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL,
  `alt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nomeCli` varchar(150) NOT NULL,
  `emailCli` varchar(250) NOT NULL,
  `msgCli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nomeCli`, `emailCli`, `msgCli`) VALUES
(1, 'Maria', 'maria@gmail.com', 'o~voyvõvfõofwvbpwbfp.'),
(2, 'Joana', 'Joana@outlook.com', 'ofiyvibon~lmlc w.'),
(3, '', 'reehnataoliveira592@gmail.com', ''),
(4, 'pedro', 'pedro@hotmail.com', 'gsgsgdgdfgd.'),
(5, 'Renata Carvalho', 'reehnataoliveira592@gmail.com', 'iyifof9fg'),
(6, 'Renata Carvalho', 'reehnataoliveira592@gmail.com', 'teste 10:43'),
(7, 'Renata Carvalho', 'reehnataoliveira592@gmail.com', 'egwrgwrg.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimentopg`
--

CREATE TABLE `depoimentopg` (
  `id` int(11) NOT NULL,
  `nomeCli` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numPedido` int(10) NOT NULL,
  `notaProd` int(5) NOT NULL,
  `textoDepo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `depoimentopg`
--

INSERT INTO `depoimentopg` (`id`, `nomeCli`, `email`, `endereco`, `numPedido`, `notaProd`, `textoDepo`) VALUES
(1, '\".$this->nomeCli.\"', '\".$this->email.\"', '\".$this->endereco.\"', 0, 0, '\".$this->textoDepo\"'),
(2, 'Reeh teste', 'Reehnata@gmail.com teste', 'guarulho sp teste', 13, 9, 'yftfiufig8duudouhf. teste'),
(3, 'Reehnata teste', 'reeh@gmail.com teste', 'Sao Paulo sp teste', 45, 9, 'teste 18/03 08:54'),
(4, '\".$this->nomeCli.\"', '\".$this->email.\"', '\".$this->endereco.\"', 0, 0, '\".$this->textoDepo.\"'),
(5, '', 'reehnataoliveira592@gmail.com', 'Guarulhos SP', 0, 10, 'SUTUTSTS'),
(6, 'Renata Carvalho', 'reehnataoliveira@gmail.com', 'Guarulhos SP', 1001, 10, 'kltukyuk');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `alt` varchar(150) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergfreq`
--

CREATE TABLE `pergfreq` (
  `id` int(11) NOT NULL,
  `previaPer` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `pergResp` text CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `portf`
--

CREATE TABLE `portf` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `alt` int(150) NOT NULL,
  `descImg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `redesocial`
--

CREATE TABLE `redesocial` (
  `id` int(11) NOT NULL,
  `linkFace` varchar(250) NOT NULL,
  `linkInsta` varchar(250) NOT NULL,
  `linkWhats` varchar(250) NOT NULL,
  `linkTwitter` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `topolinhaum`
--

CREATE TABLE `topolinhaum` (
  `id` int(11) NOT NULL,
  `telEmpr` varchar(100) NOT NULL,
  `emaiEmpr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `senha` varchar(500) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `img`, `email`, `senha`) VALUES
(1, 'vadvadv', 'reehnataoliveira592@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depoimentopg`
--
ALTER TABLE `depoimentopg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pergfreq`
--
ALTER TABLE `pergfreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portf`
--
ALTER TABLE `portf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redesocial`
--
ALTER TABLE `redesocial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topolinhaum`
--
ALTER TABLE `topolinhaum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bio`
--
ALTER TABLE `bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `depoimentopg`
--
ALTER TABLE `depoimentopg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pergfreq`
--
ALTER TABLE `pergfreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portf`
--
ALTER TABLE `portf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `redesocial`
--
ALTER TABLE `redesocial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topolinhaum`
--
ALTER TABLE `topolinhaum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
