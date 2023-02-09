<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Equipamentos</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		
		
	</head>
	
	<style>
	    thead{
	           border-radius: 10px;
	    }
	</style>
	
	
	
	<body>
	   <nav>
          <?php
          	include("barra_menu.php");
          ?>
     	</nav>
     	
		<br>
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Equipamentos</h1>
				</div>
				<div class="col-md-auto">
					<form method="post" class="formPesquisa" action="">
						<div class="col-md-auto">
							<div class="input-group">
								<input class="form-control" autocomplete="off" type="search" name="pesquisa" aria-label="Search" style="border-right: nome;" placeholder="Pesquisa">
								<div class="input-group-append">
									<div class="input-group-text" style="background-color: #FFF">
										<i class="fas fa-search">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
												<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
											</svg>
										</i>
									</div>
									<input class="btn" type="submit" value="Pesquisar">
								</div>
							</div>
							<small id="informaPesquisa" class="form-text text-muted">
								Informe acima o número de patrimônio, tipo de equipamento, especificação ou o local de origem para localizar.
							</small>
						</div>
					</form>
				</div>
			</div>
			<hr><br>


			<table border="0" class="table table-hover">
					<thead class="p-3 mb-2 text-white" style="background-color: black;">
						<tr>
							<th width="50px"  class="text-white">Ativo:</th> <!--$ativo-->
							<th width="300px" class="text-white">Número de Patrimônio:</th> <!--$n_patrimonio-->
							<th width="250px" class="text-white">Equipamento:</th> <!--$nome_equipamento-->
							<th width="350px" class="text-white">Especificação:</th> <!--$especificacao-->
							<th width="150px"  class="text-white">De onde veio:</th> <!--$local_origem-->
						</tr>
					</thead>

					<?php 
						require ("conecta.php");
						$conexao	=	mysqli_select_db($conecta, "scos"); {
							
						//Inicio da pesquisa
						if(isset($_REQUEST['pesquisa']) && !empty($_REQUEST['pesquisa'])) {
							$pesquisa	=	$_POST['pesquisa'];
						}
						//Fim da pesquisa
							
						if($pesquisa == "") {
							$sql = "SELECT * FROM equipamento ORDER by n_patrimonio";
							$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
						}
							
						else
						//Se removida a chave de entrada e saida, exibe todos os registros do banco ao carrregar a página
							$sql = "SELECT * FROM equipamento WHERE n_patrimonio LIKE '%$pesquisa%' or nome_equipamento LIKE '%$pesquisa%' or especificacao LIKE '%$pesquisa%' or local_origem LIKE '%$pesquisa%' ORDER by n_patrimonio";
							$consulta = mysqli_query($conecta, $sql);
							$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
						}	
							
							//Exibe mensagem de quantos registros foram encontrados
						if ($cnt == "0") {
							$msg = '<h6 style="texte-align: right;">Nenhum registro com o termo <b>'. $pesquisa . '</b></h6>';
						}
							
						if ($cnt == "0" & $pesquisa != "") {
						    $msg = '<h6 style="text-align: right;">Nenhum registro com o termo <b>'.$pesquisa.'</b></h6>';
						}
							
						if ($cnt == "1" & $pesquisa == "") {
							$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> resgistro</h6>';
						}
							
						if ($cnt == "1" & $pesquisa != "") {
							$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> resgistro encontrado com o termo <b>'.$pesquisa.'</b></h6>';
						}
							
						if ($cnt >= "2" & $pesquisa == "") {
							$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> resgistros</h6>';
						}
							
						if ($cnt >= "2" & $pesquisa != "") {
							$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> resgistros com o termo <b>'.$pesquisa.'</b></h6>';
						}
					
					?>
						<div class="row">
							<div class="col-sm-8 col-md-6">
								<!--botão para cadastrar novo equipamento-->
								<button class="btn" onclick="window.location.href='cadastra_equipamento.php'">Novo Equipamento</button>
								<br><br>
							</div>
						
					<?php	
						
						//Exibe mensagem confore os IFs acimas
						echo '<div class="col-sm-6 col-md-6">
							<p class = "text-right">'.$msg.'</p>
						</div>
						</div>';
							
						while($registro = mysqli_fetch_assoc($consulta)) {
							echo '<tbody style="background-color: white;">';
								echo '<tr>';
									if ($registro["ativo"] == 0) {
										echo '<td style="text-align: center;">
											<!-- Não -->
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0303" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
											<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
											</svg>'.'</font></td>';
									}
										
									else{
										echo '<td style="text-align: center;">
											<!-- Sim -->
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#069101" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
											<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
											</svg>'.'</font></td>';
									}
									
									echo '<td><font size="2">'.$registro["n_patrimonio"].'</font></td>';
									echo '<td><font size="2">'.$registro["nome_equipamento"].'</font></td>';
									echo '<td><font size="2">'.$registro["especificacao"].'</font></td>';
									echo '<td><font size="2">'.$registro["local_origem"].'</font></td>';
									echo '<td><font size="2"></font></td>';
								echo '</tr>';
							echo '<tbody>';
						}
					/**/?>				
			</table>
								

		
			<!--div class="row rounded">
				<div class="col-sm-3">
					<img src="">
					<h4>Batatinha quando nasce </h4>
				</div>
			</div-->
					
		</div>
	</body>
</html>