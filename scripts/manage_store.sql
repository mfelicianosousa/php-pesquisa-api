CREATE DATABASE mfsdevsystem_manage_store CHARACTER SET utf8 COLLATE utf8_general_ci;

USE mfsdevsystem_manage_store;

CREATE TABLE lojas (
   id INT UNSIGNED NOT NULL AUTO_INCREMENT,
   nome VARCHAR(100) NOT NULL,
   telefone VARCHAR(13) NOT NULL,
   endereco VARCHAR(200) NOT NULL,
   PRIMARY KEY (id)
);

CREATE TABLE produtos (
   id INT UNSIGNED NOT NULL AUTO_INCREMENT,
   loja_id INT UNSIGNED NOT NULL,
   nome VARCHAR(100) NOT NULL,
   preco DECIMAL NOT NULL,
   quantidade INT UNSIGNED NOT NULL,
   PRIMARY KEY (id),
   CONSTRAINT fk_produtos_lojas
       FOREIGN KEY (loja_id) REFERENCES lojas(id)
);

INSERT INTO lojas (nome, telefone, endereco)
VALUES ('mfsdevsystem-store matriz', '98141-3390', 'Rua duzentos e hum,6');

INSERT INTO produtos (loja_id, nome, preco, quantidade)
VALUES (1, 'teclado', 40.00, 20);

SELECT * FROM Lojas;

SELECT * FROM Produtos;

SELECT 
   lojas.nome as loja,
   produtos.nome as produto,
   produtos.preco as preco,
   produtos.quantidade as quantidade
FROM produtos
INNER JOIN lojas ON produtos.loja_id = loja.id
WHERE 
   produtos.nome = 'teclado'
ORDER BY produtos.nome;

UPDATE produtos
SET
  nome = 'mouse',
  quantidade = 100
WHERE
  nome = 'teclado';

DELETE FROM produtos
WHERE nome = 'mouse';


