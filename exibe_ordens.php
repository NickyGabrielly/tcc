<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Ordens de Serviço</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<!-- Select2 -->
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		<!-- Tema CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="style_tema.css">
		
		 <style>
		 	.search-mobile{
				display: none;
			}

			.serch-pc{
				display: block;
			}

			.modal-dialog-centered{
				margin: 0 auto!important;
				max-width: 75vw!important;
			}

			.efeitosnalinha{
				padding: 10px !important;
				margin-top: 5px;
				margin-bottom: 5px;
				height: auto;
				justify-content: center;
				text-align: left;
				align-content: center;
				overflow-wrap: anywhere;
			}

			#ativo{
				border-color: #0000004d;
				border-width: 1px;
				border-style: solid;
			  	border-radius: 5px !important;
			}

			#inativo{
				border-color: #0000004d;
				border-width: 1px;
				border-style: solid;
			  	border-radius: 5px !important;
			}

			#aguardando{
				background-color: var(--aguardando-bg) !important;
				border-color: #0000004d;
				border-width: 1px;
				border-style: solid;
			  	border-radius: 5px !important;
			}

			.bi-pencil-square, .bi-folder2-open {
				text-decoration: none;
				color: var(--text-color)!important;
			}

			.btn-centro{
				display: flex;
				align-content: center;
				justify-content: center;
				align-items: center;
			}

			.tirar-pl{
				padding-left: 0!important;
			}

			.bi-printer{
				color: var(--text-color);
			}

			.btn_cadastro{
				width: 100%!important;
				height: 48px!important;
			}

			.btn_voltar{
				width: 135px!important;
				height: 48px!important;
			}

			.btn-blue{
				background-color: var(--btn-blue-bg);
				color: var(--btn-blue-color);
				
				font-size: 1rem;
				font-weight: 600;
				font-weight: 400;
				text-align: center;
				white-space: nowrap;
				vertical-align: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
	
				display: inline-block;
				padding: 0.375rem 0.75rem;
				
				line-height: 1.5;
				border: 1px solid transparent;
				border-radius: 0.25rem;
				transition: color .15s
			}

			.btn-blue:hover{
				background-color: var(--btn-blue-hover-bg);
				color: var(--btn-blue-hover-color);
			}

			#hr{
				border-color: var(--hr-color);!important;
			}

            #date{
                padding-right: 0 !important;
                padding-left: 0 !important;   
            }

			.p-date{
				margin: 0;
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
		 </style>
	</head>
	<body>
	   <nav>
          <?php
          	session_start();
          	if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
				header('location: index_fofo.php');
			}
          	include("barra_menu.php");
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
									<div class="input-group-text icon">
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
									<div class="input-group-text">
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

				<br>
				<br>

				<div class="col-12 search-mobile">
					<h1 id="h1mobile">Ordens de Serviço</h1>
				</div>
			</div>

			<?php 
				require ("conecta.php");
				$conexao	=	mysqli_select_db($conecta, "scos"); {
				
				//Puxa o que vem do botão "ver" da tela principal
				$selecaoporstatus = $_POST['ver'];

				//Inicio da pesquisa
				if(isset($_REQUEST['pesquisa']) && !empty($_REQUEST['pesquisa'])) {
					$pesquisa	=	$_POST['pesquisa'];
				}
				//Fim da pesquisa
					
				if($pesquisa == "") {
					$sql = "SELECT * FROM ordem_de_servico WHERE status_os != '' ORDER by status_os asc, prioridade asc";
					$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
				}
				if ($_POST['ver'] != '') {
					$pesquisa = $selecaoporstatus;
					$sql = "SELECT * FROM ordem_de_servico WHERE status_os LIKE '%$pesquisa%' ORDER by status_os asc, prioridade asc";
					$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
				}
				
				else
					//Se removida a chave de entrada e saida, exibe todos os registros do banco ao carrregar a página
					$sql = "SELECT * FROM ordem_de_servico WHERE categoria LIKE '%$pesquisa%' or status_os LIKE '%$pesquisa%' or dh_abertura LIKE '%$pesquisa%' or prioridade LIKE '%$pesquisa%' or observacoes LIKE '%$pesquisa%' or problema LIKE '%$pesquisa%' ORDER by status_os asc, prioridade asc";
					$consulta = mysqli_query($conecta, $sql);
					$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
				}	
					
				//Exibe mensagem de quantos registros foram encontrados
				if ($cnt == "0") {
					$msg = '<h6 style="texte-align: right;">Nenhuma O.S. com o termo <b>'. $pesquisa . '</b> </h6>';
				}
					
				if ($cnt == "0" & $pesquisa != "") {
				    $msg = '<h6 style="text-align: right;">Nenhuma O.S. com o termo <b>'.$pesquisa.'</b> </h6>';
				}
					
				if ($cnt == "1" & $pesquisa == "") {
					$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> O.S. </h6>';
				}
					
				if ($cnt == "1" & $pesquisa != "") {
					$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> O.S. encontrado com o termo <b>'.$pesquisa.'</b> </h6>';
				}
					
				if ($cnt >= "2" & $pesquisa == "") {
					$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> O.S. </h6>';
				}
					
				if ($cnt >= "2" & $pesquisa != "") {
					$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> O.S. com o termo <b>'.$pesquisa.'</b> </h6>';
				}
					
			?>


			<div class="row">
				<div class="col tirar-pl">
						<!--botão para cadastrar novo equipamento-->
					<button class="btn" onclick="window.location.href='cadastra_ordem.php'"><i class="bi bi-plus-lg"></i> Nova Ordem</button>
				</div>

				<?php echo'<p class="text-right">'.$msg.'</p>';?>
						
			</div>
			<br>

			<?php
				while ($registro = mysqli_fetch_assoc($consulta)) {

					//Procurando a Ordem de Serviço na tabela de evento 
					$sqlevento = "SELECT * FROM evento_os WHERE id_os ='".$registro['id_os']."' and evento=	'cadastro da OS';";
					$busca = mysqli_query($conecta, $sqlevento);
					$eventos = mysqli_fetch_assoc($busca);

					//Procurando equipamento
					$sqlpatrimonio = "SELECT * FROM equipamento WHERE id_equipamento ='".$eventos['id_equipamento']."';";
					$consultar = mysqli_query($conecta, $sqlpatrimonio);
					$inscricao = mysqli_fetch_assoc($consultar);
					
					if ($registro["status_os"] == "Finalizada") {
						echo '<div id="inativo" class="row efeitosnalinha">';
					}

					if ($registro["status_os"] == "Aguardando peças" or $registro["status_os"] == "") {
						echo '<div id="aguardando" class="row efeitosnalinha">';
					}
						
					if ($registro["status_os"] == "Aberta") {
						echo '<div id="ativo" class="row efeitosnalinha">';
					}
					
					echo'<div class="col-sm-3 col-md-3 col-lg-3">';
						echo'<h5><span class="uppercase">'.$registro["categoria"].'</span></h5><span style="text-align: right;">'.$registro["status_os"].'</span> 
					</div>';

					if ($registro["prioridade"] == 0) {
						echo'<div class="col-sm-2 col-md-2 col-lg-2">';
					}

					if ($registro["prioridade"] == 1) {
						echo'<div class="col-sm-2 col-md-2 col-lg-2"><h6> Alta prioridade</h6>'; //</div>
					}

					if ($registro["prioridade"] == 2) {
						echo'<div class="col-sm-2 col-md-2 col-lg-2"><h6> Média prioridade</h6>';//</div>
					}

					if ($registro["prioridade"] == 3) {
						echo'<div class="col-sm-2 col-md-2 col-lg-2"><h6> Baixa prioridade</h6>';
					}

					echo ' '.$registro['dh_abertura'];
					if ($registro["prioridade"] == 0 and $registro["status_os"] == 'Finalizada') {
						echo ' '.$registro['dh_encerramento'];
					}

					echo'</div>';
					echo'<div class="col-sm-3 col-md-3 col-lg-3"><h6> Equipamento: '.$inscricao["n_patrimonio"].'</h6></div><div class="col-sm-2 col-md-2 col-lg-2"><h6>'.$registro["status_os"].'</h6>';
					
					if ($registro["prioridade"] == 0 and $registro["status_os"] == 'Finalizada') {
						echo ' '.$registro['dh_encerramento'];
					}

					echo'
					</div><div class="col-sm-1 col-md-1 col-lg-1"><a href="#" data-toggle="modal" data-target="#modal_edicao'.$registro['id_os'].'"><i class="bi bi-pencil-square"></i></a>&nbsp;<a href="imprime_os.php?raqm='.$registro['id_os'].'"><i class="bi bi-printer"></i></a></div> ';
					echo'</div>';


					/****************************** Modal de Edição ******************************/
					echo '
					<div class="modal fade bd-example-modal-xl" id="modal_edicao'.$registro['id_os'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"> Editar Ordem n° '. $registro['id_os'].'</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="container">'; 
									echo '<form name="form3" action="atualiza_os.php" method="post">
										<div class="form-group">
											<input name="id_os" type="hidden" value="'.$registro['id_os'].'">';					
											echo '<br><div class="row">
												<div class="col-sm-3">
													<label>Abertura: </label><br>
													<input name="dh_abertura" type="datetime-local" value="'.$registro['dh_abertura'].'" class="form-control" required disabled readonly>
												</div>

												<div class="col-sm-3">
													<label>Usuário:</label>';

													$sqluser 	="SELECT * FROM usuario WHERE id_usuario ='".$registro['fk_usuario_abertura']."';";
													$banco 		= mysqli_query($conecta, $sqluser);
													$user 		= mysqli_fetch_assoc($banco);

													echo'
													<input name="explicar" type="#" value="'.$user['nome'].'" class="form-control" disabled> <br>
												</div>';

											if ($_SESSION['nivel'] == 1) {
												echo'
												<div class="col-sm-3">
													<label>Número de Patrimônio: </label><br>
													<select name="n_patrimonio" value="'.$inscricao['id_equipamento'].'" class="form-control" required>';
												 
													$sqlequip	= "SELECT * FROM equipamento ORDER by n_patrimonio;";
													$query 		= mysqli_query($conecta, $sqlequip);

													while($equipamento = mysqli_fetch_assoc($query)){
														if ($equipamento['id_equipamento'] == $inscricao['id_equipamento']){
															echo '<option value="'.$equipamento['id_equipamento'].'" selected>'.$inscricao['n_patrimonio'].'</opition>';
														}
														else {
															echo '<option value="'.$equipamento['id_equipamento'].'">'.$equipamento['n_patrimonio'].'</opition>';
														}
													}

													echo'
													</select> 
												</div>';
											}

											else{
												echo'
												<div class="col-sm-3">
													<label>Número de Patrimônio: </label><br>
													<select name="n_patrimonio" value="'.$inscricao['id_equipamento'].'" class="form-control" required disabled>';
												 
														$sqlequip = "SELECT * FROM equipamento ORDER by n_patrimonio;";
														$query = mysqli_query($conecta, $sqlequip);
														while($equipamento = mysqli_fetch_assoc($query)){
															if ($equipamento['id_equipamento'] == $inscricao['id_equipamento']){
																echo '<option value="'.$equipamento['id_equipamento'].'" selected>'.$inscricao['n_patrimonio'].'</opition>';
															}
														}
													echo'
													</select> 
												</div>';
											}

											echo'
												<div class="col-sm-3">
													<label>Categoria: </label><br>';

													if ($_SESSION['nivel'] == 1) {
														echo '<select name="categoria" class="form-control" value="'.$registro['categoria'].'" required>';
													}

													else{
														echo '<select name="categoria" class="form-control" value="'.$registro['categoria'].'" readonly disabled>';
													}
														
														if ($registro['categoria'] == 'REDE') {
															echo'
																<option value="REDE" selected>REDE</option>
																<option value="HARDWARE">HARDWARE</option>
																<option value="SOFTWARE">SOFTWARE</option>
																<option value="MANUTENÇÃO">MANUTENÇÃO</option>
																<option value="LIMPEZA">LIMPEZA</option>
																<option value="VÁRIOS">VÁRIOS</option>';
														}

														if ($registro['categoria'] == 'HARDWARE') {
															echo'
																<option value="REDE">REDE</option>
																<option value="HARDWARE" selected>HARDWARE</option>
																<option value="SOFTWARE">SOFTWARE</option>
																<option value="MANUTENÇÃO">MANUTENÇÃO</option>
																<option value="LIMPEZA">LIMPEZA</option>
																<option value="VÁRIOS">VÁRIOS</option>';
														}

														if ($registro['categoria'] == 'SOFTWARE') {
															echo'
																<option value="REDE">REDE</option>
																<option value="HARDWARE">HARDWARE</option>
																<option value="SOFTWARE" selected>SOFTWARE</option>
																<option value="MANUTENÇÃO">MANUTENÇÃO</option>
																<option value="LIMPEZA">LIMPEZA</option>
																<option value="VÁRIOS">VÁRIOS</option>';
														}

														if ($registro['categoria'] == 'MANUTENÇÃO') {
															echo'
																<option value="REDE">REDE</option>
																<option value="HARDWARE">HARDWARE</option>
																<option value="SOFTWARE">SOFTWARE</option>
																<option value="MANUTENÇÃO" selected>MANUTENÇÃO</option>
																<option value="LIMPEZA">LIMPEZA</option>
																<option value="VÁRIOS">VÁRIOS</option>';
														}

														if ($registro['categoria'] == 'LIMPEZA') {
															echo'
																<option value="REDE">REDE</option>
																<option value="HARDWARE">HARDWARE</option>
																<option value="SOFTWARE">SOFTWARE</option>
																<option value="MANUTENÇÃO">MANUTENÇÃO</option>
																<option value="LIMPEZA" selected>LIMPEZA</option>
																<option value="VÁRIOS">VÁRIOS</option>';
														}

														if ($registro['categoria'] == 'VÁRIOS') {
															echo'
																<option value="REDE">REDE</option>
																<option value="HARDWARE">HARDWARE</option>
																<option value="SOFTWARE">SOFTWARE</option>
																<option value="MANUTENÇÃO">MANUTENÇÃO</option>
																<option value="LIMPEZA">LIMPEZA</option>
																<option value="VÁRIOS" selected>VÁRIOS</option>';
														}

													echo'
													</select>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-3">
													<label>Equipamento:</label><br>
													<input name="explicar" type="text" value="'.$inscricao['nome_equipamento'].'" class="form-control" disabled>
												</div>

												<div class="col-sm-3">
														<label>Onde fica:</label>
														<input name="explicar" type="text" value="'.$inscricao['local_origem'].'" class="form-control" disabled>  
												</div>

												<div class="col-sm-3">
													<label>Prioridade: </label><br>';

													if ($_SESSION['nivel'] == 1) {
														echo'<select name="prioridade" value="'.$registro['prioridade'].'" class="form-control">';
													}	
													else{
														echo'<select name="prioridade" value="'.$registro['prioridade'].'" class="form-control" readonly disabled>';
													}
														if ($registro['prioridade'] == 1) {
															echo'
															<option value="1" selected>Alta</option>
															<option value="2">Média</option>
															<option value="3">Baixa</option>';
														}

														if ($registro['prioridade'] == 2) {
															echo'
															<option value="1">Alta</option>
															<option value="2" selected>Média</option>
															<option value="3">Baixa</option>';
														}

														if ($registro['prioridade'] == 3) {
															echo'
															<option value="1">Alta</option>
															<option value="2">Média</option>
															<option value="3" selected>Baixa</option>';
														}

														if ($registro['prioridade'] == 0) {
															echo'
															<option value="1">Alta</option>
															<option value="2">Média</option>
															<option value="3">Baixa</option>';
														}				
														echo'
													</select>
												</div>

												<div class="col-sm-3">
													<label>Status: </label><br>
													<select name="status_os" value="'.$registro['status_os'].'"class="form-control" required>';

													if ($registro['status_os'] == "Aberta") {
														echo'
															<option value="Aberta" selected>Aberta</option>
															<option value="Aguardando peças">Aguardando peças</option>
															<option value="Finalizada">Finalizada</option>';
													}

													if ($registro['status_os'] == "Aguardando peças") {
														echo'
															<option value="Aberta">Aberta</option>
															<option value="Aguardando peças" selected>Aguardando peças</option>
															<option value="Finalizada">Finalizada</option>';
													}

													if ($registro['status_os'] == "Finalizada") {
														echo'
															<option value="Aberta">Aberta</option>
															<option value="Aguardando peças">Aguardando peças</option>
															<option value="Finalizada" selected>Finalizada</option>';
													}
													echo'													
													</select>
												</div>
											</div>

											<br>
											<br>	

											<div class="row">
												<div class="col-sm-4">';
													if ($_SESSION['nivel'] == 1) {
													echo'
													<label>Problema: </label><br>
													<textarea rows="3"  name="problema" class="form-control" placeholder="Liste os problemas do equipamento." required>'.$registro["problema"].'</textarea>';
													}

													else{
													echo'<label>Problema: </label><br>
													<textarea rows="3"  name="problema" class="form-control" placeholder="Liste os problemas do equipamento" required readonly disabled>'.$registro["problema"].'</textarea>';
													}
												
											echo'</div>
								
											<div class="col-sm-4">';
												if ($_SESSION['nivel'] == 1) {
														echo'
														<label>Observações: </label><br>
														<textarea rows="3"  name="observacoes" class="form-control" placeholder="Observações." required>'.$registro['observacoes'].'</textarea>';
												}

												else{
													echo'
													<label>Observações: </label><br>
													<textarea rows="3"  name="observacoes" class="form-control" placeholder="Observações" readonly disabled required>'.$registro['observacoes'].'</textarea>';
												}
											echo'
											</div>';

											echo '
											<div class="col-sm-4">
												<label>Atualização: </label><br>
												<textarea rows="3"  name="atualizacao" class="form-control" placeholder="Descreva o serviço que você realizou." required>'.$eventos['atualizacao'].'</textarea>
											</div>
										</div>';

										echo'
										<br>
										<br>

										<div class="row">
											<div class="col-sm-4">
											</div>

											<div class="col-sm-4 btn-centro">
												<button type="button" class="btn-blue botao btn_cadastro" data-toggle="modal" data-dismiss="modal" data-target="#modal_att'.$registro["id_os"].'">
													<b>Histórico de Atualizações</b>
												</button>
											</div>

											<div class="col-sm-4">
											</div>
										</div><br>

										<div class="row">
											<div class="col-sm-4">
											</div>

											<div class="col-sm-4 btn-centro">
												<br>
												<input type="submit" value="Atualizar" class="btn form-control form-control-file btn_cadastro" onclick="return validar()">
											</div>

											<div class="col-sm-4">
											</div>
										</div><br>				
									</form>	
								</div>
							</div>
						</div>
					</div>
				</div>';
				/****************************** Fim do Modal de Edição ******************************/


				/****************************** Modal de Atualização ******************************/
				echo '
				<div class="modal fade" id="modal_att'.$registro["id_os"].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Histórico de Atualizações<br>Ordem de Serviço - '.$registro['id_os'].'</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<div class="container"><br>'; 
							$sql_evento_at 	= "SELECT * FROM evento_os WHERE atualizacao != '' and evento != 'Cadastro da OS' and id_os ='".$registro['id_os']."' order by data_hora asc;";
        					$query_evento_at 	= mysqli_query($conecta, $sql_evento_at);

							while($evento_at = mysqli_fetch_array($query_evento_at)){
								$select 		= "SELECT * FROM usuario WHERE id_usuario = '".$evento_at['id_usuario']."';";
								$queryda 		= mysqli_query($conecta, $select);
								$selecqueryda	= mysqli_fetch_array($queryda);
								echo'✦ ';
								$oCara 			= $selecqueryda['nome'];
								echo '<i>'.$oCara.' '.$evento_at['data_hora'].'<br></i> '.$evento_at['atualizacao'];
								
								echo '<hr id="hr">';
							}
								echo'
								<div class="row">
									<div class="col-sm-4">
									</div>

									<div class="col-sm-4 btn-centro">
										<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal_edicao'.$registro['id_os'].'">
					                                    <button type="button" class="btn btn_voltar">Voltar</button></a>
									</div>

									<div class="col-sm-4">
									</div>
								</div>
								<br>';
								?>
								<?php
								echo '
							</div>
						</div>
					</div>
				</div>';
				/****************************** Fim do Modal de Edição ******************************/
				}
				?>
			</div>


            <?php
                date_default_timezone_set('America/Sao_Paulo');
				$date = date('Y-m-d H:i:s');
                echo '<div class="container" id="date"><p class="p-date">';
				echo $date;
                echo'</p></div>';
            ?>


			<!--****************************** Modal para Cadastrar Ordem de Serviço ******************************-->
			<div class="modal fade" id="modal_cadastrar_os" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div id="modal-header-color">
							<div class="modal-header">
								<h5 class="modal-title"><b>&nbsp&nbspNova Ordem de Serviço</b></h5>
								<!--Botão para fechar modal-->
								<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
									<span id="icon-modal" aria-hidden="true"><i class="bi bi-x"></i></span>
								</button>
							</div>
						</div>

						<div class="modal-body">
							<div class="container">
								<form name="form1" action="grava_ordem.php" method="post">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Categoria: </label>
												<br>
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
												<label>Número de Patrimônio: </label>
												<br>
												<select name="n_patrimonio" id="n_patrimonio" class="form-control">
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
												<label>Prioridade: </label>
												<br>
												<select name="prioridade" class="form-control" required>
													<option value="1">Alta</option>
													<option value="2">Média</option>
													<option value="3" selected>Baixa</option>
												</select>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Status: </label>
												<br>
												<select name="status_os" class="form-control" required>
													<option value="Aberta">Aberta</option>
													<option value="Aguardando peças">Aguardando peças</option>
													<option value="Finalizada">Finalizada</option>
												</select>
											</div>

											<div class="col-sm-6">
												<label>Foto do equipamento: </label>
												<br>
												<input type="file" name="arquivo" class="form-control-file" id="arquivo" accept=".jpg, .jpeg, .png, .gif">
											</div>
										</div>
									</div>

									<br>
									<hr id="hr">
									<br>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Problema: </label>
												<br>
												<textarea rows="6" name="problema" class="form-control" placeholder="Liste os problemas do equipamento" required></textarea>
												<br>
											</div>

											<div class="col-sm-6">
												<label>Observações: </label>
												<br>
												<textarea rows="6" name="observacoes" class="form-control" placeholder="Observações" required></textarea>
												<br>
											</div>
										</div>
									</div>
									<div class="botoes">
										<div>
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
			<!--****************************** Fim do Modal para Cadastrar Ordem de Serviço ******************************-->
					

			</div>
		</div>
	</body>
</html>