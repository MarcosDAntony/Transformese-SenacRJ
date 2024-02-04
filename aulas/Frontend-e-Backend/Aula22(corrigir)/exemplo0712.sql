-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2023 às 18:54
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `siteexemplobd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `detalhes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL COMMENT 'Acessando o Webservice de CEP VIA CEP (API)',
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
  `genero` tinyint(4) NOT NULL COMMENT '1-Feminino/2-Masculino/3-Outros',
  `dtnascimento` date NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-Inativo/1-Ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_login`
--

CREATE TABLE `historico_login` (
  `id` int(11) NOT NULL,
  `datahora` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1-Login/2-Logout'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_itens`
--

CREATE TABLE `pedidos_itens` (
  `id_pedido_item` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL,
  `quantidade` float NOT NULL,
  `preco` float NOT NULL,
  `percentual_desconto` float NOT NULL,
  `valor_desconto` float NOT NULL,
  `valor_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_pagamentos`
--

CREATE TABLE `pedidos_pagamentos` (
  `id_pedido_pagamento` int(11) DEFAULT NULL,
  `id_pedido` int(11) NOT NULL,
  `tipo_pagamento` varchar(20) NOT NULL COMMENT 'dinheiro/cartao/fiado/...',
  `valor_pagamento` float NOT NULL,
  `parcelas` int(11) NOT NULL,
  `dt_pagamento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco_custo` float NOT NULL,
  `preco_venda` float NOT NULL,
  `estoque` int(11) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `categoria` int(11) NOT NULL COMMENT 'categorias.id_categoria',
  `detalhes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_servico` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `tipo` tinyint(4) NOT NULL COMMENT '1-aluguel/2-juste/3-reparo',
  `detalhes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dtcadastro` date NOT NULL,
  `situacao` tinyint(1) NOT NULL,
  `funcao` tinyint(2) NOT NULL COMMENT '1-Usuario/2-Gerente/3-Admin',
  `foto` varchar(1000) NOT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `emailalternativo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `email`, `dtcadastro`, `situacao`, `funcao`, `foto`, `telefone`, `emailalternativo`) VALUES
(1, 'Leozin', '234', 'leozin@b.com', '2023-12-01', 1, 0, '', '2188884444', 'leozin2@b.com'),
(2, 'Alunin', '456', 'alunin@s.com', '2023-12-01', 1, 1, '', '2199996666', 'aluninalternativo@s.com'),
(3, 'Alunin', '456', 'alunin@s.com', '2023-12-01', 1, 1, '', '2199996666', 'aluninalternativo@s.com'),
(1000, 'Usuario5', '234', 'H@h.com', '2023-12-01', 1, 2, '', NULL, NULL),
(22222, 'Usuario1', '123', 'l@l.com', '2023-12-01', 1, 1, '', '2199998888', 'm@l.com.br'),
(22223, 'Usuario2', '321', 'j@j.com', '2023-12-01', 1, 2, '', NULL, NULL),
(22224, 'Usuario2', '321', 'j@j.com', '2023-12-01', 1, 2, '', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `historico_login`
--
ALTER TABLE `historico_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_historicologin` (`id_usuario`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_id_pedido_cliente` (`id_cliente`);

--
-- Índices para tabela `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  ADD PRIMARY KEY (`id_pedido_item`),
  ADD KEY `fk_id_pedido` (`id_pedido`),
  ADD KEY `fk_id_item_produto` (`id_produto`),
  ADD KEY `fk_id_item_servico` (`id_servico`);

--
-- Índices para tabela `pedidos_pagamentos`
--
ALTER TABLE `pedidos_pagamentos`
  ADD KEY `fk_id_pedido_pagto` (`id_pedido`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_id_prodcategoria` (`categoria`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_servico`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22225;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `historico_login`
--
ALTER TABLE `historico_login`
  ADD CONSTRAINT `fk_id_historicologin` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_id_pedido_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Limitadores para a tabela `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  ADD CONSTRAINT `fk_id_item_produto` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`),
  ADD CONSTRAINT `fk_id_item_servico` FOREIGN KEY (`id_servico`) REFERENCES `servicos` (`id_servico`),
  ADD CONSTRAINT `fk_id_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);

--
-- Limitadores para a tabela `pedidos_pagamentos`
--
ALTER TABLE `pedidos_pagamentos`
  ADD CONSTRAINT `fk_id_pedido_pagto` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_id_prodcategoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
