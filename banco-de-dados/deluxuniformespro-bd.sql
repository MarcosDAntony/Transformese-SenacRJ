CREATE DATABASE IF NOT EXISTS deluxuniformespro-bd DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE deluxuniformespro-bd;

-- Tabela cadastros
CREATE TABLE cadastros (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  email varchar(254) NOT NULL,
  senha varchar(16) NOT NULL,
  tipo_cadastro enum('Usuario', 'Administrador') NOT NULL COMMENT '1 - Usuario / 2 - Administrador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserir dados na tabela cadastros
INSERT INTO cadastros (nome, email, senha, tipo_cadastro) VALUES
('Marcos', 'marcosantony.asp@gmail.com', '181143/marcola', 'Administrador'),
('Victor', 'v@k.co', '1234', 'Usuario');

-- Tabela usuarios
CREATE TABLE usuarios (
  id_usuario int(11) PRIMARY KEY,
  endereco varchar(200) NOT NULL,
  rua varchar(100) NOT NULL,
  numero varchar(10) NOT NULL,
  bairro varchar(50) NOT NULL,
  cidade varchar(50) NOT NULL,
  uf char(2) NOT NULL,
  cep int(8) NOT NULL,
  FOREIGN KEY (id_usuario) REFERENCES cadastros (id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios (id_usuario, endereco, rua, numero, bairro, cidade, uf, cep) VALUES
(1, 'Nova Iguaçu', 'Rua do Adm', '123', 'Centro', 'Rio de Janeiro', 'RJ', 2147483647),
(2, 'Outro Endereço', 'Rua XYZ', '456', 'Bairro XYZ', 'São Paulo', 'SP', 32421434);

CREATE TABLE pedidos (
  id_pedido int(11) PRIMARY KEY AUTO_INCREMENT,
  id_usuario int(11) NOT NULL,
  FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE produtos (
  id_produto int(11) PRIMARY KEY AUTO_INCREMENT,
  descricao varchar(500) NOT NULL,
  imagem varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabela produto_pedido para relacionamento entre produtos e pedidos
CREATE TABLE produto_pedido (
  id_produto int(11) NOT NULL,
  id_pedido int(11) NOT NULL,
  PRIMARY KEY (id_produto, id_pedido),
  FOREIGN KEY (id_produto) REFERENCES produtos (id_produto) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_pedido) REFERENCES pedidos (id_pedido) ON DELETE CASCADE ON UPDATE CASCADE
);