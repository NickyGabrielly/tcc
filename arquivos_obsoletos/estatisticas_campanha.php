<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Estatística da campanha</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			require ("conecta.php");
			$conexao    =    mysqli_select_db($conecta, "scos"); {
			
			//Recebendo o ID da campanha via URL
			$id_campanha	=	$_GET['campanha'];

			$ano =	date('Y'); 
			$querycampanha      =   "SELECT * FROM campanha WHERE id_campanha='".$id_campanha."';";
			$sqlcampanha  		=   mysqli_query($conecta, $querycampanha);
			$exibecampanha 		=   mysqli_fetch_array($sqlcampanha);
			$unidade_medida		=	$exibecampanha['unidade_medida'];
			
			$sqlturmas = "SELECT * FROM turma where ativo = 1 AND ano = '$ano' ORDER BY turno, nome_turma";
			$consultaturmas = mysqli_query($conecta, $sqlturmas);
		?>
	
        <div id="menu">
			<?php require("menu.php"); ?>
		</div>
		
		<div class="container">	

			<?php

			$hoje = date('Y-m-d');


/*   NESTA ETAPADA, QUERO INFORMAR NO TOPO DA PÁGINA SE A CAMPANHA ESTÁ VIGENTE, VENCIDA OU CANCELADA.....
	
			if ($registro['ativo'] == 0)
			{
				$font_color		=	"#AEAAAA";
				$color_bgcolor	=	"#CDC2C2";
				//$color_bgcolor	=	"#edaba4"; //Cor vermelha 
				$color_icone	=	"#ec7063"; //Cor vermelha
				$status_badge	=	"<br><div class='inativa'> <span class='badge badge-danger'>&nbsp;INATIVA&nbsp;</span></div>";
				$opacity		=	"opacity-25";  //Imagem opaca
			}
			else
			{
				if($exibecampanha['data_fim'] < $hoje and $exibecampanha['ativo'] == 1)
				{
					$font_color		=	"#AEAAAA";
					$color_bgcolor	=	"#CDC2C2";
					//$color_bgcolor	=	"#edaba4"; //Cor vermelha 
					$color_icone	=	"#ec7063"; //Cor vermelha
					$status_badge	=	"<br><div class='inativa'> <span class='badge badge-danger'>&nbsp;VENCIDA&nbsp;</span></div>";
					$opacity		=	"opacity-25";  //Imagem opaca
				}
				else
				{
					$color_icone	=	"#52be80";	//Cor verde
				}
			}
*/
			?>

			<div class="row">
				<div class="col-sm-6">
				<!-- Primeira coluna do grid -->
				
					<!-- Script para Gráficos -->
					<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
					<script type="text/javascript">
						google.charts.load("current", {packages:["corechart"]});
						google.charts.setOnLoadCallback(drawChart);
						function drawChart() 
						{
							var data = google.visualization.arrayToDataTable([
				
							['Task', 'Hours per Day'],				
							
							<?php
								while($listaturmas = mysqli_fetch_assoc($consultaturmas)) 
								{	
									//** Verifica se a turma encontra-se cadastrada na campanha
									$sqlverificadorturmacampanha =	"SELECT * FROM turma_campanha WHERE id_campanha='".$id_campanha."' AND id_turma='".$listaturmas['id_turma']."';";
									$sqlverificadorcampanha  	 =  mysqli_query($conecta, $sqlverificadorturmacampanha);
									$verificador				 =	mysqli_num_rows($sqlverificadorcampanha);
									
									//** CALCULA A SOMA DOS MATERIAIS RECEBIDOS POR TURMA
									$sqlsomaitensrecebidosporturma 		= "SELECT sum(quantidade) as total FROM recebimento R WHERE id_turma = '".$listaturmas['id_turma']."' and id_campanha='".$id_campanha."'";
									$querytotalrec = mysqli_query($conecta, $sqlsomaitensrecebidosporturma);
									$resultadorecporturma = mysqli_fetch_assoc($querytotalrec);
									
									if($resultadorecporturma['total'] == "")
									{
										$resultadorecporturma['total'] = 0.0;
									}
									
									//Se a turma estiver ativa e com valores de itens recebidos exibe no gráfico
									if($verificador >= 1)
									{
										echo "['".$listaturmas['nome_turma']."', ".$resultadorecporturma['total']."],";
									}
								}
							?>

								]);

							var options = {
							  
								title: 'Estatística da campanha - <?php echo $exibecampanha['nome_campanha']; ?>',
								is3D: true,

								backgroundColor: 'transparent',
								width: "100%",
								sliceVisibilityThreshold: 0,
								legend: {position: 'bottom', textStyle: {color: 'black', fontSize: 14}},
								chartArea:{left:20,top:0,width:'50%',height:'75%'}

							};
							

							var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
							chart.draw(data, options);
						}
					</script>

					<?php } ?>
					<div id="piechart_3d" style="width: 900px; height: 500px;"></div>


					<!-- DIV para cadastro de nova campanha -->
					<div id="div_cadastro" class="div_cadastro">
						<div class="container">				
							<br><h6>
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
								<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								<path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
							</svg>&nbsp;&nbsp;
							Informações gerais da campanha</h6>
							<?php echo '
							<small>
							Vigência&nbsp;&nbsp;
							<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
								<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
							</svg>&nbsp;&nbsp;'.date("d/m/Y", strtotime($exibecampanha['data_inicio'])).'
							
							&nbsp;&nbsp;até&nbsp;&nbsp;
							
							<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-calendar2-check" viewBox="0 0 16 16">
								<path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
								<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
								<path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
							</svg>&nbsp;&nbsp;'.date("d/m/Y", strtotime($exibecampanha['data_fim'])).'</small>';
							?>
							<hr>

							<?php 
							
								$querytop3turma		= "SELECT sum(quantidade), id_turma, id_campanha FROM recebimento WHERE id_campanha = '".$id_campanha."' GROUP BY id_turma ORDER BY sum(quantidade) DESC LIMIT 3";
								$consultatop3turma 	= mysqli_query($conecta, $querytop3turma);
								$num_class = 1;
								
								echo '<div class="container">';
								
								while($exibetop3turma = mysqli_fetch_assoc($consultatop3turma)) 
								{
									echo '<b>'.$num_class.'º lugar</b> - ';
								
									$num_class++;
									
									//Consulta SQL para buscar nome do cliente através do ID
									$queryconsturma = "SELECT * FROM turma WHERE id_turma='".$exibetop3turma["id_turma"]."'";
									$consultaturma = mysqli_query($conecta, $queryconsturma);		
										while($exibenometurma = mysqli_fetch_array($consultaturma)) 
										{
											echo mb_strimwidth($exibenometurma["nome_turma"], 0, 21, " ...").'<br>';
										}
									// echo ' ('.$exibetop3turma["sum(quantidade)"].') <br>'; Caso queira exibir a quantidade de itens recebidos por turma
								}
								
								echo '</div>';
								?>
							<hr>
							<center>
								<?php

								//Consulta as turmas cadastradas em uma determinada campanha
								$sqlturmascadastradas = "SELECT * FROM turma_campanha where id_campanha = ".$exibecampanha['id_campanha']."";
								$consultaturmascadastradas = mysqli_query($conecta, $sqlturmascadastradas);
								
								while($registroturma = mysqli_fetch_assoc($consultaturmascadastradas)) 
								{		
								
									//Consulta o nome das turmas
									$sqlnometurmascadastradas = "SELECT * FROM turma where id_turma = ".$registroturma['id_turma']."";
									$consultanometurmascadastradas = mysqli_query($conecta, $sqlnometurmascadastradas);
								
									while($registronometurma = mysqli_fetch_assoc($consultanometurmascadastradas)) 
									{
										
										if($registronometurma['turno'] == 1)
										{
											echo '<span class="badge badge-primary"> &nbsp;'.$registronometurma['nome_turma'].'&nbsp;</span>&nbsp;';
										}
										if($registronometurma['turno'] == 2)
										{
											echo '<span class="badge badge-info"> &nbsp;'.$registronometurma['nome_turma'].'&nbsp;</span>&nbsp;';
										}
										if($registronometurma['turno'] == 3)
										{
											echo '<span class="badge badge-dark"> &nbsp;'.$registronometurma['nome_turma'].'&nbsp;</span>&nbsp;';
										}	
									}
								}
								
								//** Soma o total arrecadado na campanha por todas as turmas enganjadas
								$sqltotalarrecadadogeral	=	"select sum(quantidade) as totalrecebido from recebimento where id_campanha = ".$exibecampanha['id_campanha']."";
								$querytotalarrecadadogeral = mysqli_query($conecta, $sqltotalarrecadadogeral);
								$resultadototalarrecadadogeral = mysqli_fetch_assoc($querytotalarrecadadogeral);
								
								
								echo '<br><hr>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator" viewBox="0 0 16 16">
									<path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
									<path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
								</svg>&nbsp;&nbsp;
								<b>';
								
								if($unidade_medida == 'und')
								{
									echo number_format($resultadototalarrecadadogeral['totalrecebido'], 0).' unidades arrecadados ao total</b>';
								}
								

								if($unidade_medida == 'l')
								{
									echo number_format($resultadototalarrecadadogeral['totalrecebido'], 3, ',','.').' litros arrecadados ao total</b>';
								} 

								if($unidade_medida == 'kg')
								{
									echo number_format($resultadototalarrecadadogeral['totalrecebido'], 3, ',','.').' kg arrecadados ao total</b>';
								} 

								?>
							</center>
						</div><br>
					</div><br>
				<!-- Fim do primeira coluna do GRID -->
				</div>
				
				
				<div class="col-sm-6">
					<!-- Segunda coluna do GRID - informações -->
					<br>
					<h4><?php echo $exibecampanha['nome_campanha']; ?></h4>
					<p><?php echo $exibecampanha['descricao']; ?></p>
				</div>
		</div>


		<?php
		
		$sqlsomaitensrecebipordia 		= "	select id_campanha, data, sum(quantidade) as quantidade from recebimento where id_campanha = '".$id_campanha."' group by data order by data";
		$consultavolumerecebido = mysqli_query($conecta, $sqlsomaitensrecebipordia);
		
		//** CALCULA A SOMA DOS MATERIAIS RECEBIDOS POR TURMA

		
		
		while($listavolumerecebidodia = mysqli_fetch_assoc($consultavolumerecebido)) 
		{					
			//Calcula qual o mês anterior, afim de exibir o gráfico de forma correta. 
			$mes_arrecadacao	=	date("m", strtotime($listavolumerecebidodia['data']));
			$mes_anterior 		= 	date($mes_arrecadacao, strtotime('-1 month'));
			
			echo '[new Date('.
			date("Y", strtotime($listavolumerecebidodia['data'])).', '.
			//date("m", strtotime($listavolumerecebidodia['data'])).', '.
			$mes_anterior.', '.
			date("d", strtotime($listavolumerecebidodia['data'])).') , '.
			$listavolumerecebidodia['quantidade'].'],';
		}
		?>

<!--

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">

		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {

		var data = new google.visualization.DataTable();
		data.addColumn('date', 'Time of Day');
		data.addColumn('number', 'Arrecadação');

		data.addRows([


		]);


        var options = {
          title: 'Engajamento e arrecadação diária',
          width: 900,
          height: 500,
          hAxis: {
            format: 'd/M/yy',
            gridlines: {count: 15}
          },
          vAxis: {
            gridlines: {color: 'none'},
            minValue: 0
          }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

        chart.draw(data, options);

        var button = document.getElementById('change');

        button.onclick = function () {

          // If the format option matches, change it to the new option,
          // if not, reset it to the original format.
          options.hAxis.format === 'M/d/yy' ?
          options.hAxis.format = 'MMM dd, yyyy' :
          options.hAxis.format = 'M/d/yy';

          chart.draw(data, options);
        };
      }
  
-->






  </script>
		
		 <div id="chart_div"></div>

	</body>
</html>