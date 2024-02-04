-- Categorias
INSERT INTO categorias (nome, detalhes) VALUES
('Roupas', 'Camisetas, calças, vestidos, etc.'),
('Eletrônicos', 'Smartphones, TVs, notebooks, etc.'),
('Livros', 'Romances, biografias, ficção, etc.'),
('Alimentos', 'Frutas, legumes, cereais, etc.'),
('Cosméticos', 'Cremes, shampoos, perfumes, etc.');

-- Produtos
INSERT INTO produtos (descricao, preco_custo, preco_venda, estoque, imagem, categoria, detalhes) VALUES
('Camiseta estampada', 10.00, 20.00, 50, 'imagem_camiseta.png', 1, 'Camiseta 100% algodão com estampa exclusiva.'),
('Smartphone 128GB', 500.00, 750.00, 10, 'imagem_smartphone.png', 2, 'Smartphone com câmera tripla e processador octa-core.'),
('Livro de ficção', 20.00, 30.00, 20, 'imagem_livro.png', 3, 'Livro de ficção best-seller com mais de 1 milhão de cópias vendidas.'),
('Maçãs vermelhas', 5.00, 8.00, 100, 'imagem_maca.png', 4, 'Maçãs vermelhas frescas e crocantes.'),
('Shampoo hidratante', 15.00, 25.00, 30, 'imagem_shampoo.png', 5, 'Shampoo hidratante para cabelos secos e danificados.'),
('Camiseta branca', 15.00, 30.00, 50, 'imagem_camiseta_branca.png', 1, 'Camiseta 100% algodão com estampa branca.'),
('Smartphone 64GB', 400.00, 600.00, 20, 'imagem_smartphone_64GB.png', 2, 'Smartphone com câmera dupla e processador quad-core.'),
('Livro de não ficção', 30.00, 45.00, 30, 'imagem_livro_nao_ficcao.png', 3, 'Livro de não ficção sobre história mundial.'),
('Banana prata', 4.00, 6.00, 150, 'imagem_banana_prata.png', 4, 'Banana prata fresca e doce.'),
('Condicionador hidratante', 20.00, 35.00, 20, 'imagem_condicionador_hidratante.png', 5, 'Condicionador hidratante para cabelos secos e danificados.');

-- Serviços
INSERT INTO servicos (nome, preco, tipo, detalhes) VALUES
('Conserto de smartphone', 50.00, 2, 'Conserto de tela, bateria, câmera, etc.'),
('Ajuste de roupa', 20.00, 3, 'Ajuste de bainha, cintura, zíper, etc.'),
('Manutenção de computador', 80.00, 2, 'Limpeza de vírus, instalação de software, etc.'),
('Manicure e pedicure', 50.00, 3, 'Corte, esmaltação, etc.'),
('Massagem relaxante', 100.00, 2, 'Massagem com duração de 60 minutos.');


