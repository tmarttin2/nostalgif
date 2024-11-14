-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql307.infinityfree.com
-- Tempo de geração: 14/11/2024 às 12:31
-- Versão do servidor: 10.6.19-MariaDB
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `if0_37629547_Nostalgif`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `curtidas` int(11) DEFAULT NULL,
  `dataehora` date NOT NULL,
  `descrição` varchar(630) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `principal`
--

CREATE TABLE `principal` (
  `idPrincipal` int(11) NOT NULL,
  `nomePrincipal` varchar(100) NOT NULL,
  `fotoPrincipal` varchar(100) NOT NULL,
  `descricaoPrincipal` varchar(600) NOT NULL,
  `dtInicioPrincipal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `principal`
--

INSERT INTO `principal` (`idPrincipal`, `nomePrincipal`, `fotoPrincipal`, `descricaoPrincipal`, `dtInicioPrincipal`) VALUES
(2, 'Dia nacional do surdo', 'img/diadosurdo.jpg', 'Dia 26 de setembro é dia nacional do surdo, os cartazes que fizemos ☝️☝️', '2024-09-26'),
(3, 'sei la', 'img/Captura de tela 2024-09-27 145636.png', 'jacinto conta teste', '2024-11-07'),
(4, 'oii jailton', 'img/Captura de tela 2024-10-30 201503.png', 'oie', '2024-11-07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `fotoUsuario` varchar(100) DEFAULT NULL,
  `nomeUsuario` varchar(100) NOT NULL,
  `campusUsuario` varchar(100) NOT NULL,
  `telefoneUsuario` varchar(15) DEFAULT NULL,
  `emailUsuario` varchar(100) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `fotoUsuario`, `nomeUsuario`, `campusUsuario`, `telefoneUsuario`, `emailUsuario`, `senhaUsuario`) VALUES
(1, 'img/Captura de tela_20230626_213021.png', 'TWOWIWS', 'Arapongas', '(99) 99999-9999', 'thayzonaetintin@gmailzin', '202cb962ac59075b964b07152d234b70'),
(2, 'img/kilua.jpg', '@tiagoo', 'Jacarezinho', '(22) 22222-2222', 'tiaguinff@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'img/Captura de tela 2024-09-27 145636.png', 'Jacinto', 'Arapongas', '(00) 00000-0000', 'Jacinto@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'img/GettyImages-541316539.webp', 'Dog', 'Umuarama', '(66) 66666-6666', 'dog@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`idPrincipal`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `principal`
--
ALTER TABLE `principal`
  MODIFY `idPrincipal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
