<html>
  <head>
    <meta charset="uft-8">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Nome', 'Endereço'],
          <?php

          include 'conexao.php';
          $sql = "SELECT * FROM cliente";
          $buscar = mysqli_query($conexao, $sql);

          while ($dados = mysqli_fetch_array($buscar)) {
            $nome_cliente = $dados['nome_cliente'];
            $endereco_cliente = $dados['endereco_cliente'];
        
          ?>
          ['<?php echo $nome_cliente?>', <?php echo $endereco_cliente ?>],
        <?php } ?>
        ]);

        var options = {
          title: 'Cliente',
          legend: {position: 'right'}
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));{

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
