-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/08/2024 às 17:29
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbmicomida`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id_arq` int(4) NOT NULL,
  `url_arq` varchar(100) NOT NULL,
  `nome_arq` varchar(40) NOT NULL,
  `id_login` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `arquivos`
--

INSERT INTO `arquivos` (`id_arq`, `url_arq`, `nome_arq`, `id_login`) VALUES
(20, 'arquivos/7ffbc52458388eca77bd8bbc9d051c7d.jpg', 'Madero', 33),
(22, 'arquivos/d59580b5fddd54df1ba804e99ac7a9c2.jpg', 'cafe', 35),
(23, 'arquivos/ca05d04f35c4625d69ba3c73680a99e1.jpg', 'mad', 36),
(24, 'arquivos/7d553f995d940370bc361414272ba169.jpeg', 'dom', 37),
(25, 'arquivos/669c964a0be7ad856a5a268348e13f77.jpg', 'cad', 38),
(26, 'arquivos/f9307cc749a01d84e590971637bd760e.jpg', 'bur', 39),
(27, 'arquivos/1acf33a947f52ffd65fc0d1fe14a652a.jpg', 'chel', 40),
(28, 'arquivos/53c31c9786218e941f64af128b9ed89a.jpg', '', 41),
(29, 'arquivos/1e91677dbab2ea043285603866a5b89d.jpg', '', 42),
(30, 'arquivos/51d63185dd002772f638eca3f0a75e7d.jpg', '', 43),
(31, 'arquivos/378ae3ed01e2e67d66b5a9792b3b6913.jpg', '', 44);

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id_avaliacao` int(4) NOT NULL,
  `id_restaurante` int(4) NOT NULL,
  `id_cliente` int(4) NOT NULL,
  `nota` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `avaliacao`
--

INSERT INTO `avaliacao` (`id_avaliacao`, `id_restaurante`, `id_cliente`, `nota`) VALUES
(1, 46, 15, 5),
(2, 47, 15, 2),
(3, 47, 15, 4),
(4, 49, 15, 3),
(5, 49, 15, 4),
(6, 51, 15, 3),
(7, 0, 0, 0),
(8, 48, 15, 5),
(9, 52, 16, 5),
(10, 52, 16, 5),
(11, 50, 15, 1),
(12, 50, 15, 1),
(13, 53, 15, 4),
(14, 53, 15, 4),
(15, 54, 15, 4),
(16, 54, 15, 4),
(18, 55, 15, 3),
(19, 55, 15, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(4) NOT NULL,
  `nm_cliente` varchar(40) NOT NULL,
  `dt_nasc_cliente` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `email_cliente` varchar(100) NOT NULL,
  `senha_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nm_cliente`, `dt_nasc_cliente`, `sexo`, `email_cliente`, `senha_cliente`) VALUES
(16, 'Malu', '1993-08-19', 'nao-binario', 'malu@email.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'Miguel', '1993-05-11', 'masculino', 'miguel@email.com', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'stitich', '1993-05-12', 'masculino', 'sitich@email.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(19, 'maya', '2002-02-02', 'nao-binario', 'maiama@email.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'tuca', '2001-09-02', 'masculino', 'tuca@gmail.com', '$2y$10$Fhw5LF6R1LvBYOmFfk1syexMgkfswlUACr/JlhEk7Rf'),
(25, 'oswaldo', '1993-05-11', 'masculino', 'oswaldo@email.com', '$2y$10$.lKh7yNsj0RzW0Ma5BB5dekQtUWsUgAwPaFbaIg2NcV'),
(26, 'tucano', '2012-12-12', 'masculino', 'tucano@email.com', '$2y$10$LNje9pybMP.8JENcvn0WdeyiGJOOnRlvBGLS.1KE2Sh'),
(27, 'marialoca', '1993-05-11', 'feminino', 'maria@email.com', '$2y$10$3RvQb2MVjxgNnWfJOYclAeOFlpo4/wtGKp0Y5UbvSgL'),
(29, 'pc', '2008-03-12', 'masculino', 'pc@email.com', '$2y$10$cjG8YWVCdbUwYPi.euG3keMhIDm08g2Ny9ocfZFPyCR'),
(30, 'bono', '1993-05-11', 'masculino', 'bono@email.com', '$2y$10$uVh/am.AcQAsxlsL9AWtPeYM4tN8WXWIGuEwQnkvsv9'),
(32, 'juju', '1993-05-11', 'feminino', 'juju@email.com', '$2y$10$IX53gnjIBliCDe8rYO2mKO3LuWq.wfPIo/GI5QMd6TN');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(4) NOT NULL,
  `id_restaurante` int(4) NOT NULL,
  `id_cliente` int(4) NOT NULL,
  `comentario` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(4) NOT NULL,
  `cep_end` int(20) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `id_login` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `cep_end`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `id_login`) VALUES
(29, 81530, 'Avenida Nossa Senhora de Lourdes', 63, 'Jardim das Américas', 'Curitiba', 'PR', 29),
(30, 81530, 'Avenida Nossa Senhora de Lourdes', 63, 'Jardim das Américas', 'Curitiba', 'PR', 30),
(31, 81530, 'Avenida Nossa Senhora de Lourdes', 63, 'Jardim das Américas', 'Curitiba', 'PR', 31),
(32, 81530, 'Avenida Nossa Senhora de Lourdes', 63, 'Jardim das Américas', 'Curitiba', 'PR', 32),
(33, 81530, 'Avenida Nossa Senhora de Lourdes', 63, 'Jardim das Américas', 'Curitiba', 'PR', 33),
(34, 81530, 'Avenida Nossa Senhora de Lourdes', 63, 'Jardim das Américas', 'Curitiba', 'PR', 34),
(35, 80030, 'Rua Comendador Fontana', 229, 'Centro Cívico', 'Curitiba', 'PR', 35),
(36, 81530, 'Avenida Nossa Senhora de Lourdes', 63, 'Jardim das Américas', 'Curitiba', 'PR', 36),
(37, 80420, 'Avenida do Batel', 1280, 'Batel', 'Curitiba', 'PR', 37),
(38, 82600, 'Avenida José Gulin', 105, 'Bacacheri', 'Curitiba', 'PR', 38),
(39, 80250, 'Rua Brigadeiro Franco', 2300, 'Centro', 'Curitiba', 'PR', 39),
(40, 80530230, 'Rua Marechal Hermes', 113, 'Juvevê', 'Curitiba', 'PR', 40),
(41, 80035000, 'Avenida Munhoz da Rocha', 580, 'Cabral', 'Curitiba', 'PR', 41),
(42, 81710, 'Rua Francisco Derosso', 1683, 'Xaxim', 'Curitiba', 'PR', 42),
(43, 80240, 'Avenida Sete de Setembro', 5831, 'Seminário', 'Curitiba', 'PR', 43),
(44, 80035, 'Avenida Munhoz da Rocha', 1049, 'Cabral', 'Curitiba', 'PR', 44);

-- --------------------------------------------------------

--
-- Estrutura para tabela `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(4) NOT NULL,
  `id_restaurante` int(4) NOT NULL,
  `dia_semana` varchar(15) NOT NULL,
  `horario_abertura` int(10) NOT NULL,
  `horario_fechamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `login_restaurante`
--

CREATE TABLE `login_restaurante` (
  `id_login` int(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login_restaurante`
