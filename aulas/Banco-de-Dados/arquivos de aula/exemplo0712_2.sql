-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2023 às 20:08
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
-- Banco de dados: `exemplo0712`
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

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nome`, `detalhes`) VALUES
(1, 'Roupas', 'Camisetas, calças, vestidos, etc.'),
(2, 'Eletrônicos', 'Smartphones, TVs, notebooks, etc.'),
(3, 'Livros', 'Romances, biografias, ficção, etc.'),
(4, 'Alimentos', 'Frutas, legumes, cereais, etc.'),
(5, 'Cosméticos', 'Cremes, shampoos, perfumes, etc.'),
(6, 'Roupas', 'Camisetas, calças, vestidos, etc.'),
(7, 'Eletrônicos', 'Smartphones, TVs, notebooks, etc.'),
(8, 'Livros', 'Romances, biografias, ficção, etc.'),
(9, 'Alimentos', 'Frutas, legumes, cereais, etc.'),
(10, 'Cosméticos', 'Cremes, shampoos, perfumes, etc.');

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

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `cep`, `logradouro`, `complemento`, `bairro`, `localidade`, `uf`, `numero`, `telefone`, `celular`, `email`, `senha`, `email_alternativo`, `tipo`, `cpf`, `cnpj`, `rg`, `genero`, `dtnascimento`, `status`) VALUES
(1, 'Maria da Silva', '12345-678', 'Rua da Paz', 'Apartamento 102', 'Centro', 'Cidade Nova', 'SP', 101, '(11) 98765-4322', '(11) 98765-4323', 'maria@exemplo.com', '123456', 'mariaalternativo@exemplo.com', 1, '123.456.789-01', '', '12.345.678-9', 1, '1990-02-02', 1),
(2, 'José de Souza', '12345-679', 'Rua da Felicidade', 'Apartamento 201', 'Centro', 'Cidade Nova', 'SP', 200, '(11) 98765-4324', '(11) 98765-4325', 'jose@exemplo.com', '123456', 'josealternativo@exemplo.com', 1, '123.456.789-02', '', '12.345.678-1', 1, '1991-03-03', 1),
(3, 'Ana Maria', '12345-680', 'Rua da Alegria', 'Apartamento 301', 'Centro', 'Cidade Nova', 'SP', 300, '(11) 98765-4326', '(11) 98765-4327', 'ana@exemplo.com', '123456', 'anaalternativo@exemplo.com', 1, '123.456.789-03', '', '12.345.678-1', 1, '1992-04-04', 1),
(4, 'João Pedro', '12345-681', 'Rua da Esperança', 'Apartamento 401', 'Centro', 'Cidade Nova', 'SP', 400, '(11) 98765-4328', '(11) 98765-4329', 'joao@exemplo.com', '123456', 'joaoalternativo@exemplo.com', 1, '123.456.789-04', '', '12.345.678-1', 1, '1993-05-05', 1),
(5, 'Mariana Santos', '12345-682', 'Rua da Vida', 'Apartamento 501', 'Centro', 'Cidade Nova', 'SP', 500, '(11) 98765-4330', '(11) 98765-4331', 'mariana@exemplo.com', '123456', 'marianaalternativo@exemplo.com', 1, '123.456.789-05', '', '12.345.678-1', 1, '1992-04-04', 1);

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

--
-- Extraindo dados da tabela `historico_login`
--

INSERT INTO `historico_login` (`id`, `datahora`, `id_usuario`, `status`) VALUES
(10, '2023-12-07 15:58:02', 1, 1),
(11, '2023-12-07 15:58:02', 2, 1),
(12, '2023-12-07 15:58:02', 3, 1),
(13, '2023-12-07 15:58:02', 4, 1),
(14, '2023-12-07 15:58:02', 5, 1);

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

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `dt_criacao`, `dt_entrega`, `cod_rastreamento`, `valor_desconto`, `percentual_desconto`, `valor_frete`, `total_produtos`, `total_pedido`) VALUES
(2, 2, '2023-12-07 15:59:08', '2023-12-12 15:59:08', '1234567890', 5, 10, 10, 50, 65),
(3, 3, '2023-12-07 15:59:08', '2023-12-12 15:59:08', '1234567891', 10, 10, 10, 20, 30),
(4, 4, '2023-12-07 15:59:08', '2023-12-12 15:59:08', '1234567892', 15, 10, 10, 30, 45),
(5, 5, '2023-12-07 15:59:08', '2023-12-12 15:59:08', '1234567893', 20, 10, 10, 40, 60),
(6, 1, '2023-12-07 15:59:08', '2023-12-12 15:59:08', '1234567894', 25, 10, 10, 50, 75);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_itens`
--

