<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css"></script>
		<link rel="stylesheet" href="select2.css">
		<link rel="stylesheet" href="select2-bootstrap.css">
		<title>Ordens de Serviço</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
		<link rel="stylesheet" href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">

		<!-- Tema CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="style_tema.css">


		<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
		
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		<link href="https://cdnjs.com/libraries/select2-bootstrap-css" rel="stylesheet"/>
		<script src="https://cdnjs.com/libraries/select2"></script>
		<script src="https://cdnjs.com/libraries/select2?ref=driverlayer.com/web"></script>-->
		
		
		


		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		select2-->
		<!--<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>-->
		
		 <style>
		 	
		 	.search-mobile{
				display: none;
			}
			.serch-pc{
				display: block;
			}

			h1{
				font-family: 'Berkshire Swash', cursive !important;
				text-align: left !important;
				font-size: 50px!important;
			}

			@media (max-width: 992px){
				.search-mobile{
					display: block;
				}
				.search-pc{
					display: none;
				}
				h1{
					text-align: center !important;
				}
			}


			.efeitosnalinha{
				background-color: gainsboro;
				border: darkkhaki 1mm groove;
				border-bottom-color: forestgreen;
				border-right-color: forestgreen;
				/*margin-top: 5px;
				margin-bottom: 5px;*/
				padding-top: 5px;
				padding-bottom: 5px;
				/*height: 6vh;*/
				justify-content: center;
				/*text-align: center;*/
				align-content: center;
			}


		 </style>
		
	</head>
	<body>
	   <nav>
          <?php
          	require("barra_menu.php");
          ?>
     	</nav>
     	
		<div class="container">
			<div class="row align-items-center search-pc">
				<div class="col-6 search-pc">
					<h1>Ordens de Serviço</h1>
				</div>
				<div class="col-6 search-pc">
					<form method="post" class="formPesquisa" action="">
						<div class="search">
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
						</div>
					</form>
				</div>
			</div>

			<div class="row align-items-center search-mobile">
				<div class="col-12 search-mobile">
					<form method="post" class="formPesquisa" action="">
						<div class="col-md-auto search">
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
						</div>
					</form>
				</div>
				<br><br><br>
				<div class="col-12 search-mobile">
					<h1>Ordens de Serviço</h1>
				</div>
				</div><br>

			<?php 
						require ("conecta.php");
						$conexao	=	mysqli_select_db($conecta, "scos"); {
							
						//Inicio da pesquisa
						if(isset($_REQUEST['pesquisa']) && !empty($_REQUEST['pesquisa'])) {
							$pesquisa	=	$_POST['pesquisa'];
						}
						//Fim da pesquisa
							
						if($pesquisa == "") {
							$sql = "SELECT * FROM ordem_de_servico ORDER by status_os asc, prioridade asc";
							$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
						}
							
						else
						//Se removida a chave de entrada e saida, exibe todos os registros do banco ao carrregar a página
							$sql = "SELECT * FROM ordem_de_servico WHERE categoria LIKE '%$pesquisa%' or dh_abertura LIKE '%$pesquisa%' or local_origem LIKE '%$pesquisa%' ORDER by status_os asc, prioridade asc";
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
								<div class="col-md-6">
									<!--botão para cadastrar novo equipamento-->
									<a href="#" data-toggle="modal" data-target="#modal_cadastrar_os">
										<svg xmlns="http://www.w3.org/2000/svg" width="50" height="auto" fill="black" class="bi bi-clipboard2" viewBox="0 0 16 16">
										  	<path d="M3.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5H12a.5.5 0 0 1 0-1h.5A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1H4a.5.5 0 0 1 0 1h-.5Z"/>
										  	<path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
										</svg>
									</a>
									<br><br>	
								</div>
								<div class="col-md-6">
									<!--Exibe mensagem confore os IFs acimas-->
								<div class="col-sm-6 col-md-6">
									<?php echo'<p style="text-align: right;">'.$msg.'</p>';?>
								</div>
								</div>
						</div>
							<?php

						while ($registro = mysqli_fetch_assoc($consulta)) {
							echo'<div class="row efeitosnalinha">';
								//echo'<div class="">';
									echo'<div class="col-sm-3">';
										echo'<h5><span class="uppercase">'.$registro["categoria"].'</span></h5> 
									</div>';
									//echo'<div class="col-sm-1"></div>';
									if ($registro["prioridade"] == 1) {
										echo'<div class="col-sm-2"><h6> Alta prioridade</h6>'; //</div>
									}
									if ($registro["prioridade"] == 2) {
										echo'<div class="col-sm-2"><h6> Média prioridade</h6>';//</div>
									}
									if ($registro["prioridade"] == 3) {
										echo'<div class="col-sm-2"><h6> Baixa prioridade</h6>';
									}
									echo''.$registro['dh_abertura'].'</div>';//<br>
									echo'<div class="col-sm-3"><h6> Equipamento: '.$registro["n_patrimonio"].'</h6></div><div class="col-sm-3"><h6>Status: '.$registro["status_os"].'</h6></div><div class="col-sm-1"><h6>icone</h6></div>';
							echo'</div>';
						}
						date_default_timezone_set('America/Sao_Paulo');
						$date = date('Y-m-d H:i:s');
						echo $date;
						?>

		<!-- Iniciando o modal para cadastrar Ordem de Serviço -->
			<div class="modal fade" id="modal_cadastrar_os" data-focus="false" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">

						<div class="modal-header">
							<h5 class="modal-title"><b>&nbsp&nbspNova Ordem de Serviço</b></h5>
							<!--Botão para fechar modal-->
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<div class="modal-body">
							<div class="container">
								<form name="form1" action="grava_ordem.php" method="post">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Categoria: </label><br>
												<select name="categoria" class="form-control" required>
													<option>Selecione a Categoria</option>
													<option value="REDE">REDE</option>
													<option value="HARDWARE">HARDWARE</option>
													<option value="SOFTWARE">SOFTWARE</option>
													<option value="MANUTENÇÃO">MANUTENÇÃO</option>
													<option value="LIMPEZA">LIMPEZA</option>
													<option value="VÁRIOS">VÁRIOS</option>
												</select>
											</div>											
											<div class="col-sm-6">
												<label>Número de Patrimônio: </label><br>
												<!--input name="n_patrimonio" type="text" placeholder="Digite o número de patrimônio do equipameto" -->
												<select name="n_patrimonio" id="n_patrimonio" class="form-control select2-single" style="width:300px">
													<option>Selecione o n° de patrimônio</option>
												<?php
													$sqlpatrimon = "SELECT * FROM equipamento WHERE ativo = 1 ORDER BY n_patrimonio";
													$consulta = mysqli_query($conecta, $sqlpatrimon);
													$cnt = mysqli_num_rows ($consulta);
													while($registro = mysqli_fetch_assoc($consulta)){
														echo '<option value="'.$registro['id_equipamento'].'">'.$registro['n_patrimonio'].'</opition>';
													}
												?>
											</select> 
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Prioridade: </label><br>
												<select name="prioridade" class="form-control" required>
													<option value="1">Alta</option>
													<option value="2">Média</option>
													<option value="3" selected>Baixa</option>
												</select>
											</div>
											<!--div class="col-sm-6">
												<label>Data de abertura: </label><br>
												<input name="dh_abertura" type="date" class="form-control">
											</div-->
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Status: </label><br>
												<select name="status_os" class="form-control" required>
													<option value="Aberta">Aberta</option>
													<option value="Aguardando peças">Aguardando peças</option>
													<option value="Finalizada">Finalizada</option>
												</select>
											</div>

											<div class="col-sm-6">
												<label>Foto do equipamento: </label><br>
												<input type="file" name="arquivo" class="form-control-file" id="arquivo" accept=".jpg, .jpeg, .png, .gif">
											</div>
										</div>
									</div>
									<br><hr><br>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Problema: </label><br>
												<textarea rows="6"  name="problema" class="form-control" placeholder="Liste os problemas do equipamento" required></textarea><br>
											</div>
											<div class="col-sm-6">
												<label>Observações: </label><br>
												<textarea rows="6"  name="observacoes" class="form-control" placeholder="Observações" required></textarea><br>
											</div>
										</div>
									</div>
									<div class="botoes">
										<div> <!-- onclick="return validar()"-->
											<br>
											<button type="submit" value="Cancelar" class="btn" class="form-control" data-dismiss="modal" aria-label="Fechar">
												Cancelar
											</button>

											<button type="submit" class="btn" class="form-control" onclick="return validar()">
												Cadastrar
											</button>
										</div>
									</div>	
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
					<!-- Finalizando o modal para cadastrar Ordem de Serviço -->

			<div class="col-sm-6">
												<label>Número de Patrimônio: </label><br>
												<!--input name="n_patrimonio" type="text" placeholder="Digite o número de patrimônio do equipameto" -->
												<select name="n_patrimonio" id="n_patrimonio" class="form-control" style="width:300px">
													<option>Selecione o n° de patrimônio</option>
												<?php
													$sqlpatrimon = "SELECT * FROM equipamento WHERE ativo = 1 ORDER BY n_patrimonio";
													$consulta = mysqli_query($conecta, $sqlpatrimon);
													$cnt = mysqli_num_rows ($consulta);
													while($registro = mysqli_fetch_assoc($consulta)){
														echo '<option value="'.$registro['id_equipamento'].'">'.$registro['n_patrimonio'].'</opition>';
													}
												?>
											</select> 
											</div>
			<script>
				$(document).ready(function() {
				    $('#n_patrimonio').select2();
				    $('select').select2({
				    	theme: 'bootstrap'
					    width: '100%',
  						dropdownParent: $('#modal_cadastrar_os'),
  						placeholder: 'Patrimônio'
					});
				});

			</script>
			<!--https://www.youtube.com/watch?v=hBAz9angckY vídeo
				https://select2.org/getting-started/installation site usado no video-->
</div></div></body></html>