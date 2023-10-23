<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>CRUD PHP</title>
</head>
<body style="background-image: url('imagem.jpeg'); background-size: cover; min-height: 100%;
background-repeat: no-repeat;
background-position: center center;">
    <form method="post" action="salvar.php">
    <div class="container" style="text-align: center; margin-left: 70px; margin-top: 50px; height: 340px; width: 550px; border: 2px solid black; border-radius: 10px;">
        <h1>CLIENTE</h1>
        <br>
        <div class="row">
            <div class="col-sm">
            CPF: <input class="form-control" name="cpf_cliente">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
            Endereço: <input class="form-control" name="end_cliente">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
            Nome: <input class="form-control" name="nome_cliente">
            </div>
        </div>
        <br>
    </div>
    <div class="container" style="text-align: center; margin-left: 70px; margin-top: 50px; height: 180px; width: 550px; border: 2px solid black; border-radius: 10px;">
        <h1>COMPRA</h1>
        <br>
        <div class="row">
            <div class="col-sm">
            Valor: <input class="form-control"  name="valor_compra">
            </div>
        </div>
        <br>
    </div>
    <div class="container" style="text-align: center; margin-left: 70px; margin-top: 50px; height: 250px; width: 550px; border: 2px solid black; border-radius: 10px;">
        <h1>FUNCIONÁRIO</h1>
        <br>
        <div class="row">
            <div class="col-sm">
            Nome: <input class="form-control" name="nome_funcionario">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
            Turno: <input class="form-control" name="turno_funcionario">
            </div>
        </div>
        <br>
    </div>
    <div class="container" style="text-align: center; margin-left: 70px; margin-top: 50px; height: 340px; width: 550px; border: 2px solid black; border-radius: 10px;">
        <h1>PRODUTO</h1>
        <br>
        <div class="row">
            <div class="col-sm">
            Tipo: <input class="form-control" name="tipo_produto">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
            Marca: <input class="form-control" name="marca_produto">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
            Valor: <input class="form-control"  name="valor_produto">
            </div>
        </div>
        <br>
    </div>

    <div class="row" style="text-align: center; margin-left: 70px; margin-top: 10px; height: 50px; width: 550px;">
                <button type="submit" class=" btn btn-primary">Salvar</button>
                <br>
                <br>
    </div>
    </form>
</body>
</html>