CREATE TABLE `pedidos_itens` (
  `id_pedido_item` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `id_servico` int(11) DEFAULT NULL,
  `quantidade` float NOT NULL,
  `preco` float NOT NULL,
  `percentual_desconto` float NOT NULL,
  `valor_desconto` float NOT NULL,
  `valor_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos_itens`
--

INSERT INTO `pedidos_itens` (`id_pedido_item`, `id_pedido`, `id_produto`, `id_servico`, `quantidade`, `preco`, `percentual_desconto`, `valor_desconto`, `valor_total`) VALUES
(26, 2, 2, NULL, 1, 500, 10, 50, 450),
(27, 3, NULL, 1, 3, 20, 10, 2, 58),
(28, 4, 4, NULL, 2, 15, 10, 1.5, 31.5),
(29, 5, NULL, 3, 1, 25, 10, 2.5, 52.5),
(30, 6, 6, NULL, 3, 30, 10, 3, 87);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_pagamentos`
--

CREATE TABLE `pedidos_pagamentos` (
  `id_pedido_pagamento` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `tipo_pagamento` varchar(20) NOT NULL COMMENT 'dinheiro/cartao/fiado/...',
  `valor_pagamento` float NOT NULL,
  `parcelas` int(11) NOT NULL,
  `dt_pagamento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos_pagamentos`
--

INSERT INTO `pedidos_pagamentos` (`id_pedido_pagamento`, `id_pedido`, `tipo_pagamento`, `valor_pagamento`, `parcelas`, `dt_pagamento`) VALUES
(1, 2, 'cartão', 65, 1, '2023-12-07 16:00:49'),
(2, 3, 'boleto', 30, 1, '2023-12-07 16:00:49'),
(3, 4, 'débito em conta', 45, 1, '2023-12-07 16:00:49'),
(4, 5, 'pix', 60, 1, '2023-12-07 16:00:49'),
(5, 6, 'transferência bancár', 75, 1, '2023-12-07 16:00:49');

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

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `descricao`, `preco_custo`, `preco_venda`, `estoque`, `imagem`, `categoria`, `detalhes`) VALUES
(1, 'Camiseta estampada', 10, 20, 50, 'imagem_camiseta.png', 1, 'Camiseta 100% algodão com estampa exclusiva.'),
(2, 'Smartphone 128GB', 500, 750, 10, 'imagem_smartphone.png', 2, 'Smartphone com câmera tripla e processador octa-core.'),
(3, 'Livro de ficção', 20, 30, 20, 'imagem_livro.png', 3, 'Livro de ficção best-seller com mais de 1 milhão de cópias vendidas.'),
(4, 'Maçãs vermelhas', 5, 8, 100, 'imagem_maca.png', 4, 'Maçãs vermelhas frescas e crocantes.'),
(5, 'Shampoo hidratante', 15, 25, 30, 'imagem_shampoo.png', 5, 'Shampoo hidratante para cabelos secos e danificados.'),
(6, 'Camiseta branca', 15, 30, 50, 'imagem_camiseta_branca.png', 1, 'Camiseta 100% algodão com estampa branca.'),
(7, 'Smartphone 64GB', 400, 600, 20, 'imagem_smartphone_64GB.png', 2, 'Smartphone com câmera dupla e processador quad-core.'),
(8, 'Livro de não ficção', 30, 45, 30, 'imagem_livro_nao_ficcao.png', 3, 'Livro de não ficção sobre história mundial.'),
(9, 'Banana prata', 4, 6, 150, 'imagem_banana_prata.png', 4, 'Banana prata fresca e doce.'),
(10, 'Condicionador hidratante', 20, 35, 20, 'imagem_condicionador_hidratante.png', 5, 'Condicionador hidratante para cabelos secos e danificados.'),
(11, 'Camiseta estampada', 10, 20, 50, 'imagem_camiseta.png', 1, 'Camiseta 100% algodão com estampa exclusiva.'),
(12, 'Smartphone 128GB', 500, 750, 10, 'imagem_smartphone.png', 2, 'Smartphone com câmera tripla e processador octa-core.'),
(13, 'Livro de ficção', 20, 30, 20, 'imagem_livro.png', 3, 'Livro de ficção best-seller com mais de 1 milhão de cópias vendidas.'),
(14, 'Maçãs vermelhas', 5, 8, 100, 'imagem_maca.png', 4, 'Maçãs vermelhas frescas e crocantes.'),
(15, 'Shampoo hidratante', 15, 25, 30, 'imagem_shampoo.png', 5, 'Shampoo hidratante para cabelos secos e danificados.'),
(16, 'Camiseta branca', 15, 30, 50, 'imagem_camiseta_branca.png', 1, 'Camiseta 100% algodão com estampa branca.'),
(17, 'Smartphone 64GB', 400, 600, 20, 'imagem_smartphone_64GB.png', 2, 'Smartphone com câmera dupla e processador quad-core.'),
(18, 'Livro de não ficção', 30, 45, 30, 'imagem_livro_nao_ficcao.png', 3, 'Livro de não ficção sobre história mundial.'),
(19, 'Banana prata', 4, 6, 150, 'imagem_banana_prata.png', 4, 'Banana prata fresca e doce.'),
(20, 'Condicionador hidratante', 20, 35, 20, 'imagem_condicionador_hidratante.png', 5, 'Condicionador hidratante para cabelos secos e danificados.');

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

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id_servico`, `nome`, `preco`, `tipo`, `detalhes`) VALUES
(1, 'Conserto de smartphone', 50, 2, 'Conserto de tela, bateria, câmera, etc.'),
(2, 'Ajuste de roupa', 20, 3, 'Ajuste de bainha, cintura, zíper, etc.'),
(3, 'Manutenção de computador', 80, 2, 'Limpeza de vírus, instalação de software, etc.'),
(4, 'Manicure e pedicure', 50, 3, 'Corte, esmaltação, etc.'),
(5, 'Massagem relaxante', 100, 2, 'Massagem com duração de 60 minutos.'),
(6, 'Conserto de smartphone', 50, 2, 'Conserto de tela, bateria, câmera, etc.'),
(7, 'Ajuste de roupa', 20, 3, 'Ajuste de bainha, cintura, zíper, etc.'),
(8, 'Manutenção de computador', 80, 2, 'Limpeza de vírus, instalação de software, etc.'),
(9, 'Manicure e pedicure', 50, 3, 'Corte, esmaltação, etc.'),
(10, 'Massagem relaxante', 100, 2, 'Massagem com duração de 60 minutos.');

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
(1, 'Maria Silva', 'maria123', 'maria@exemplo.com', '2023-12-07', 1, 2, '', '(11) 98765-4322', 'mariaalternativo@exemplo.com'),
(2, 'José Souza', 'jose123', 'jose@exemplo.com', '2023-12-07', 1, 2, '', '(11) 98765-4324', 'josealternativo@exemplo.com'),
(3, 'Ana Maria', 'ana123', 'ana@exemplo.com', '2023-12-07', 1, 2, '', '(11) 98765-4326', 'anaalternativo@exemplo.com'),
(4, 'João Pedro', 'joao123', 'joao@exemplo.com', '2023-12-07', 1, 2, '', '(11) 98765-4328', 'joaoalternativo@exemplo.com'),
(5, 'Mariana Santos', 'mariana123', 'mariana@exemplo.com', '2023-12-07', 1, 2, '', '(11) 98765-4330', 'marianaalternativo@exemplo.com');

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
  ADD PRIMARY KEY (`id_pedido_pagamento`),
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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `historico_login`
--
ALTER TABLE `historico_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `pedidos_itens`
--
ALTER TABLE `pedidos_itens`
  MODIFY `id_pedido_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `pedidos_pagamentos`
--
ALTER TABLE `pedidos_pagamentos`
  MODIFY `id_pedido_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22230;

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
