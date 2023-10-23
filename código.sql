CREATE TABLE cliente (
    cod_cliente INT AUTO_INCREMENT PRIMARY KEY,
    cpf_cliente INT(16),
    endereco_cliente VARCHAR(100),
    nome_cliente VARCHAR(100)
);

CREATE TABLE compra (
    valaor_compra FLOAT,
    cod_compra INT AUTO_INCREMENT PRIMARY KEY,
    fk_cliente_cod_cliente INT
);

CREATE TABLE produto (
    cod_produto INT AUTO_INCREMENT PRIMARY KEY,
    tipo_produto VARCHAR(50),
    marca_produto VARCHAR(50),
    valor_produto FLOAT,
    fk_compra_cod_compra INT,
    fk_funcionario_cod_funcionario INT(16)
);

CREATE TABLE funcionario (
    cod_funcionario INT(16) AUTO_INCREMENT PRIMARY KEY,
    nome_funcionario VARCHAR(100),
    turno_funcionario VARCHAR(50)
);
 
ALTER TABLE compra ADD CONSTRAINT FK_compra_2
    FOREIGN KEY (fk_cliente_cod_cliente)
    REFERENCES cliente (cod_cliente)
    ON DELETE RESTRICT;
 
ALTER TABLE produto ADD CONSTRAINT FK_produto_2
    FOREIGN KEY (fk_compra_cod_compra)
    REFERENCES compra (cod_compra)
    ON DELETE RESTRICT;
 
ALTER TABLE produto ADD CONSTRAINT FK_produto_3
    FOREIGN KEY (fk_funcionario_cod_funcionario)
    REFERENCES funcionario (cod_funcionario)
    ON DELETE RESTRICT;
