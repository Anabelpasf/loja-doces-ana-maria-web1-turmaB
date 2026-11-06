CREATE DATABASE IF NOT EXISTS doceanalu_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE doceanalu_db;

CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    foto VARCHAR(255),
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);

CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(150) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(100),
    endereco TEXT
);

CREATE TABLE formaPagamento (
    id_forma_pagamento INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL
);

CREATE TABLE pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    data_pedido DATE NOT NULL,
    id_cliente INT,
    id_forma_pagamento INT,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_forma_pagamento) REFERENCES formaPagamento(id_forma_pagamento)
);

CREATE TABLE pedidosProdutos (
    id_pedido INT,
    id_produto INT,
    quantidade INT NOT NULL,
    PRIMARY KEY (id_pedido, id_produto),
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido),
    FOREIGN KEY (id_produto) REFERENCES produtos(id_produto)
);


INSERT INTO categorias (nome) VALUES 
('Bolos Caseiros e Gelados'), 
('Doces com Frutas e Coberturas'),
('Docinhos de Festa (Unidade)');

INSERT INTO produtos (nome, preco, foto, id_categoria) VALUES 
('Bolo de Laranja', 30.00, 'bolo_laranja.jpg', 1),
('Bolo de Chocolate', 35.00, 'bolo_chocolate.jpg', 1),
('Bolo Gelado de Maracujá', 9.00, 'bolo_gelado_maracuja.jpg', 1),
('Morango do Amor', 8.00, 'morango_amor.jpg', 2),
('Morango Cravejado', 14.00, 'morango_cravejado.jpg', 2),
('Brigadeiro Tradicional', 3.50, 'brigadeiro.jpg', 3),
('Brigadeiro de Leite Ninho', 4.00, 'ninho.jpg', 3);


INSERT INTO clientes (nome_cliente, telefone, email, endereco) VALUES 
('Maria Luiza', '41999998888', 'maria@email.com', 'Rua das Flores, 123'),
('João Pedro Mota', '41988887777', 'joao.pedro@email.com', 'Av. Central, 456'),
('Anabel', '41977776666', 'anabel@email.com', 'Rua XV de Novembro, 789');

INSERT INTO formaPagamento (nome) VALUES 
('Pix'), 
('Cartão de Crédito'),
('Dinheiro');


INSERT INTO pedidos (data_pedido, id_cliente, id_forma_pagamento) VALUES 
('2026-11-05', 1, 1),
('2026-11-05', 2, 2),
('2026-11-05', 3, 1);


INSERT INTO pedidosProdutos (id_pedido, id_produto, quantidade) VALUES 
(1, 1, 1), 
(1, 6, 10),
(2, 3, 3), 
(2, 7, 8), 
(3, 5, 2);