--

INSERT INTO `login_restaurante` (`id_login`, `email`, `senha`) VALUES
(29, 'madero@email.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(35, 'viajante@email.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(36, 'madero@email.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(37, 'dominos@email.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(38, 'cadore@email.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(39, 'king@email.con', '81dc9bdb52d04dc20036dbd8313ed055'),
(40, 'chelsea@email.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(41, 'madero@email.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(42, 'bagio@email.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(43, 'mercearia@email.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(44, 'mustang@email.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura para tabela `restaurante`
--

CREATE TABLE `restaurante` (
  `id_restaurante` int(4) NOT NULL,
  `nm_restaurante` varchar(100) NOT NULL,
  `telefone_restaurante` int(15) NOT NULL,
  `id_login_restaurante` int(4) NOT NULL,
  `id_endereco` int(4) NOT NULL,
  `rodizio` char(1) NOT NULL,
  `delivery` char(1) NOT NULL,
  `a_la_carte` char(1) NOT NULL,
  `insta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `restaurante`
--

INSERT INTO `restaurante` (`id_restaurante`, `nm_restaurante`, `telefone_restaurante`, `id_login_restaurante`, `id_endereco`, `rodizio`, `delivery`, `a_la_carte`, `insta`) VALUES
(46, 'Café do Viajante', 33332222, 35, 35, '0', '1', '0', 'https://www.instagram.com/cafedoviajante/'),
(48, 'Domino\'s Pizza', 33335555, 37, 37, '1', '1', '0', 'https://www.instagram.com/dominos/'),
(49, 'Ca\'dore Comida Descomplicada', 33334444, 38, 38, '1', '1', '1', 'https://www.instagram.com/cadorecuritiba/'),
(50, 'Burger King - Shopping Curitiba', 33331111, 39, 39, '1', '1', '0', 'https://www.instagram.com/burgerking/'),
(51, 'Chelsea Café', 33332222, 40, 40, '0', '1', '0', 'https://www.instagram.com/chelseaburger.br/'),
(52, 'Madero', 33331166, 41, 41, '1', '1', '0', 'https://www.instagram.com/maderobrasil/'),
(53, 'Baggio Pizzeria', 33228855, 42, 42, '1', '1', '1', 'https://www.instagram.com/pizzariabaggio/'),
(54, 'Mercearia Bresser', 33668899, 43, 43, '1', '1', '1', 'https://www.instagram.com/merceariabresser/'),
(55, 'Mustang Sally', 33224477, 44, 44, '0', '1', '1', 'https://www.instagram.com/mustangsallybar/');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipocomida`
--

CREATE TABLE `tipocomida` (
  `id_tipocomida` int(4) NOT NULL,
  `nm_tipocomida` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipocomida`
--

INSERT INTO `tipocomida` (`id_tipocomida`, `nm_tipocomida`) VALUES
(1, 'Fastfood'),
(2, 'Cafés'),
(3, 'Hambuguerias'),
(4, 'Pizzaria');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_restaurante`
--

CREATE TABLE `tipo_restaurante` (
  `id_tipo_restaurante` int(4) NOT NULL,
  `id_restaurante` int(4) NOT NULL,
  `id_tipocomida` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipo_restaurante`
--

INSERT INTO `tipo_restaurante` (`id_tipo_restaurante`, `id_restaurante`, `id_tipocomida`) VALUES
(18, 43, 3),
(20, 46, 2),
(21, 47, 3),
(22, 48, 4),
(23, 49, 1),
(24, 49, 3),
(25, 49, 4),
(26, 50, 1),
(27, 50, 3),
(28, 51, 2),
(29, 51, 3),
(30, 52, 3),
(31, 53, 4),
(32, 54, 4),
(33, 55, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'mariama', 'mama@email.com', '$2y$10$lQ/4bgJ0U7aXYv8b62rjaeph.nzxZcNEFvTvLd4v3FoEQrt.ETJWq'),
(2, 'juvenal', 'juve@email.com', '$2y$10$QBCeKjg8g71fS01VM4BrEejCVPRvg3x3vd2EFPznDPH5JJ.Uauod.'),
(6, 'bela', 'bebe@email.com', '$2y$10$eeLw6lgAOLzE6uQwn9Ix9.Wbzrp6m85xgKMDYdiv4jEVnyNKGzvBO');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id_arq`);

--
-- Índices de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id_avaliacao`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Índices de tabela `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Índices de tabela `login_restaurante`
--
ALTER TABLE `login_restaurante`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices de tabela `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`id_restaurante`);

--
-- Índices de tabela `tipocomida`
--
ALTER TABLE `tipocomida`
  ADD PRIMARY KEY (`id_tipocomida`);

--
-- Índices de tabela `tipo_restaurante`
--
ALTER TABLE `tipo_restaurante`
  ADD PRIMARY KEY (`id_tipo_restaurante`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id_arq` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id_avaliacao` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login_restaurante`
--
ALTER TABLE `login_restaurante`
  MODIFY `id_login` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `restaurante`
--
ALTER TABLE `restaurante`
  MODIFY `id_restaurante` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `tipocomida`
--
ALTER TABLE `tipocomida`
  MODIFY `id_tipocomida` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tipo_restaurante`
--
ALTER TABLE `tipo_restaurante`
  MODIFY `id_tipo_restaurante` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
