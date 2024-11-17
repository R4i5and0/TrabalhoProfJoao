CREATE DATABASE IF NOT EXISTS sistema_restaurante;
USE sistema_restaurante;


CREATE TABLE tb_cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    cpf_cliente VARCHAR(14) NOT NULL UNIQUE,
    rg VARCHAR(12),
    telefone VARCHAR(15),
    dataExped DATE,
    orgaoEmis VARCHAR(20),
    nacionalidade VARCHAR(50)
);

INSERT INTO tb_cliente (nome_cliente, cpf_cliente, rg, telefone, dataExped, orgaoEmis, nacionalidade) VALUES
('Harry Potter', '123.456.789-00', 'MG123456', '(31) 99999-0001', '2001-01-01', 'Detran MG', 'Britânico'),
('Hermione Granger', '234.567.890-01', 'MG234567', '(31) 99999-0002', '2001-01-01', 'Detran MG', 'Britânica'),
('Ron Weasley', '345.678.901-02', 'MG345678', '(31) 99999-0003', '2001-01-01', 'Detran MG', 'Britânico');


select * from tb_cliente;

CREATE TABLE tb_comanda (
    id_comanda INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    num_mesa INT NOT NULL,
    nome_garcom VARCHAR(50),
    item_produto VARCHAR(100),
    qtde_produto INT,
    valor_unit DECIMAL(10, 2),
    subtotal DECIMAL(10, 2),
    tx_servico DECIMAL(5, 2),
    soma_valores DECIMAL(10, 2),
    total DECIMAL(10, 2),
    FOREIGN KEY (id_cliente) REFERENCES tb_cliente(id_cliente)
);

INSERT INTO tb_comanda (id_cliente, num_mesa, nome_garcom, item_produto, qtde_produto, valor_unit, tx_servico) VALUES
(1, 5, 'Guilherme', 'Pizza Margherita', 2, 30.00, 10),
(1, 5, 'Guilherme', 'Cerveja', 5, 10.00, 10),
(2, 3, 'Ana', 'Espaguete', 1, 25.00, 10),
(3, 2, 'Carlos', 'Salada Caesar', 1, 20.00, 10);



CREATE TABLE tb_reserva (
    id_reserva INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    nome_cliente VARCHAR(100) NOT NULL,
    telefone_cliente VARCHAR(15),
    email_cliente VARCHAR(100),
    data_evento DATE,
    hora_evento TIME,
    FOREIGN KEY (id_cliente) REFERENCES tb_cliente(id_cliente)
);

INSERT INTO tb_reserva (id_cliente, nome_cliente, telefone_cliente, email_cliente, data_evento, hora_evento) VALUES
(1, 'Harry Potter', '(31) 99999-0001', 'harry.potter@hogwarts.edu', '2024-11-01', '19:00:00'),
(2, 'Hermione Granger', '(31) 99999-0002', 'hermione.granger@hogwarts.edu', '2024-11-02', '20:00:00'),
(3, 'Ron Weasley', '(31) 99999-0003', 'ron.weasley@hogwarts.edu', '2024-11-03', '21:00:00');

ALTER TABLE tb_reserva
DROP FOREIGN KEY tb_reserva_ibfk_1;

DELETE FROM tb_reserva WHERE id_cliente = id_cliente;
DELETE FROM tb_cliente WHERE id_cliente = id_cliente;


ALTER TABLE tb_reserva
ADD CONSTRAINT tb_reserva_ibfk_1
FOREIGN KEY (id_cliente) REFERENCES tb_cliente(id_cliente)
ON DELETE CASCADE;


DELIMITER $$

CREATE TRIGGER calc_subtotal
BEFORE INSERT ON tb_comanda
FOR EACH ROW
BEGIN
    SET NEW.subtotal = NEW.qtde_produto * NEW.valor_unit;
END $$

DELIMITER ;


DELIMITER $$

CREATE PROCEDURE AddCliente(
    IN p_nome_cliente VARCHAR(100),
    IN p_cpf_cliente VARCHAR(14),
    IN p_rg VARCHAR(12),
    IN p_telefone VARCHAR(15),
    IN p_dataExped DATE,
    IN p_orgaoEmis VARCHAR(20),
    IN p_nacionalidade VARCHAR(50)
)
BEGIN
    INSERT INTO tb_cliente (nome_cliente, cpf_cliente, rg, telefone, dataExped, orgaoEmis, nacionalidade)
    VALUES (p_nome_cliente, p_cpf_cliente, p_rg, p_telefone, p_dataExped, p_orgaoEmis, p_nacionalidade);
END $$

DELIMITER ;


DELIMITER $$

CREATE FUNCTION calc_total_comanda(subtotal DECIMAL(10, 2), tx_servico DECIMAL(5, 2))
RETURNS DECIMAL(10, 2)
DETERMINISTIC
BEGIN
    RETURN subtotal + (subtotal * tx_servico / 100);
END $$

DELIMITER ;

SELECT * FROM  tb_reserva;

SELECT * FROM tb_cliente;

SELECT calc_total_comanda(subtotal, tx_servico) AS total_com_com_taxa FROM tb_comanda;

-- Consultar todas as comandas de um cliente específico
SELECT * FROM tb_comanda WHERE id_cliente = (SELECT id_cliente FROM tb_cliente WHERE cpf_cliente = 'CPF_DO_CLIENTE');

-- Consultar o total gasto por cada cliente
SELECT 
    c.nome_cliente,
    SUM(co.total) AS total_gasto
FROM 
    tb_cliente c
JOIN 
    tb_comanda co ON c.id_cliente = co.id_cliente
GROUP BY 
    c.nome_cliente;

SELECT * FROM tb_comanda ORDER BY total DESC LIMIT 1;

-- Consultar produtos pedidos por um garçom específico
SELECT 
    item_produto, 
    SUM(qtde_produto) AS quantidade_vendida
FROM 
    tb_comanda
WHERE 
    nome_garcom = 'NOME_DO_GARCOM'
GROUP BY 
    item_produto;
