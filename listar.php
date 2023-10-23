<?php
	include 'conexao.php';
        $listarSQL = mysqli_query($conexao, "SELECT * FROM cliente");
    $listarSQL2 = mysqli_query($conexao, "SELECT * FROM compra");
    $listarSQL3 = mysqli_query($conexao, "SELECT * FROM funcionario");
    $listarSQL4 = mysqli_query($conexao, "SELECT * FROM produto");
    $listarSQL5 = mysqli_query($conexao, "SELECT cpf_cliente FROM cliente");
    $listarSQL6 = mysqli_query($conexao, "SELECT nome_funcionario FROM funcionario WHERE turno_funcionario = 'Noite'");
    $listarSQL7 = mysqli_query($conexao, "SELECT cod_produto FROM produto WHERE tipo_produto = 'Eletrônico'");
    $listarSQL8 = mysqli_query($conexao, "SELECT marca_produto FROM produto ");
    $listarSQL9 = mysqli_query($conexao, "SELECT DISTINCT nome_cliente FROM cliente ORDER BY (nome_cliente)");
    $listarSQL10 = mysqli_query($conexao, "SELECT cod_compra FROM compra WHERE valaor_compra < 50.00");
?>
