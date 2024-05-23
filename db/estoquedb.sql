-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/05/2024 às 14:47
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
-- Banco de dados: `estoquedb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `entradas`
--

CREATE TABLE `entradas` (
  `idEntrada` int(11) NOT NULL,
  `unidadeEntrada` varchar(255) NOT NULL,
  `idEquipamento` int(11) NOT NULL,
  `quantidadeEquipamento` int(11) NOT NULL,
  `motivoEntrada` varchar(255) NOT NULL,
  `estadoEquipamento` varchar(255) NOT NULL,
  `observacaoEquipamento` varchar(255) DEFAULT NULL,
  `codigoEquipamento` varchar(255) NOT NULL,
  `dataEntrada` varchar(255) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nomePessoa` varchar(255) NOT NULL,
  `holeritePessoa` int(11) NOT NULL,
  `marcaEquipamento` varchar(255) NOT NULL,
  `modeloEquipamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `entradas`:
--   `idEquipamento`
--       `tipos_equipamentos` -> `idTipoEquipamento`
--   `idUsuario`
--       `usuarios` -> `idUsuario`
--

--
-- Despejando dados para a tabela `entradas`
--

INSERT INTO `entradas` (`idEntrada`, `unidadeEntrada`, `idEquipamento`, `quantidadeEquipamento`, `motivoEntrada`, `estadoEquipamento`, `observacaoEquipamento`, `codigoEquipamento`, `dataEntrada`, `idUsuario`, `nomePessoa`, `holeritePessoa`, `marcaEquipamento`, `modeloEquipamento`) VALUES
(12, 'Escolin', 3, 2, 'motikalo', 'estados', 'obs', '12345', '2024-05-23 14:45:48', 3, 'Erick', 54312, 'HyperX', 'Pulsefire');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `idEquipamento` int(11) NOT NULL,
  `tipoEquipamento` int(11) NOT NULL,
  `marcaEquipamento` varchar(255) NOT NULL,
  `modeloEquipamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `equipamentos`:
--   `tipoEquipamento`
--       `tipos_equipamentos` -> `idTipoEquipamento`
--

--
-- Despejando dados para a tabela `equipamentos`
--

INSERT INTO `equipamentos` (`idEquipamento`, `tipoEquipamento`, `marcaEquipamento`, `modeloEquipamento`) VALUES
(1, 2, 'Samsung', 'Acer Aspire'),
(2, 1, 'ASUS', 'VivoBook');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `idEstoque` int(11) NOT NULL,
  `quantidadeEstoque` int(11) NOT NULL,
  `idEquipamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `estoque`:
--   `idEquipamento`
--       `tipos_equipamentos` -> `idTipoEquipamento`
--

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`idEstoque`, `quantidadeEstoque`, `idEquipamento`) VALUES
(3, 31, 1),
(4, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `saidas`
--

CREATE TABLE `saidas` (
  `idSaida` int(11) NOT NULL,
  `solicitanteSaida` varchar(255) NOT NULL,
  `quantidadeEquipamento` int(11) NOT NULL,
  `motivoSaida` varchar(255) NOT NULL,
  `dataSaida` varchar(255) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idEquipamento` int(11) NOT NULL,
  `codigoEquipamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `saidas`:
--   `idEquipamento`
--       `equipamentos` -> `idEquipamento`
--   `idUsuario`
--       `usuarios` -> `idUsuario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipos_equipamentos`
--

CREATE TABLE `tipos_equipamentos` (
  `idTipoEquipamento` int(11) NOT NULL,
  `nomeEquipamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `tipos_equipamentos`:
--

--
-- Despejando dados para a tabela `tipos_equipamentos`
--

INSERT INTO `tipos_equipamentos` (`idTipoEquipamento`, `nomeEquipamento`) VALUES
(1, 'Notebook'),
(2, 'Computador'),
(3, 'Mouse');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipos_usuarios`
--

CREATE TABLE `tipos_usuarios` (
  `idTipoUsuario` int(11) NOT NULL,
  `nomeTipoUsuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `tipos_usuarios`:
--

--
-- Despejando dados para a tabela `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`idTipoUsuario`, `nomeTipoUsuario`) VALUES
(1, 'ADMIN'),
(2, 'USUARIO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(255) NOT NULL,
  `emailUsuario` varchar(255) NOT NULL,
  `senhaUsuario` varchar(255) NOT NULL,
  `tipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `usuarios`:
--   `tipoUsuario`
--       `tipos_usuarios` -> `idTipoUsuario`
--

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `tipoUsuario`) VALUES
(3, 'ADMIN', 'admin@admin.com', '$2y$10$cCRJ/0mNXytsz1pMFN8gnO5GECbd8eCF/igDB3eUODfU.dGxij0ha', 1),
(4, 'pedro', 'pedro@gmail.com', '$2y$10$dECGSNOitGqB9ta71mvYrucvgm1AcFZRcSe5DOQ28ZXHLWN0prKKG', 2),
(5, 'guilherme', 'guilhermecorrea77@hotmail.com', '$2y$10$xACCmpxNwoxv83qydfBUm.CDw0nAhFMsNWZSdzh7wXAqMecmr7Yhi', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`idEntrada`),
  ADD KEY `fk_usuario` (`idUsuario`),
  ADD KEY `fk_equipamento` (`idEquipamento`);

--
-- Índices de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`idEquipamento`),
  ADD KEY `fk_tipo_equipamento` (`tipoEquipamento`);

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`idEstoque`),
  ADD KEY `fk_equipamento_estoque` (`idEquipamento`);

--
-- Índices de tabela `saidas`
--
ALTER TABLE `saidas`
  ADD PRIMARY KEY (`idSaida`),
  ADD KEY `fk_usuario_saida` (`idUsuario`),
  ADD KEY `fk_equipamento_saida` (`idEquipamento`);

--
-- Índices de tabela `tipos_equipamentos`
--
ALTER TABLE `tipos_equipamentos`
  ADD PRIMARY KEY (`idTipoEquipamento`);

--
-- Índices de tabela `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_tipo_usuario` (`tipoUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `entradas`
--
ALTER TABLE `entradas`
  MODIFY `idEntrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `idEquipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `idEstoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `saidas`
--
ALTER TABLE `saidas`
  MODIFY `idSaida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipos_equipamentos`
--
ALTER TABLE `tipos_equipamentos`
  MODIFY `idTipoEquipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  MODIFY `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_equipamento` FOREIGN KEY (`idEquipamento`) REFERENCES `tipos_equipamentos` (`idTipoEquipamento`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Restrições para tabelas `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD CONSTRAINT `fk_tipo_equipamento` FOREIGN KEY (`tipoEquipamento`) REFERENCES `tipos_equipamentos` (`idTipoEquipamento`);

--
-- Restrições para tabelas `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `fk_equipamento_estoque` FOREIGN KEY (`idEquipamento`) REFERENCES `tipos_equipamentos` (`idTipoEquipamento`);

--
-- Restrições para tabelas `saidas`
--
ALTER TABLE `saidas`
  ADD CONSTRAINT `fk_equipamento_saida` FOREIGN KEY (`idEquipamento`) REFERENCES `equipamentos` (`idEquipamento`),
  ADD CONSTRAINT `fk_usuario_saida` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Restrições para tabelas `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_tipo_usuario` FOREIGN KEY (`tipoUsuario`) REFERENCES `tipos_usuarios` (`idTipoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
