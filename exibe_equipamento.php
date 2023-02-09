<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Equipamentos</title>
		<link rel="stylesheet" href="style_tema.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		
		<!-- Tema CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	</head>
	
	<style>
		hr{
			border-color: var(--text-color);
		}

	    .icon-pesquisa{
	    	background-color: #FFF!important;
	    }

	    .msg{
	    	text-align: right !important;
	    }
  
	    .search-mobile{
			display: none;
		}

		.serch-pc{
			display: block;
		}

		.h6-pontinhos{
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}

		.h6-break{
			/* Faz com que o texto não transborde da div e pule linhas. Arrumar o tamanho com width se for necessário */
			white-space: break-spaces;
			overflow-wrap: anywhere;
		}

		.efeitosnalinha{
			padding: 10px;
			margin-top: 6px;
			margin-bottom: 6px;
			height: auto;
			justify-content: center;
			text-align: left;
			align-content: center;
            padding-top: 15px;
            padding-bottom: 15px;

            white-space: break-spaces;
            overflow-wrap: anywhere;
		}

		.historico_os{
			padding: 5px;
		}

		.historico_os a:hover{
			color: var(--text-color);
			text-decoration: none;
			display: block;
		}

		.historico_os a{
			color: var(--text-color);
			text-decoration: none;
			display: block;
		}

		.ativoh{
		  	border-radius: 5px !important;
		  	border-color: black;
			border-width: 1px;
			border-style: solid;
		  	background-color: var(--ativo-bg) !important;
		  	padding: 16px;
			margin-bottom: 20px;
		}

		.inativoh{
		  	border-radius: 5px !important;
		  	border-color: black;
			border-width: 1px;
			border-style: solid;
		  	background-color: var(--inativo-bg) !important;
		  	padding: 16px;
			margin-bottom: 20px;
		}

		.aguardandoh{
			background-color: var(--aguardando-bg) !important;
			border-color: black;
			border-width: 1px;
			border-style: solid;
		  	border-radius: 5px !important;
		  	padding: 16px;
		  	margin-bottom: 20px;
		}

		#ativo{
			border-radius: 5px !important;
		}

		#inativo{
			border-radius: 5px !important;
			margin-bottom: 5px;
		}

		.bi-pencil-square, .bi-folder2-open {
			text-decoration: none;
			color: var(--text-color)!important;
		}

		.h5-br{
			padding-bottom: 13px;
		}

		.tirar-pl{
			padding-left: 0!important;
		}

		hr, .modal-header{
			border-color: var(--text-color)!important;
		}

        h6{
            margin-bottom: 0 !important;
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
					<h1>Equipamentos</h1>
				</div>

				<div class="col-6 search-pc">
					<form method="post" class="formPesquisa" action="">
						<div class="search">
							<div class="input-group">
								<input class="form-control" autocomplete="off" type="search" name="pesquisa" aria-label="Search" placeholder="Pesquisa">
								<div class="input-group-append">
									<div class="input-group-text icon-pesquisa">
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
								<input class="form-control" autocomplete="off" type="search" name="pesquisa" aria-label="Search" placeholder="Pesquisa">
								<div class="input-group-append">
									<div class="input-group-text icon-pesquisa">
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
					<h1 id="h1mobile">Equipamentos</h1>
				</div>
			</div>


			<?php 
				require ("conecta.php");
				$conexao	=	mysqli_select_db($conecta, "scos"); {
					
				//Inicio da pesquisa
				if(isset($_REQUEST['pesquisa']) && !empty($_REQUEST['pesquisa'])) {
					$pesquisa	=	$_POST['pesquisa'];
				}
				//Fim da pesquisa
					
				if($pesquisa == "") {
					$sql = "SELECT * FROM equipamento ORDER by ativo desc, nome_equipamento, n_patrimonio";
					$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
				}
					
				else
				//Se removida a chave de entrada e saida, exibe todos os registros do banco ao carrregar a página
					$sql = "SELECT * FROM equipamento WHERE n_patrimonio LIKE '%$pesquisa%' or nome_equipamento LIKE '%$pesquisa%' or especificacao LIKE '%$pesquisa%' or local_origem LIKE '%$pesquisa%' ORDER by  ativo desc, n_patrimonio";
					$consulta = mysqli_query($conecta, $sql);
					$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
				}	
					
				//Exibe mensagem de quantos registros foram encontrados
				if ($cnt == "0") {
					$msg = '<h6>Nenhum equipamento com o termo <b>'. $pesquisa . '</b></h6>';
				}
					
				if ($cnt == "0" & $pesquisa != "") {
				    $msg = '<h6>Nenhum equipamento com o termo <b>'.$pesquisa.'</b></h6>';
				}
					
				if ($cnt == "1" & $pesquisa == "") {
					$msg = '<h6><b>'.$cnt.'</b> equipamento</h6>';
				}
					
				if ($cnt == "1" & $pesquisa != "") {
					$msg = '<h6><b>'.$cnt.'</b> equipamento encontrado com o termo <b>'.$pesquisa.'</b></h6>';
				}
					
				if ($cnt >= "2" & $pesquisa == "") {
					$msg = '<h6><b>'.$cnt.'</b> equipamentos</h6>';
				}
					
				if ($cnt >= "2" & $pesquisa != "") {
					$msg = '<h6><b>'.$cnt.'</b> equipamentos com o termo <b>'.$pesquisa.'</b></h6>';
				}
			?>

			<div class="row">
				<div class="col tirar-pl">
					<!--botão para cadastrar novo equipamento-->
					<button class="btn" onclick="window.location.href='cadastra_equipamento.php'"><i class="bi bi-plus-lg"></i> Novo Equipamento</button>
				</div>
			<?php					
				//Exibe mensagem confore os IFs acimas
				echo '<p class="msg text-right">'.$msg.'</p>';	
			?>			
			</div>

			<br>
			
			<?php
				while($registro = mysqli_fetch_assoc($consulta)) {
					if ($registro["ativo"] == 1) {
						echo '<div id="ativo" class="row efeitosnalinha">';
					}
						
					else{
						echo '<div id="inativo" class="row efeitosnalinha">';
					}

					echo '<div class="col-sm-3"><h6 class="h6-pontinhos"><a href="#" data-toggle="modal" data-target="#modal_edicao'.$registro['id_equipamento'].'"><i class="bi bi-pencil-square"></i></a>&nbsp;<a href="#" data-toggle="modal" data-target="#modal_visualizar'.$registro['id_equipamento'].'"><i class="bi bi-folder2-open"></i></a>&nbsp;Patrimônio: '.$registro["n_patrimonio"].'</h6>';
					echo '</div>';
					echo '<div class="col-sm-2"><h6 class="text-capitalize h6-pontinhos">'.$registro["nome_equipamento"].'</h6></div>';
					echo '<div class="col-sm-4"><h6 class="h6-pontinhos">Especificação: '.$registro["especificacao"].'</h6></div>';
					echo '<div class="col-sm-3"><h6 class="h6-pontinhos">Onde: '.$registro["local_origem"].'</h6></div>';
					echo '</div>';
					

					/****************************** Modal para edição dos dados do equipamento ******************************/
					echo '
					<div class="modal fade" id="modal_edicao'.$registro["id_equipamento"].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Editar '. $registro['nome_equipamento'].': '.$registro["n_patrimonio"].'</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="container">'; 
			?>
									<form name="form2" action="atualiza_equipamento.php" method="post">
										<?php 
										if ($_SESSION['nivel'] == 1) {
										?>
											<div class="form-group">
												<input name="id_equipamento" type="hidden" value="<?php echo $registro['id_equipamento']; ?>">

												<br>	

												<div class="row">
													<div class="col-sm-12">
														<label>Número de Patrimônio: </label><br>
														<input name="n_patrimonio" type="text" class="form-control" value="<?php echo $registro['n_patrimonio']; ?>" placeholder="Número de patrimônio do equipamento" ><br>
													</div>

													<div class="col-sm-12">
														<label>Nome do Equipamento: </label><br>
														<input name="nome_equipamento" type="text" class="form-control" value="<?php echo $registro['nome_equipamento']; ?>" placeholder="Ex: monitor, teclado, mouse...">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-sm-12 col-md-6">
														<label>Especificações: </label><br>
														<textarea rows="5"  name="especificacao" class="form-control"  placeholder="Tipo, modelo, cor..."><?php echo $registro['especificacao']; ?></textarea><br>
													</div>

													<div class="col-sm-12 col-md-6">
														<label>Onde está/estava instalado: </label><br>
														<textarea rows="5"  name="local_origem" class="form-control" value="<?php echo $registro['local_origem']; ?>" placeholder="Local de origem."><?php echo $registro['local_origem']; ?></textarea>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-sm-12 col-md-7">
														<label>Ativo? </label><br>
														<select name="ativo" class="form-control" value="<?php echo $registro['ativo']; ?>">
															<option value="1" <?php if($registro["ativo"] == '1') {echo 'selected'; }?>>Sim</option>
															<option value="0" <?php if($registro["ativo"] == '0') {echo 'selected'; }?>>Não</option>
														</select>
													</div>

													<div class="col-sm-12 col-md-5">
														<br>
														<input style="float: right;" type="submit" value="Atualizar" class="btn" class="form-control" onclick="return validar()">
													</div>
												</div>				
											</div>
										<?php }

										else { ?>
											<div class="form-group">
												<input name="id_equipamento" type="hidden" value="<?php echo $registro['id_equipamento']; ?>">

												<br>

												<div class="row">
													<div class="col-sm-12">
														<label>Número de Patrimônio: </label><br>
														<input name="n_patrimonio" type="text" class="form-control" value="<?php echo $registro['n_patrimonio']; ?>" placeholder="Ex: monitor, teclado, mouse..." disabled required><br>
													</div>

													<div class="col-sm-12">
														<label>Nome do Equipamento: </label><br>
														<input name="nome_equipamento" type="text" class="form-control" value="<?php echo $registro['nome_equipamento']; ?>" placeholder="Ex: monitor, caixa de som, etc" disabled required>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-sm-12 col-md-6">
														<label>Especificações: </label><br>
														<textarea rows="5"  name="especificacao" class="form-control"  placeholder="Tipo, modelo... essas coisas" disabled required><?php echo $registro['especificacao']; ?></textarea><br>
													</div>

													<div class="col-sm-12 col-md-6">
														<label>Onde está/estava instalado: </label><br>
														<textarea rows="5"  name="local_origem" class="form-control" value="<?php echo $registro['local_origem']; ?>" placeholder="Local de origem."><?php echo $registro['local_origem']; ?></textarea>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
													<div class="col-sm-12 col-md-7">
														<label>Ativo? </label>

														<br>

														<?php if ($registro['ativo'] == 0) {?>
															<select name="ativo" class="form-control" value="<?php echo $registro['ativo']; ?> disbled readonly">
														<?php } 
														else {
															echo '<select name="ativo" class="form-control" value="'.$registro['ativo'].'">';
														}
														?>
														
															<option value="1" <?php if($registro["ativo"] == '1') {echo 'selected'; }?>>Sim</option>
															<option value="0" <?php if($registro["ativo"] == '0') {echo 'selected'; }?>>Não</option>
														</select>
													</div>

													<div class="col-sm-12 col-md-5">
														<br>
														<input style="float: right;" type="submit" value="Atualizar" class="btn" class="form-control" onclick="return validar()">
													</div>
												</div>				
											</div>	
										<?php }?>
									</form>
				<?php
							echo '
								</div>
							</div>
						</div>
					</div>';
					/****************************** Fim do Modal de Edição ******************************/


					/****************************** Modal para Visualizar Equipamentos ******************************/
					echo'
					<div class="modal fade" id="modal_visualizar'.$registro["id_equipamento"].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title text-capitalize">
									Visualizar Dados do Equipamento</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="container">';
									echo'
									<div>
										<br>
										<h5> Equipamento: </h5>
										<h6 class="h6-break">'.$registro["nome_equipamento"].'</h6>

										<br>
										<h5> Número de Patrimônio: </h5>
										<h6 class="h6-break">'.$registro["n_patrimonio"].'</h6>

										<br>
										<h5> Especificação: </h5>
										<h6 class="h6-break">'.$registro["especificacao"].'</h6>

										<br>
										<h5> Onde: </h5>
										<h6 class="h6-break">'.$registro["local_origem"].'</h6>

										<hr>

										<div class="historico_os">
											<div class="h5-br">
												<h5><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
													<path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
													<path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
												</svg>Histórico de Ordens de Serviço</h5>
											</div>';


											$sql_hist 	 =		"SELECT * FROM evento_os WHERE id_equipamento = '".$registro['id_equipamento']."' AND evento = 'Cadastro da OS' ORDER BY data_hora desc;";
											$busca_hist  =		mysqli_query($conecta, $sql_hist);


											while ($hist = mysqli_fetch_array($busca_hist)) {
												
												$sql_os_hist 		= "SELECT * FROM ordem_de_servico WHERE id_os = '".$hist['id_os']."' ORDER BY status_os desc;";
												$busca_os_hist 		= mysqli_query($conecta, $sql_os_hist);
												$os_hist 			=	mysqli_fetch_array($busca_os_hist);	
												$sql_user_hist 		=	"SELECT * FROM usuario WHERE id_usuario = '".$os_hist['fk_usuario_abertura']."';";
												$busca_user_hist 	=	mysqli_query($conecta, $sql_user_hist);
												$user_hist 			=	mysqli_fetch_array($busca_user_hist);
												$user 				=	$user_hist['nome'];
												
												echo '
												<a href= "imprime_os_equip.php?raqm='.$hist['id_os'].'">';
													if ($os_hist['status_os'] == "Aguardando peças") {
														echo '<div class="aguardandoh">';
													}

													if ($os_hist['status_os'] == "Aberta") {
														echo '<div class="ativoh">';
													}

													if ($os_hist['status_os'] == "Finalizada") {
														echo '<div class="inativoh">';
													}

													if ($os_hist['status_os'] != "Finalizada" and $os_hist['status_os'] != "Aberta" and $os_hist['status_os'] != "Aguardando peças") {
														echo '<div class="row">';
													}
														echo 'Responsável: '.$user.'<br>';
														echo '<div>';
															echo 'O.S n° '.$hist['id_os'].' '.$os_hist['categoria'].'<br>'.$os_hist['status_os'].'
														</div>';
														
														echo '<div>';
															echo 'Abertura: '.$hist['data_hora'];
															if ($os_hist['status_os'] == 'Finalizada') {
																echo ' Encerr.: '.$os_hist['dh_encerramento'];
															}
														echo '</div>
													</div>
												</a>';												
											}									
										echo '
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>'; 
				/****************************** Fim do Modal de Visualização ******************************/
				}							
			?>			
		</div>
	</body>
</html>
