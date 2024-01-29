CREATE DATABASE IF NOT EXISTS `delux_uniformes`;

USE `delux_uniformes`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `tipo_cadastro` enum('Usuario', 'Administrador') NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` char(2) NOT NULL,
  `cep` varchar(12) NOT NULL,
  `telefone` varchar(20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `tipo_cadastro`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `telefone`) VALUES
('Marcos', 'marcosantony.asp@gmail.com', '181143/marcola', 'Administrador', 'Rua do Adm', '123', 'Centro', 'Rio de Janeiro', 'RJ', '2147483647', '123456789'),
('Victor', 'v@k.co', '1234', 'Usuario', 'Rua XYZ', '456', 'Bairro XYZ', 'São Paulo', 'SP', '32421434', '987654321');

CREATE TABLE `produtos` (
  `id_produto` int(11) PRIMARY KEY AUTO_INCREMENT,
  `descricao` varchar(500) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `quantidade_estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS pedidos (
    id_pedido INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    data_pedido DATE NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);

CREATE TABLE IF NOT EXISTS itens_pedido (
    id_item INT PRIMARY KEY AUTO_INCREMENT,
    id_pedido INT,
    id_produto INT,
    quantidade INT NOT NULL,
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido),
    FOREIGN KEY (id_produto) REFERENCES produtos(id_produto)
);


-- ÁREA DE INSERÇÕES NO BANCO (SÃO MUITOS PRODUTOS POR PADRÃO RS) --
-- TIPO HOSPITALAR-MASCULINO
INSERT INTO produtos (descricao, imagem, tipo, quantidade_estoque) VALUES
('Conjunto de Pijama Cirúrgico azul claro incluso máscara , manga curta - Oxford 100% Poliéster', 'masculino-hospitalar-1.png', 'hospitalar-masculino', 10),
('Conjunto de Pijama Cirúrgico azul claro, manga curta - Oxford 100% poliéster', 'masculino-hospitalar-2.png', 'hospitalar-masculino', 50),
('Jaleco branco 3 bolsos frontais, sendo 1 no peito e 2 na cintura, manga longa - 100% Poliéster', 'masculino-hospitalar-3.png', 'hospitalar-masculino', 30),
('Jaleco branco com 2 bolsos inferiores, um bolso superior, manga longa sem punho e gola esporte - 100% Poliéster', 'masculino-hospitalar-4.png', 'hospitalar-masculino', 40),
('Conjunto de Pijama Cirúrgico azul escuro, manga curta - 100% Poliéster', 'masculino-hospitalar-5.png', 'hospitalar-masculino', 60),
('Jaleco com 2 bolsos inferiores manga longa branco -  100% Poliéster', 'masculino-hospitalar-6.png', 'hospitalar-masculino', 45),
('Jaleco com dois bolsos inferiores, um bolso superior, manga longa sem punho branco- 100% Poliéster', 'masculino-hospitalar-7.png', 'hospitalar-masculino', 55),
('Jaleco Masculino Tradicional Gola Partida Punho Bolsos Fontais manga longa branco - 100% Poliéster', 'masculino-hospitalar-8.png', 'hospitalar-masculino', 35),
('Pijama Cirúrgico Conjunto Camisa Hospitalar, manga curta verde água - 100% Poliéster', 'masculino-hospitalar-9.png', 'hospitalar-masculino', 25),
('Jaleco Oxford com 2 bolsos na cintura manga longa, com gola social branco - 100% Poliéster', 'masculino-hospitalar-10.png', 'hospitalar-masculino', 20),
('Camisa cinza manga curta com 3 bolsos, um bolso superior e dois na cintura -100% Poliéster', 'masculino-hospitalar-11.png', 'hospitalar-masculino', 40),
('Calça azul com 2 bolsos - 100% Poliéster', 'masculino-hospitalar-12.png', 'hospitalar-masculino', 30);