-- Clientes
INSERT INTO clientes (nome, cep, logradouro, complemento, bairro, localidade, uf, numero, telefone, celular, email, senha, email_alternativo, tipo, cpf, cnpj, rg, genero, dtnascimento, status) VALUES
('Maria da Silva', '12345-678', 'Rua da Paz', 'Apartamento 102', 'Centro', 'Cidade Nova', 'SP', 101, '(11) 98765-4322', '(11) 98765-4323', 'maria@exemplo.com', '123456', 'mariaalternativo@exemplo.com', 1, '123.456.789-01', NULL, '12.345.678-9', 1, '1990-02-02', 1),
('José de Souza', '12345-679', 'Rua da Felicidade', 'Apartamento 201', 'Centro', 'Cidade Nova', 'SP', 200, '(11) 98765-4324', '(11) 98765-4325', 'jose@exemplo.com', '123456', 'josealternativo@exemplo.com', 1, '123.456.789-02', NULL, '12.345.678-10', 1, '1991-03-03', 1),
('Ana Maria', '12345-680', 'Rua da Alegria', 'Apartamento 301', 'Centro', 'Cidade Nova', 'SP', 300, '(11) 98765-4326', '(11) 98765-4327', 'ana@exemplo.com', '123456', 'anaalternativo@exemplo.com', 1, '123.456.789-03', NULL, '12.345.678-11', 1, '1992-04-04', 1),
('João Pedro', '12345-681', 'Rua da Esperança', 'Apartamento 401', 'Centro', 'Cidade Nova', 'SP', 400, '(11) 98765-4328', '(11) 98765-4329', 'joao@exemplo.com', '123456', 'joaoalternativo@exemplo.com', 1, '123.456.789-04', NULL, '12.345.678-12', 1, '1993-05-05', 1),
('Mariana Santos', '12345-682', 'Rua da Vida', 'Apartamento 501', 'Centro', 'Cidade Nova', 'SP', 500, '(11) 98765-4330', '(11) 98765-4331', 'mariana@exemplo.com', '123456', 'marianaalternativo@exemplo.com', 1, '123.456.789-05', NULL, '12.345.678-13'

-- Mais usuários
INSERT INTO usuarios (nome, senha, email, dtcadastro, situacao, funcao, foto, telefone, emailalternativo) VALUES
('Maria Silva', 'maria123', 'maria@exemplo.com', CURRENT_TIMESTAMP(), 1, 2, NULL, '(11) 98765-4322', 'mariaalternativo@exemplo.com'),
('José Souza', 'jose123', 'jose@exemplo.com', CURRENT_TIMESTAMP(), 1, 2, NULL, '(11) 98765-4324', 'josealternativo@exemplo.com'),
('Ana Maria', 'ana123', 'ana@exemplo.com', CURRENT_TIMESTAMP(), 1, 2, NULL, '(11) 98765-4326', 'anaalternativo@exemplo.com'),
('João Pedro', 'joao123', 'joao@exemplo.com', CURRENT_TIMESTAMP(), 1, 2, NULL, '(11) 98765-4328', 'joaoalternativo@exemplo.com'),
('Mariana Santos', 'mariana123', 'mariana@exemplo.com', CURRENT_TIMESTAMP(), 1, 2, NULL, '(11) 98765-4330', 'marianaalternativo@exemplo.com');

-- Mais históricos de login
INSERT INTO historico_login (datahora, id_usuario, status) VALUES
(CURRENT_TIMESTAMP(), 1, 1),
(CURRENT_TIMESTAMP(), 2, 1),
(CURRENT_TIMESTAMP(), 3, 1),
(CURRENT_TIMESTAMP(), 4, 1),
(CURRENT_TIMESTAMP(), 5, 1);

-- Mais pedidos
INSERT INTO pedidos (id_cliente, dt_criacao, dt_entrega, cod_rastreamento, valor_desconto, percentual_desconto, valor_frete, total_produtos, total_pedido) VALUES
(2, CURRENT_TIMESTAMP(), DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 5 DAY), '1234567890', 5.00, 10, 10.00, 50.00, 65.00),
(3, CURRENT_TIMESTAMP(), DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 5 DAY), '1234567891', 10.00, 10, 10.00, 20.00, 30.00),
(4, CURRENT_TIMESTAMP(), DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 5 DAY), '1234567892', 15.00, 10, 10.00, 30.00, 45.00),
(5, CURRENT_TIMESTAMP(), DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 5 DAY), '1234567893', 20.00, 10, 10.00, 40.00, 60.00),
(6, CURRENT_TIMESTAMP(), DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 5 DAY), '1234567894', 25.00, 10, 10.00, 50.00, 75.00);

-- Mais itens de pedidos
INSERT INTO pedidos_itens (id_pedido, id_produto, id_servico, quantidade, preco, percentual_desconto, valor_desconto, valor_total) VALUES
(2, 2, NULL, 1, 500.00, 10, 50.00, 450.00),
(3, NULL, 3, 3, 20.00, 10, 2.00, 58.00),
(4, 4, NULL, 2, 15.00, 10, 1.50, 31.50),
(5, NULL, 3, 1, 25.00, 10, 2.50, 52.50),
(6, 6, NULL, 3, 30.00, 10, 3.00, 87.00);

-- Mais pagamentos de pedidos
INSERT INTO pedidos_pagamentos (id_pedido, tipo_pagamento, valor_pagamento, parcelas, dt_pagamento) VALUES
(2, 'cartão', 65.00, 1, CURRENT_TIMESTAMP()),
(3, 'boleto', 30.00, 1, CURRENT_TIMESTAMP()),
(4, 'débito em conta', 45.00, 1, CURRENT_TIMESTAMP()),
(5, 'pix', 60.00, 1, CURRENT_TIMESTAMP()),
(6, 'transferência bancária', 75.00, 1, CURRENT_TIMESTAMP());



