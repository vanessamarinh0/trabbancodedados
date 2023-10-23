INSERT INTO cliente (cod_cliente, cpf_cliente, endereco_cliente, nome_cliente)
VALUES
(1, '12345678900', 'Rua Exemplo, 123', 'Janaina'),
(2, '98765432101', 'Avenida Principal, 456', 'Alberto'),
(3, '55555555555', 'Travessa do Centro, 789', 'Carlos'),
(4, '11122233344', 'Rua da Amostra, 789', 'Daiana'),
(5, '44433322211', 'Avenida Central, 987', 'Rosa'),
(6, '99988877766', 'Rua da Simulação, 567', 'Rafaela'),
(7, '77788899900', 'Avenida Modelo, 345', 'Mario'),
(8, '22233344455', 'Travessa Abstrata, 123', 'Claudio'),
(9, '66677788899', 'Rua Genérica, 789', 'Marcia'),
(10, '33344455566', 'Avenida Imaginária, 234', 'Sandra');
INSERT INTO compra (valaor_compra, cod_compra,fk_cliente_cod_cliente)
VALUES
(62.2,1,1),
(75.5,2,2),
(89.99,3,3),
(68.5,4,4),
(32.4,5,5),
(95.25,6,6),
(45.99,7,7),
(120,8,8),
(54.75,9,9),
(125.75,10,10);
INSERT INTO funcionario (cod_funcionario, nome_funcionario, turno_funcionario)
VALUES
(1, 'Pedro Almeida', 'Noite'),
(2, 'Mariana Costa', 'Noite'),
(3, 'João Silva', 'Manhã'),
(4, 'Maria Santos', 'Tarde'),
(5, 'Fernando Souza', 'Noite'),
(6, 'Carlos Gomes', 'Tarde'),
(7, 'Luiz Oliveira', 'Manhã'),
(8, 'Isabela Rodrigues', 'Tarde'),
(9, 'Larissa Carvalho', 'Manhã'),
(10, 'Ana Pereira', 'Manhã');
INSERT INTO produto (cod_produto, tipo_produto, marca_produto, valor_produto, fk_compra_cod_compra, fk_funcionario_cod_funcionario)
VALUES
(1,'Alimentos', 'Nestlé', 10.0,1,1),
(2,'Móveis', 'IKEA', 10.01,2,2),
(3,'Vestuário', 'Nike', 9.99,3,3),
(4,'Eletrônico', 'Sony', 9.99,4,4),
(5,'Eletrônico', 'Sony', 19.99,5,5),
(6,'Vestuário', 'Nike', 9.99,6,6),
(7,'Móveis', 'IKEA', 25.51,7,7),
(8,'Alimentos', 'Nestlé', 20.01,8,8),
(9,'Eletrônico', 'Sony', 19.99,9,9),
(10, 'Vestuário', 'Nike', 9.99,10,10);