-- TIPO HOSPITALAR-FEMININO
INSERT INTO produtos (descricao, imagem, tipo, quantidade_estoque) VALUES
('Pijama Cirúrgico Conjunto Camisa Hospitalar , manga curta gola V marsala- 100% Poliéster', 'feminino-hospitalar-1.png', 'hospitalar-feminino', 30),
('Jaleco manga longa 3 bolsos 1 superior e 2 na cintura , gola V branco - 100% Poliéster', 'feminino-hospitalar-2.png', 'hospitalar-feminino', 25),
('Pijama Cirúrgico Conjunto Camisa Hospitalar , manga curta verde - 100% Poliéster', 'feminino-hospitalar-3.png', 'hospitalar-feminino', 35),
('Camisa com um bolso superior , rosa - 100% Poliéster', 'feminino-hospitalar-4.png', 'hospitalar-feminino', 20),
('Blusa branca personalizada gola em V, dois bolsos - 100% Poliéster', 'feminino-hospitalar-5.png', 'hospitalar-feminino', 40),
('Pijama Cirúrgico Conjunto Camisa Hospitalar , manga curta gola V rosa - 100% Poliéster', 'feminino-hospitalar-6.png', 'hospitalar-feminino', 30),
('Pijama Cirúrgico Conjunto Camisa Hospitalar , manga curta verde - 100% Poliéster', 'feminino-hospitalar-7.png', 'hospitalar-feminino', 25),
('Jaleco manga longa 3 bolsos 1 superior e 2 na cintura , detalhe azul na gola - 100% Poliéster', 'feminino-hospitalar-8.png', 'hospitalar-feminino', 35),
('Camisa com 2 bolsos na cintura azul claro -  100% Poliéster', 'feminino-hospitalar-9.png', 'hospitalar-feminino', 40),
('Camisa com um bolso superior , e 2 bolsos na cintura azul escuro - 100% Poliéster', 'feminino-hospitalar-10.png', 'hospitalar-feminino', 30),
('Blusa - Pijama Cirúrgico Estampado - 100% Poliéster', 'feminino-hospitalar-11.png', 'hospitalar-feminino', 20),
('Camisa pijama cirúrgico verde - 100% Poliéster', 'feminino-hospitalar-12.png', 'hospitalar-feminino', 25);

-- TIPO LIMPEZA-MASCULINO
INSERT INTO produtos (descricao, imagem, tipo, quantidade_estoque) VALUES
('Camisa azul com bolso superior gola V - 100% Algodão', 'masculino-limpeza-1.png', 'limpeza-masculino', 30),
('Kit Macação Azul 3 bolsos 1 superior e 2 dois na cintura = camisa branca - 100% Algodão', 'masculino-limpeza-2.png', 'limpeza-masculino', 25),
('Macação Azul 3 bolsos 1 superior e 2 dois na cintura com alças reforçadas - 100% Algodão', 'masculino-limpeza-3.png', 'limpeza-masculino', 35),
('Calça Brim Pesado Reforçada para trabalho pesado 2 bolsos na cintura cinza - 100% Algodão', 'masculino-limpeza-4.png', 'limpeza-masculino', 20),
('Uniforme Cinza Profissional Calça + Camisa Brim com Manga Curta cinza - 100% Algodão', 'masculino-limpeza-5.png', 'limpeza-masculino', 40),
('Calça Oxford 2 bolsos na cintura cinza - 100% Algodão', 'masculino-limpeza-6.png', 'limpeza-masculino', 30),
('Camisa Brim com Manga Curta bolso superior azul escuro - 100% Algodão', 'masculino-limpeza-7.png', 'limpeza-masculino', 25),
('Macacão Reforçado de Brim Pesado com Faixa Refletivo com Manga Longa - 4 bolsos dois superiores e 2 na cintura cinza - 100% Algodão', 'masculino-limpeza-8.png', 'limpeza-masculino', 35),
('Jaleco brim profissional 3/4 com Manga Curta - 3 bolsos 1 superior e 2 na cintura cinza - 100% Algodão', 'masculino-limpeza-9.png', 'limpeza-masculino', 40),
('Camisa cinza manga longa para Pedreiro em malha fria - 65% poliéster 35% viscose', 'masculino-limpeza-10.png', 'limpeza-masculino', 30),
('Calça preta Oxford Para Trabalho Leve Uniforme Pedreiro Mecânico Obra', 'masculino-limpeza-11.png', 'limpeza-masculino', 20),
('Calça preta Reforçada Brim pesado com faixa reflexiva Para Trabalho Leve Uniforme Pedreiro Mecânico Obra', 'masculino-limpeza-12.png', 'limpeza-masculino', 25);

