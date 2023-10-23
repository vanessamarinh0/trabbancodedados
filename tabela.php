<?php include 'header.php';?>
<?php
include 'listar.php';
include 'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabela PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-image: url('imagem2.jpeg'); background-size: cover; min-height: 100%;
background-repeat: no-repeat;
background-position: center center;">
	<br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
        <h1>DADOS DA TABELA CLIENTE</h1>
			<thead>
				<tr>
					<th scope="col">Código</th>
					<th scope="col">CPF</th>
					<th scope="col">Endereço</th>
					<th scope="col">Nome</th>
				</tr>
			</thead>
			<?php while ($cliente = mysqli_fetch_assoc($listarSQL)) { ?>
			<tbody>
				<tr>
					<td><?php echo $cliente['cod_cliente']; ?></td>
					<td><?php echo $cliente['cpf_cliente']; ?></td>
					<td><?php echo $cliente['endereco_cliente']; ?></td>
                    <td><?php echo $cliente['nome_cliente']; ?></td>
				</tr>

			</tbody>
			<?php } ?>
		</table>
	</div>

    <br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
        <h1>DADOS DA TABELA COMPRA</h1>
			<thead>
				<tr>
					<th scope="col">Valor</th>
					<th scope="col">Código</th>
				</tr>
			</thead>
			<?php while ($compra = mysqli_fetch_assoc($listarSQL2)) { ?>
			<tbody>
				<tr>
					<td><?php echo $compra['valaor_compra']; ?></td>
					<td><?php echo $compra['cod_compra']; ?></td>
				</tr>

			</tbody>
			<?php } ?>
		</table>
	</div>

    <br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
        <h1>DADOS DA TABELA FUNCIONÁRIO</h1>
			<thead>
				<tr>
					<th scope="col">Código</th>
					<th scope="col">Nome</th>
                    <th scope="col">Turno</th>
				</tr>
			</thead>
			<?php while ($funcionario = mysqli_fetch_assoc($listarSQL3)) { ?>
			<tbody>
				<tr>
					<td><?php echo $funcionario['cod_funcionario']; ?></td>
					<td><?php echo $funcionario['nome_funcionario']; ?></td>
                    <td><?php echo $funcionario['turno_funcionario']; ?></td>
				</tr>

			</tbody>
			<?php } ?>
		</table>
	</div>

    <br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
        <h1>DADOS DA TABELA PRODUTO</h1>
			<thead>
				<tr>
					<th scope="col">Código</th>
					<th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
					<th scope="col">Valor</th>
				</tr>
			</thead>
			<?php while ($produto = mysqli_fetch_assoc($listarSQL4)) { ?>
			<tbody>
				<tr>
					<td><?php echo $produto['cod_produto']; ?></td>
					<td><?php echo $produto['tipo_produto']; ?></td>
                    <td><?php echo $produto['marca_produto']; ?></td>
					<td><?php echo $produto['valor_produto']; ?></td>
				</tr>

			</tbody>
			<?php } ?>
		</table>
	</div>

	<br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
        <h1>CPF DOS CLIENTES</h1>
			<thead>
				<tr>
					<th scope="col">CPF</th>
				</tr>
			</thead>
			<?php while ($cpf_cliente = mysqli_fetch_assoc($listarSQL5)) { ?>
			<tbody>
				<tr>
					<td><?php echo $cpf_cliente['cpf_cliente']; ?></td>
				</tr>

			</tbody>
			<?php } ?>
		</table>
	</div>

	<br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
        <h1>NOME DOS FUNCIONÁRIOS QUE TRABALHAM NO TURNO DA NOITE</h1>
			<thead>
				<tr>
					<th scope="col">Nome</th>
				</tr>
			</thead>
			<?php while ($nome_funcionario = mysqli_fetch_assoc($listarSQL6)) { ?>
			<tbody>
				<tr>
					<td><?php echo $nome_funcionario['nome_funcionario']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
	</div>

	<br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
        <h1>CÓDIGO DOS PRODUTOS ELETRÔNICOS</h1>
			<thead>
				<tr>
					<th scope="col">Código</th>
				</tr>
			</thead>
			<?php while ($cod_produto = mysqli_fetch_assoc($listarSQL7)) { ?>
			<tbody>
				<tr>
					<td><?php echo $cod_produto['cod_produto']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
	</div>

	<br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
        <h1>MARCA DOS PRODUTOS</h1>
			<thead>
				<tr>
					<th scope="col">Marca</th>
				</tr>
			</thead>
			<?php while ($marca_produto = mysqli_fetch_assoc($listarSQL8)) { ?>
			<tbody>
				<tr>
					<td><?php echo $marca_produto['marca_produto']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
	</div>

	<br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
        <h1>NOME DOS CLIENTES EM ORDEM ALFABÉTICA</h1>
			<thead>
				<tr>
					<th scope="col">Nome</th>
				</tr>
			</thead>
			<?php while ($nome_cliente = mysqli_fetch_assoc($listarSQL9)) { ?>
			<tbody>
				<tr>
					<td><?php echo $nome_cliente['nome_cliente']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
	</div>

	<br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
        <h1>CÓDIGO DA COMPRA COM VALOR MENOR DE $50.00 REAIS</h1>
			<thead>
				<tr>
					<th scope="col">Código</th>
				</tr>
			</thead>
			<?php while ($cod_compra = mysqli_fetch_assoc($listarSQL10)) { ?>
			<tbody>
				<tr>
					<td><?php echo $cod_compra['cod_compra']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
	</div>
    
</body>
</html>
