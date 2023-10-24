<?php include 'header.php';?>
<?php
// Configuração da conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco_de_dados = "trabalho";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);

// Consulta SQL para obter os dados da tabela "compra" (excluindo a chave estrangeira)
$query = "SELECT valaor_compra, cod_compra FROM compra";
$result = mysqli_query($conexao, $query);

// Array para armazenar os dados
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $valaor_compra = $row['valaor_compra'];
    $cod_compra = $row['cod_compra'];

    // Adicione os dados ao array
    $data[] = array($cod_compra, $valaor_compra);
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Código da Compra');
            data.addColumn('number', 'Valor da Compra');

            <?php
            foreach ($data as $row) {
                $cod_compra = $row[0];
                $valaor_compra = $row[1];

                echo "data.addRow(['$cod_compra', $valaor_compra]);";
            }
            ?>

            var options = {
                title: 'Compras e seus Valores',
                chart: {
                    title: 'Compras e seus Valores'
                }
            };

            var chart = new google.visualization.BarChart(document.getElementById('barchart'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
</head>
<body>
    <h1>Gráfico de Compras e Valores</h1>
    <div id="barchart" style="width: 900px; height: 500px;"></div>
</body>
</html>