-- TIPO LIMPEZA-FEMININO
INSERT INTO produtos (descricao, imagem, tipo, quantidade_estoque) VALUES
('Uniforme de Camareira Vestido de Copeira + Avental de Camareira - Oxford 100% Poliéster', 'feminino-limpeza-1.png', 'limpeza-feminino', 30),
('Kit Vestido copeira com avental preto e branco - Oxford 100% Poliéster', 'feminino-limpeza-2.png', 'limpeza-feminino', 25),
('Conjunto - Camisa verde + calça cinza - Oxford 100% Poliéster', 'feminino-limpeza-3.png', 'limpeza-feminino', 35),
('Colete Social azul marinho - Oxford 100% Poliéster', 'feminino-limpeza-4.png', 'limpeza-feminino', 20),
('Vestido copeira cinza - Oxford 100% Poliéster', 'feminino-limpeza-5.png', 'limpeza-feminino', 40),
('Avental para faxineira vermelho - 100% Algodão', 'feminino-limpeza-6.png', 'limpeza-feminino', 30),
('Avental branco com bolso - 100% Poliéster', 'feminino-limpeza-7.png', 'limpeza-feminino', 25),
('Kit Avental azul com três bolsos com camisa - 100% Poliéster', 'feminino-limpeza-8.png', 'limpeza-feminino', 35),
('Avental branco com um bolso - 100% Poliéster', 'feminino-limpeza-9.png', 'limpeza-feminino', 40),
('Macacão azul para faxineira - 100% Brim', 'feminino-limpeza-10.png', 'limpeza-feminino', 30),
('Camisa amarela manga curta com três botões - 100% Poliéster', 'feminino-limpeza-11.png', 'limpeza-feminino', 20),
('Avental verde com bolso - 100% Poliéster', 'feminino-limpeza-12.png', 'limpeza-feminino', 25);


-- TIPO GOURMET MASCULINO 
INSERT INTO produtos (descricao, imagem, tipo, quantidade_estoque) VALUES
('Avental Premium preto sem bolsos - 100% Oxford', 'masculino-gourmet-1.png', 'gourmet-masculino', 30),
('Dolmã chefe de cozinha branco manga 3/4 - 100% Poliéster', 'masculino-gourmet-2.png', 'gourmet-masculino', 25),
('Conjunto Colete Social Forrado para Garçons + camisa branca com gravata borboleta preta - 100% Poliéster', 'masculino-gourmet-3.png', 'gourmet-masculino', 35),
('Avental preto sem bolso + camisa branca com gravata borboleta preta - 100% Poliéster', 'masculino-gourmet-4.png', 'gourmet-masculino', 20),
('Avental preto sem bolso - 100% Poliéster', 'masculino-gourmet-5.png', 'gourmet-masculino', 40),
('Kimono Sushiman Hapi Uniforme Cozinha Oriental um bolsos na frente vermelho - 100% Oxford', 'masculino-gourmet-6.png', 'gourmet-masculino', 30),
('Avental de cintura preto com bolso na cintura - 100% Oxford', 'masculino-gourmet-7.png', 'gourmet-masculino', 25),
('Avental preto sem bolso + camisa branca - 100% Poliéster', 'masculino-gourmet-8.png', 'gourmet-masculino', 35),
('Bandana Preta Chef Cozinha Uniforme Restaurante - 100% Poliéster', 'masculino-gourmet-9.png', 'gourmet-masculino', 40),
('Camiseta manga longa cozinheiro uniforme de inverno - 100 % Poliéster', 'masculino-gourmet-10.png', 'gourmet-masculino', 30),
('Uniforme calça preta social + camisa branca com colete preto + gravata preta - 100 % Poliéster', 'masculino-gourmet-11.png', 'gourmet-masculino', 20),
('Uniforme colete dourado + camisa branca com gravata + avental para cintura preto - 100 % Poliéster', 'masculino-gourmet-12.png', 'gourmet-masculino', 25);

-- TIPO GOURMET FEMININO 
INSERT INTO produtos (descricao, imagem, tipo, quantidade_estoque) VALUES
('Avental sem bolso para cozinha preto - 100 % Poliéster', 'feminino-gourmet-1.png', 'gourmet-feminino', 30),
('Uniforme chef de cozinha feminino blusa branca com botões e saia azul - 100 % Poliéster', 'feminino-gourmet-2.png', 'gourmet-feminino', 25),
('Avental sem bolso para cozinha azul turqueza - 100 % Poliéster', 'feminino-gourmet-3.png', 'gourmet-feminino', 35),
('Uniforme garçonete -conjunto colete preto, camiseta manga longa branca e calça preta - 100 % Poliéster', 'feminino-gourmet-4.png', 'gourmet-feminino', 20),
('Touca para Cozinha preta - 100 % Poliéster', 'feminino-gourmet-5.png', 'gourmet-feminino', 40),
('Avental branco com botões e bolso único - 100 % Poliéster', 'feminino-gourmet-6.png', 'gourmet-feminino', 30),
('Uniforme garçonete com gravata - conjunto blusa e saia - 100 % Poliéster', 'feminino-gourmet-7.png', 'gourmet-feminino', 25),
('Uniforme garçonete - conjunto blusa branca com 1 bolso superior e avental para cintura preto - 100 % Poliéster', 'feminino-gourmet-8.png', 'gourmet-feminino', 35),
('Uniforme chef de cozinha - conjunto blusa branca com botões e saia preta - 100 % Poliéster', 'feminino-gourmet-9.png', 'gourmet-feminino', 40),
('Avental Branco com bolso em cima e na parte de baixo - 100 % Poliéster', 'feminino-gourmet-10.png', 'gourmet-feminino', 30),
('Avental Branco com bolso e laço - 100 % Poliéster', 'feminino-gourmet-11.png', 'gourmet-feminino', 20);

