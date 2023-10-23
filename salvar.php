<?php
include 'conexao.php';

$cpf_cliente = $_POST['cpf_cliente'];
$end_cliente = $_POST['end_cliente'];
$nome_cliente = $_POST['nome_cliente'];

$valor_compra = $_POST['valor_compra']; 

$nome_funcionario = $_POST['nome_funcionario'];
$turno_funcionario = $_POST['turno_funcionario'];

$tipo_produto = $_POST['tipo_produto'];
$marca_produto = $_POST['marca_produto'];
$valor_produto = $_POST['valor_produto'];

if (mysqli_query($conexao, "INSERT INTO cliente(cpf_cliente, endereco_cliente, nome_cliente) VALUES ('$cpf_cliente', '$end_cliente', '$nome_cliente')")) {
    $id = mysqli_insert_id($conexao);
}
if (mysqli_query($conexao, "INSERT INTO compra(valaor_compra, fk_cliente_cod_cliente) VALUES ('$valor_compra', '$id')")) {
    $id2 = mysqli_insert_id($conexao);
}
if (mysqli_query($conexao, "INSERT INTO funcionario(nome_funcionario, turno_funcionario) VALUES ('$nome_funcionario', '$turno_funcionario')")) {
    $id3 = mysqli_insert_id($conexao);
}
if (mysqli_query($conexao, "INSERT INTO produto(fk_funcionario_cod_funcionario,fk_compra_cod_compra,tipo_produto, marca_produto, valor_produto) VALUES ('$id3','$id2','$tipo_produto', '$marca_produto', '$valor_produto')")) {
    $id4 = mysqli_insert_id($conexao);
}
header('location: index.php');

?>
