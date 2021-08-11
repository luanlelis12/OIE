-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Ago-2021 às 01:39
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_oie`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `manifestacao`
--

CREATE TABLE `manifestacao` (
  `chave` varchar(6) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `orgao` varchar(35) NOT NULL,
  `assunto` varchar(35) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `identificar` tinyint(1) NOT NULL,
  `status` varchar(10) NOT NULL,
  `resposta` varchar(400) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `manifestacao`
--

INSERT INTO `manifestacao` (`chave`, `tipo`, `orgao`, `assunto`, `descricao`, `identificar`, `status`, `resposta`, `id_user`) VALUES
('AT8IOA', 'Reclamação', 'coordenacoes de curso', 'Infraestrutura', 'Precisamos de mais computadores nos laboratórios', 1, 'Respondida', 'Vamos comprar mais computador', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `verified`, `token`, `password`) VALUES
(2, 'Julion Ropki', 'julionfelipe14@gmail.com', 1, 'ac886a4d97e046e60d3c3a9475c7cc13d6340b6c9bebb1e01886a5f534493b422771c9c30ddf70bec1c1a8caaf5303877e9e', '$2y$10$NmAJeRiOBnRLrsfBe1YGbOksawtsBzvxa0aSApLOUhA7UfdGOhSWm'),
(3, 'teste1', 'teste1@gmail.com', 1, '7bd6accbc0c3a9645cc5740d220272cc7228ee920254ea853a70261f40f67d7f4ccda18fc7bec44dca15e72fad187e9666e4', '$2y$10$bLp10SX3CUi1wu1ihNEHcey763LpMDddJwJAgomXpqGryGbG7S9US'),
(4, 'admin', 'admin@gmail.com', 1, 'a940b7f71076f326937b9780b186a09e92316091fa5ef867b1547a8e82d6224228615b0cdb5d53ae15b5eee726a0c82b452f', '$2y$10$Y8Y/IAd2zdmIdNy.Yxk8cunqmTEOSEl7rjGZ6J8sCQ.9YgQHJivRW'),
(9, 'Luan Alves Lélis Costa', 'luanlelis09@gmail.com', 0, 'a74708f5bbafad2ed92854c080d9b3535d7b2689bb5806422fe2a3681ee361014167613278ba6984f7ee60953d9129fbb820', '$2y$10$fRuaMftGEEn2BWPfWRKq2O3c9MgLSU8KwA4ldycg77..ICXztyNvS');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `manifestacao`
--
ALTER TABLE `manifestacao`
  ADD PRIMARY KEY (`chave`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `manifestacao`
--
ALTER TABLE `manifestacao`
  ADD CONSTRAINT `manifestacao_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
