<?php
	session_start();
	require('conecta.php');
	$sql		=	"SELECT * FROM ordem_de_servico WHERE fk_usuario_abertura = '".$_SESSION['id_usuario']."';";
	$banco		=	mysqli_query($conecta, $sql);
	$usuario	=	mysqli_fetch_array($banco);

	$sql		=	"SELECT * FROM evento_os WHERE /*fk_usuario_abertura = '".$_SESSION['id_usuario']."';";
	$banco		=	mysqli_query($conecta, $sql);
	$usuario	=	mysqli_fetch_array($banco);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Exemplo de gráfico</title>

    <!-- Carregar a API do google -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <!-- Preparar a geracao do grafico -->
    <script type="text/javascript">

      // Carregar a API de visualizacao e os pacotes necessarios.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Especificar um callback para ser executado quando a API for carregada.
      google.setOnLoadCallback(desenharGrafico);

      /**
       * Funcao que preenche os dados do grafico
       */
      function desenharGrafico() {
        // Montar os dados usados pelo grafico
        var dados = new google.visualization.DataTable();
        dados.addColumn('string', 'Gênero');
        dados.addColumn('number', 'Quantidades');
        dados.addRows([
          ['Masculino', 14],
          ['Feminino', 20]
        ]);

        // Configuracoes do grafico
        var config = {
            'title':'Quantidade de alunos por gênero',
            'width':1200,
            'height':800
        };

        // Instanciar o objeto de geracao de graficos de pizza,
        // informando o elemento HTML onde o grafico sera desenhado.
        var chart = new google.visualization.PieChart(document.getElementById('area_grafico'));

        // Desenhar o grafico (usando os dados e as configuracoes criadas)
        chart.draw(dados, config);
      }
    </script>
  </head>

  <body>
    <div id="area_grafico"></div>
  </body>
</html>
<!--<html>
  <head>
   Load the AJAX API
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
 </head>

  <body>
    Div that will hold the pie chart
    <div id="chart_div"></div>
  </body>
</html>-->
<?php
/*
SetFileFormat("png");

#Indicamos o título do gráfico e o título dos dados no eixo X e Y do mesmo
$grafico->SetTitle("Gráfico de exemplo");
$grafico->SetXTitle("Eixo X");
$grafico->SetYTitle("Eixo Y");


#Definimos os dados do gráfico
$dados = array(
		array('Janeiro', 10),
		array('Fevereiro', 5),
		array('Março', 4),
		array('Abril', 8),
		array('Maio', 7),
		array('Junho', 5),
);

$grafico->SetDataValues($dados);

#Exibimos o gráfico
$grafico->DrawGraph();*/
?>