-- TIPO BELEZA FEMININO

INSERT INTO produtos (descricao, imagem, tipo, quantidade_estoque) VALUES
('Kinomo Preto para salão de beleza - 100% Poliéster', 'feminino-beleza-1.png', 'beleza-feminino', 30),
('Máscara Rosa e Avental rosa / com detalhes azuis na manga com dois bolsos na cintura - 100% Poliéster', 'feminino-beleza-2.png', 'beleza-feminino', 25),
('Kinomo Marrom com botões para salão de beleza com um bolso na cintura - 100% Poliéster', 'feminino-beleza-3.png', 'beleza-feminino', 35),
('Avental azul para salão de beleza um bolso na cintura -  100% Poliéster', 'feminino-beleza-4.png', 'beleza-feminino', 20),
('Avental preto para salão de beleza um bolso na cintura - 100% Poliéster', 'feminino-beleza-5.png', 'beleza-feminino', 40),
('Blusa Scrub Feminino de Oxfordine Veterinária com dois bolsos na cintura - 100% Poliéster', 'feminino-beleza-6.png', 'beleza-feminino', 30),
('Avental Personalizado Roxo incluso logo na marca com um bolso na cintura + com blusa - 100% Poliéster', 'feminino-beleza-7.png', 'beleza-feminino', 25),
('Conjunto preto - blusa dois bolsos na cintura e calça para assistente de salão de beleza - 100% Poliéster', 'feminino-beleza-8.png', 'beleza-feminino', 35),
('Avental Branco sem manga - 100% Poliéster', 'feminino-beleza-9.png', 'beleza-feminino', 40),
('Avental Branco com dois bolsos na cintura para esteticistas - 100% Poliéster', 'feminino-beleza-10.png', 'beleza-feminino', 30),
('Avental Preto para cabeleireiro um bolso - 100% Poliéster', 'feminino-beleza-11.png', 'beleza-feminino', 20),
('Avental Personalizado Verde e Preto para salão de beleza - 100% Poliéster', 'feminino-beleza-12.png', 'beleza-feminino', 15);

INSERT INTO produtos (descricao, imagem, tipo, quantidade_estoque) VALUES
('Patch Bordado Termocolante - Técnico em Enfermagem/ Jaleco / Uniformes - 8 cm', 'feminino-bordado-1.jpg', 'Bordados', 50),
('Patch Bordado Termocolante - Biomedicina Jaleco, Uniformes - 8 cm', 'feminino-bordado-2.jpg', 'Bordados', 40),
('Patch Bordado Termocolante - Fonoaudiologia  - 8 cm', 'feminino-bordado-3.jpg', 'Bordados', 30),
('Patch Bordado Termocolante - Segurança do Trabalho - 8 cm', 'feminino-bordado-4.jpg', 'Bordados', 35),
('Patch Bordado Termocolante - Nutrição - 8 cm', 'feminino-bordado-5.jpg', 'Bordados', 45),
('Patch Bordado Termocolante - Psicologia - 8 cm', 'feminino-bordado-6.jpg', 'Bordados', 25),
('Patch Bordado Termocolante - Fisioterapia - 8 cm', 'feminino-bordado-7.jpg', 'Bordados', 30),
('Patch Bordado Termocolante - Radiologia - 8 cm', 'feminino-bordado-8.jpg', 'Bordados', 40),
('Patch Bordado Termocolante - Podologia - 8 cm', 'feminino-bordado-9.jpg', 'Bordados', 20),
('Patch Bordado Termocolante - Socorrista - 8 cm', 'feminino-bordado-10.jpg', 'Bordados', 30),
('Patch Bordado Termocolante - Farmácia - 8 cm', 'feminino-bordado-11.jpg', 'Bordados', 25),
('Patch Bordado Termocolante - Assistente Social - 8 cm', 'feminino-bordado-12.jpg', 'Bordados', 35);


-- ALTER TABLE `produtos` ADD COLUMN `preco` DECIMAL(10, 2) NOT NULL DEFAULT 0;
-- UPDATE produtos
-- SET preco = ROUND(RAND() * (100.00 - 20.00) + 20.00, 2);
-- nao tem preco entao deixa!