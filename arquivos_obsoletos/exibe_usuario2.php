<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Usuários Cadastrados</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		
	</head>
	<body>
		<!--<nav style="float: left;">
          <object height=100% width=100% data="barra_menu.php"></object>-->
        <nav>
          <?php
          	include("barra_menu.php");
          ?>
     	</nav>
     	
		<br>
		<div class="container">
		<div class="row">
			<div class="col">
				<h1>Usuários Cadastrados</h1>
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
							Informe acima parte do nome, email ou cpf para localizar.
						</small>
					</div>
				</form>
			</div>
		</div>
		<br><hr><br>


		<table border="0" class="table table-hover">
				<thead class="p-3 mb-2 text-white" style="background-color: black;">
					<tr>
						<th width="50px"  class="text-white">Ativo:</th>
						<th width="450px" class="text-white">Nome:</th>
						<th width="300px" class="text-white">E-mail:</th>
						<th width="250px" class="text-white">CPF:</th>
						<th width="50px"  class="text-white">Ações:</th>
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
							$sql = "SELECT * FROM usuario ORDER by nome";
							$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
						}
						//mb_send_mail(to, subject, message) coisa estranha q eu vou pesquisar sobre depois
						else
						//Se removida a chave de entrada e saida exibe todos os registros do banco ao carrregar a pagina
						$sql = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisa%' OR email LIKE '%$pesquisa%' OR cpf LIKE '%$pesquisa%' OR login LIKE '%$pesquisa%' ORDER by nome";
						$consulta = mysqli_query($conecta, $sql);
						$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
						
						
						//Exibe mensagem de quantos registros foram encontrados
						if ($cnt == "0") {
							$msg = '<h6 style="texte-align: right;">Nenhum registro foi encontrado em nossa base de dados, com o termo <b>'. $pesquisa . '</b>.</h6>';
						}
						
						if ($cnt == "0" & $pesquisa != "") {
						    $msg = '<h6 style="text-align: right;">Nenhum registro foi encontrado em nossa base de dados com o termo <b>'.$pesquisa.'</b>.</h6>';
						}
						
						if ($cnt == "1" & $pesquisa == "") {
							$msg = '<h6 style="text-align: right;">Sua pesquisa resultou em <b>'.$cnt.'</b> resgistro encontrado.</h6>';
						}
						
						if ($cnt == "1" & $pesquisa != "") {
							$msg = '<h6 style="text-align: right;">Sua pesquisa resultou em <b>'.$cnt.'</b> resgistro encontrado com o termo <b>'.$pesquisa.'</b>.</h6>';
						}
						
						if ($cnt >= "2" & $pesquisa == "") {
							$msg = '<h6 style="text-align: right;">Sua pesquisa resultou em <b>'.$cnt.'</b> resgistros encontrados.</h6>';
						}
						
						if ($cnt >= "2" & $pesquisa != "") {
							$msg = '<h6 style="text-align: right;">Sua pesquisa resultou em <b>'.$cnt.'</b> resgistros encontrados com o termo <b>'.$pesquisa.'</b>.</h6>';
						}

						?>
					
						<div class="row">
						<div class="col">
							<!--botão para cadastrar novo Usuário-->
							<button class="btn" onclick="window.location.href='cadastra_usuario.php'">Novo Usuário</button>
							<br><br>
						</div>
					
					<?php	


						//Exibe mensagem confore os IFs acimas
						echo '<p class = "text-right">'.$msg.'</p>';
						
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
									echo '<td><font size="2">'.$registro["nome"].'</font></td>';
									echo '<td><font size="2">'.$registro["email"].'</font></td>';
									echo '<td><font size="2">'.$registro["cpf"].'</font></td>';
									echo'
									<td>
										<center>
										<!-- Icone pra edição do usuario(a)-->
											
											
											<a href="edita_usuario.php?Id do Usuário:'.$registro["id_usuario"].'">


											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#584EBA" class="bi bi-pencil-square" viewBox="0 0 16 16">

												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
											</svg></a>

											<!-- Icone pra visualização de dados do usuario -->

											<a href="#" data-toggle="modal" data-target="#modal_informacao'.$registro['id_usuario'].'">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#584EBA" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
												<path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
												<path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
											</svg></a>
										</center>';

										//Iniciando o modal para EDIÇÃO dos dados do aluno
										echo '
										<div class="modal fade" id="modal_edicao'.$registro['id_usuario'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="container">
														Edição dos Dados do Aluno	
													</div>
												</div>
											</div>
										</div>';
										//Finalizando o modal para EDIÇÃO dos dados do aluno
										
										//Iniciando o modal de INFORMAÇÕES dos dados do usuario
										echo '
										<div class="modal fade" id="modal_informacao'.$registro['id_usuario'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
												 		<h4 class="modal-title"><b>&nbsp&nbspUsuário: </b>'.$registro["nome"].'</h4>
														<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
                                                    <div class="container">

														<div class="modal-body">';
															echo '
															<h5><b>Dados do usuário: </b></h5><br>
															<b>E-mail: </b>'.$registro["email"].'<br>
															<b>CPF: </b>'.$registro["cpf"].'<br>
															<b>Nível: </b>'.$registro["nivel"].'<br>
															<b>Login: </b>'.$registro["login"].'<br><br>';
															
															
															
															if($registro["ativo"] == 1)
															{
																echo '
																<div class="alert alert-success" role="alert">
																	<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
																	  <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
																	</svg>&nbsp;
																	O(A) usuario(a) <b>está ativo(a)
																</div>';
															}
															else
															{
																echo ' 
																<div class="alert alert-danger" role="alert">
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
																	  <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
																	</svg>&nbsp;
																	O(A) usuario(a) <b>não está ativo(a)
																</div>';
															}
															echo ' 
															
														</div>
													</div>
												</div>
											</div>
                                        </div>';
										//Finalizando o modal de INFORMAÇÕES dos dados do usuário
                                ?>
			<?php
			echo '
			</td>
			</tr>
			</tbody>';
			}
			echo '</table>';
			}
			?>

	</body>
</html>
