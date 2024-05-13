-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/12/2023 às 19:52
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meusiteexemplo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `tipo` tinyint(4) NOT NULL COMMENT '1-aluguel/2-ajuste/3-reparo',
  `detalhes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL COMMENT 'webservice VIA_CEP (API)',
  `logradouro` varchar(100) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `localidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `numero` int(11) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `celular` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email_alternativo` varchar(50) NOT NULL,
  `tipo` tinyint(4) NOT NULL COMMENT '1-PF/2-PJ',
  `cpf` varchar(15) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `genero` tinyint(4) NOT NULL COMMENT '1-Masculino/2-Feminino/3-Outros',
  `dtnascimento` date NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-Inativo/1-Ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `historico_login`
--

CREATE TABLE `historico_login` (
  `id` int(11) NOT NULL,
  `dthora` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1-Login/2-Logout'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `historico_login`
--

INSERT INTO `historico_login` (`id`, `dthora`, `id_usuario`, `status`) VALUES
(1, '2023-12-04 18:38:39', 1, 1),
(2, '2023-12-04 19:38:39', 1, 2),
(3, '2023-12-03 18:39:02', 2, 1),
(4, '2023-12-03 21:39:02', 2, 2),
(5, '2023-12-05 18:39:15', 3, 1),
(6, '2023-12-05 20:39:15', 3, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `dt_criacao` datetime NOT NULL,
  `dt_entrega` datetime NOT NULL,
  `cod_rastreamento` varchar(50) NOT NULL,
  `valor_desconto` float NOT NULL,
  `percentual_desconto` float NOT NULL,
  `valor_frete` float NOT NULL,
  `total_produtos` float NOT NULL,
  `total_pedido` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos_itens`
--

CREATE TABLE `pedidos_itens` (
  `id_pedido_item` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL,
  `quantidade` float NOT NULL,
  `percentual_desconto` float NOT NULL,
  `valor_desconto` float NOT NULL,
  `valor_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos_pagamentos`
--

CREATE TABLE `pedidos_pagamentos` (
  `id_pedidos_pagamentos` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `tipo_pagamento` varchar(50) NOT NULL COMMENT '1-dinheiro/2-cartão/...',
  `valor_pagamento` float NOT NULL,
  `parcelas` int(11) NOT NULL,
  `dt_pagamento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` float NOT NULL,
  `preco_venda` float NOT NULL,
  `estoque` int(11) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `categoria` int(11) NOT NULL COMMENT 'categorias.id_categoria',
  `detalhes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_servicos` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `tipo` tinyint(4) NOT NULL COMMENT '1-aluguel/2-ajuste/3-reparo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `dtcadastro` date NOT NULL,
  `situacao` tinyint(4) NOT NULL,
  `funcao` tinyint(4) NOT NULL COMMENT '1-Usuário/2-Gerente/3-Admin',
  `foto` varchar(1000) NOT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `emailaternativo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `dtcadastro`, `situacao`, `funcao`, `foto`, `telefone`, `emailaternativo`) VALUES
(1, 'Marcos', 'm@k.com', '1234', '2023-12-04', 1, 1, '', NULL, NULL),
(2, 'Rose', 'r@k.com', '3213', '2023-12-04', 1, 2, '', NULL, 'rR@k.com'),
(3, 'Serjão', 'serj@.com', '6783', '2023-12-04', 1, 3, '', NULL, 'serjfoguetes@.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `historico_login`
--
ALTER TABLE `historico_login`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices de tabela `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  ADD PRIMARY KEY (`id_pedido_item`);

--
-- Índices de tabela `pedidos_pagamentos`
--
ALTER TABLE `pedidos_pagamentos`
  ADD PRIMARY KEY (`id_pedidos_pagamentos`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_servicos`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historico_login`
--
ALTER TABLE `historico_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  MODIFY `id_pedido_item` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos_pagamentos`
--
ALTER TABLE `pedidos_pagamentos`
  MODIFY `id_pedidos_pagamentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servicos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
