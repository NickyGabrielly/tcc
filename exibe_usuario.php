<?php
    include('verifica.php');
    
    if ($_SESSION['login'] != "" and $_SESSION['nome'] != "" and $_SESSION['nivel'] != 1) {
		header('location: principal.php');
	}
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Usuários</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">

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

			img{
                /* Faz com que as imagens fiquem do mesmo tamanho sem distorcer */
                object-fit: cover;
            }

            .botoesembaixo{ 
           		display: block;
            	position: absolute;
          		bottom: -8px;
          		width: 100%;
          		margin: 0 auto ;
          		margin-left: -1em;
            }

          	.ellink{
          		position: relative;
          		display: inline-block;
				padding: 5px;
				background: var(--bg-color);/**/
				color: var(--text-color);
				border-radius: 7px;
				text-decoration: none;
				font-weight: 500;
				box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
				width: 115px;
			}

			.ellink:hover{
				background: #c1c1c1;
				color: #000;
				text-decoration: none;
			}

			.fundo_usuario{
				text-align: center;
				border: var(--bg-color) 15px solid; 
				border-radius: 35px; 
				background-color: rgba(255, 165, 158, 0.4);
			}

			.modal-body{
				display: flex;
				flex-direction: column;
				align-content: center;
				align-items: center;
				justify-content: center;
			}

			/*Mensagem de ativo e inativo*/
			.alert-ativo, .alert-inativo{
				width: 290px;
				display: flex;
				align-items: center;
			    justify-content: center;
			    align-content: center;
			    color: #FFFFFF;
			}

			.alert{
				margin-bottom:0 !important;
				padding: 6px!important;
				margin-bottom: 15px!important;
			}

			.alert-ativo{
				background-color: var(--ativo-alert-bg);
			}

			.alert-inativo{
				background-color: var(--inativo-alert-bg);
			}

			#ativo, #inativo{
				height: 40vh;
			}

			.img-modal{
				width: 290px;
				height: 250px;
				cursor: auto;
				border-radius: 0.3rem;
				font-size: 18px;
				margin-bottom: 15px!important;
			}

			.grande{
				padding-top: 15px;
			}

			#align-left{
				width: 290px;
				font-size: 20px;
				/* Faz com que o texto não transborde da div e pule linhas. Arrumar o tamanho com width se for necessário */
                white-space: break-spaces;
                overflow-wrap: anywhere;
			}

			.tirar-pl{
				margin-left: 20px !important;
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

				h3 {
				    font-size: 20px !important;
				}
			}

			@media (max-width: 768px){
				#ativo, #inativo {
					max-width: 55vw;
				}

				h3 {
				    font-size: 20px !important;
				}
			}

			@media (max-width: 600px){
				#ativo, #inativo {
					max-width: 69vw;
				}

				h3 {
				    font-size: 20px !important;
				}
			}

			@media (max-width: 480px){
				#ativo, #inativo {
					    max-width: 100vw;
				}

				h3 {
				    font-size: 20px !important;
				}
			}

			@media (max-width: 336px){
				.ellink {
					font-size: 15px;
					width: 99px;
				}
			}

			@media (max-height: 880px){
				#ativo, #inativo {
				    height: 40vh;
				}
			}

			@media (max-height: 845px){
				#ativo, #inativo {
				    height: 45vh;
				}
			}

			@media (max-height: 780px){
				#ativo, #inativo {
				    height: 48vh;
				}
			}

			@media (max-height: 710px){
				#ativo, #inativo {
				    height: 49vh;
				}
			}

			@media (max-height: 677px){
				#ativo, #inativo {
				    height: 60vh;
				}
			}

			@media (max-height: 590px){
				#ativo, #inativo {
				    height: 65vh;
				}
			}

			@media (max-height: 535px){
				#ativo, #inativo {
				    height: 70vh;
				}
			}

			@media (max-height: 508px){
				#ativo, #inativo {
				    height: 75vh;
				}
			}

			@media (max-height: 470px){
				#ativo, #inativo {
				    height: 80vh;
				}
			}

			@media (max-height: 440px){
				#ativo, #inativo {
				    height: 90vh;
				}
			}

			@media (max-height: 380px){
				#ativo, #inativo {
				    height: 100vh;
				}
			}
		</style>
		<script>
			function formatar(mascara, documento) {
				var i 		= documento.value.length;
				var saida 	= mascara.substring(0, 1);
				var texto 	= mascara.substring(i)
				
				if(texto.substring(0, 1) != saida)
				{
					documento.value += texto.substring(0, 1);
				}
			}

			function validar()
			{
				var nome 			= form3.nome.value;
				var email 			= form3.email.value;
				var cpf 			= form3.cpf.value;
				var login 			= form3.login.value;
				var nivel			= form3.nivel.value;
				var senha 			= form3.senha.value;
				var confirmasenha 	= form3.confirmasenha.value;
				var ativo			= form3.ativo.value;

				if (nome == "") {
					alert("Preencha o campo com o nome!");
					form3.nome.focus();
					return false;
				}

				if (form3.nome.value.length < 8){
					alert("Preencha o campo com o nome completo!");
					form3.nome.focus();
					return false;
				}

				if (email == "") {
					alert("Preencha o campo com o e-mail!");
					form3.email.focus();
					return false;
				}

				if (cpf == "") {
					alert("Digite o CPF!");
					form3.cpf.focus();
					return false;
				}

				if (login == "") {
					alert("Digite o nome de usuário!");
					form3.login.focus();
					return false;
				}

				if (form3.login.value.length < 3) {
					alert("O Login deve ter pelo menos 3 caracteres!");
					form3.login.focus();
					return false;
				}

				if (senha == "") {
					alert("Digite uma senha");
					form3.senha.focus();
					return false;
				}

				if (confirmasenha != senha) {
					alert("As senhas digitadas não conferem \nEstamos apagando ambas as senhas, por favor digite novamente.");
					form3.senha.value = "";
					form3.confirmasenha.value = "";
					form3.senha.focus();
					return false;
				}
			}
		</script>
	</head>

	<body id="bodyteimoso">
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
						<h1 class="h1-usuario">Usuários</h1>
				</div>

				<div class="col-6 search-pc">
					<form method="post" class="formPesquisa" action="">
						<div class="search">
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
					<h1 id="h1mobile">Usuários</h1>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<!--botão para cadastrar novo Usuário-->
					<button class="btn tirar-pl" onclick="window.location.href='cadastra_usuario.php'"><i class="bi bi-plus-lg"></i> Novo Usuário</button>
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
							$sql = "SELECT * FROM usuario ORDER by ativo DESC, login asc";
							$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
						}

						else
						//Se removida a chave de entrada e saida exibe todos os registros do banco ao carrregar a pagina
						$sql = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisa%' OR email LIKE '%$pesquisa%' OR cpf LIKE '%$pesquisa%' OR login LIKE '%$pesquisa%' ORDER by ativo DESC, nome asc";
						$consulta = mysqli_query($conecta, $sql);
						$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
						
						//Exibe mensagem de quantos registros foram encontrados
						if ($cnt == "0") {
							$msg = '<h6 style="texte-align: right;">Nenhum usuário em nossa base de dados, com o termo <b>'. $pesquisa . '</b></h6>';
						}
						
						if ($cnt == "0" & $pesquisa != "") {
						    $msg = '<h6 style="text-align: right;">Nenhum usuário em nossa base de dados com o termo <b>'.$pesquisa.'</b></h6>';
						}
						
						if ($cnt == "1" & $pesquisa == "") {
							$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> usuário</h6>';
						}
						
						if ($cnt == "1" & $pesquisa != "") {
							$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> usuário com o termo <b>'.$pesquisa.'</b></h6>';
						}
						
						if ($cnt >= "2" & $pesquisa == "") {
							$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> usuários</h6>';
						}
						
						if ($cnt >= "2" & $pesquisa != "") {
							$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> usuários com o termo <b>'.$pesquisa.'</b></h6>';
						}		
						
				//Exibe mensagem confore os IFs acimas
				echo '<p class = " msg text-right">'.$msg.'</p>
			</div>
			<br>';


						echo '
						<div style="display: flex; flex-direction: row; flex-wrap: wrap; overflow-wrap: break-word; justify-content: center;">';
							while($registro = mysqli_fetch_assoc($consulta)) {
								//Ativo ou não
								if ($registro["ativo"] == 1) {
									echo '<div id="ativo" class="col-sm-12 col-md-6 col-lg-4 fundo_usuario">';
								}
								
								else{
									echo '<div id="inativo" class="col-sm-12 col-md-6 col-lg-4 fundo_usuario">';				
								}

									//ADM ou Técnico						
									if($registro["nivel"] == 0){
										echo '<h3 class="grande">Técnico</h3>';
									}

									else {
										echo '<h3 class="grande">Administrador</h3>';
									}
									
									//Ínicio da foto
									if($registro["foto"] == "")
									{
									   echo '
										<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$registro['id_usuario'].'">'; 
									   echo '<img src="imgs/semfoto.jpg" width="100" height="100" alt="Sem foto" class="rounded-circle"></a>';
									}

									else {
										echo '
										<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$registro['id_usuario'].'">'; 

										echo '<img src="imgs/'.$registro["foto"].'" width="100" height="100" alt="Foto do Usuário" class="rounded-circle"></a>';
									}
									//Fim da foto

									echo '<h2><font size="3"><b>Login: </b>'.$registro["login"].'</font></h2>';
									echo '<h4><font size="2"><b>Nome: </b>'.$registro["nome"].'</font></h4>';

									echo '
									<div class="botoesembaixo">';
										echo '
										<a href="#"  data-toggle="modal" data-target="#modal_edicao'.$registro['id_usuario'].'" class="ellink">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
											</svg>&nbspeditar</a>&nbsp; 
										<a href="#" data-toggle="modal" data-target="#modal_visualizacao'.$registro['id_usuario'].'" class="ellink">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
													<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
											</svg>&nbspvisualizar
										</a>
										<br>
										<br>';
									echo'</div>';
								echo'</div>';


			            		/****************************** Modal de Upload de Foto de Cadastro ******************************/
			                    echo '
			                    <div class="modal fade" id="upload'.$registro['id_usuario'].'" tabindex="-1" role="dialog" aria-labelledby="janelamodallabel" aria-hidden="true">
			                        <div class="modal-dialog" role="document">
			                            <div class="modal-content">
			                                <div class="modal-header">
			                                    <h5 class="modal-title text-center id="janelamodallabel">'.$registro['nome'].'</h5>
			                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
			                                        <span class="close" aria-hidden="true">&times;</span>
			                                   	</button>
			                                </div>

			                                <div class="modal-body">
			                                    <center>
			                                        <h6>Imagem Atual:</h6>';

			                                        if($registro["foto"] == ""){
			                                            echo 
			                                                '<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$registro['id_usuario'].'">
			                                                <img src="imgs/semfoto.jpg" width="200" height="200" alt="Sem foto" align = "center" ></a>';
			                                         }

			                                         else{
			                                             echo 
			                                                '<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$registro['id_usuario'].'">
			                                                    <img src="imgs/'.$registro["foto"].'" width="200" height="200" alt="Foto do Aluno (a)" align = "center" >
			                                                </a>';                     
			                                            };
			                                        echo'<hr>

			                                        <h6>Carregar nova foto:</h6>
			                                    </center>

			                                    <form name="upload" action="grava_foto.php" method="post" enctype="multipart/form-data">
			                                        <input type="hidden" name="id_usuario" value="'.$registro['id_usuario'].'">
			                                             
			                                        Localizar:<br>
			                                        <input type="file" name="arquivo" id="arquivo" accept=".jpg, .jpeg, .png, .gif">

			                                        <br>
			                                        <br>
			                                </div>

			                                <div class="modal-footer">
			                                        <input type="submit" class="btn btn-success" value="Enviar">

			                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			                                    </form> 
			                                </div>
			                            </div>
			                        </div>
			                    </div>';
			            		/****************************** Fim do Modal de Upload de Foto de Cadastro ******************************/


				               	/****************************** Modal de edição ******************************/
				                echo '
								<div class="modal fade" id="modal_edicao'.$registro["id_usuario"].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Editar '.$registro["nome"].'</h5>

												<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>

											<div class="modal-body">';
												echo '
												<form name="form3" action="atualiza_usuario.php" method="post">
													<div class="form-group">
													    <input name="id_usuario" type="hidden" value="'.$registro["id_usuario"].'">
														<label>Nome: </label>

														<br>

														<input name="nome" type="text" class="form-control" placeholder="Nome Completo" value="'.$registro["nome"].'"required>
														
														<br>

														<label>Email: </label><br>
														<input name="email" type="email" class="form-control" placeholder="nome@email.com" value="'.$registro["email"].'"required>		

														<br>

														<label>CPF: </label><br>
														<input name="cpf" type="text" class="form-control" placeholder="000.000.000-00" maxlength="14"'; echo' OnKeyPress="formatar'; echo "('###.###.###-##', this)"; echo '" value="'.$registro["cpf"].'"required>';

														echo'
														<br>

														<label>Login: </label><br>
														<input name="login" type="text" class="form-control" placeholder="Login" value="'.$registro["login"].'" required>

														<br>

														<div class="row">
															<div class="col-sm-6">
																<label> Nova senha: </label>

																<br>

																<input name="senha" type="password" class="form-control" placeholder="No mínimo 8 caracteres">
															</div>

															<div class="col-sm-6">
																<label>Confirme a nova senha: </label>

																<br>

																<input name="confirmasenha" type="password" class="form-control" placeholder="Redigite a senha">
															</div>
														</div>

														<br>	

														<div class="row">
															<div class="col-sm-6">
																<label>Nível: </label><br> 
																<select name="nivel" class="form-control" value="'.$registro["nivel"].'" required>';?>
																	<option value="1" <?php if($registro["nivel"] == '1') {echo 'selected'; } ?>>Administrador</option>
																	<option value="0" <?php if($registro["nivel"] == '0') {echo 'selected'; } ?>>Técnico</option>
																</select>
															</div>
															
															<?php echo '
															<div class="col-sm-6">
																<label>Ativo? </label><br>
																<select name="ativo" class="form-control" value="'.$registro["ativo"].'"required>';?>
																	<option value="1" <?php if($registro["ativo"] == '1') {echo 'selected'; } ?>>Sim</option>
																	<option value="0" <?php if($registro["ativo"] == '0') {echo 'selected'; } ?>>Não</option>
																</select>
															</div>

															<br>
														</div>

														<?php 
														echo'
														<div>
															<br>

															<input type="submit" value="Atualizar" class="btn form-control form-control-file" onclick="return validar()">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>';
				                /****************************** Fim do Modal de Edição ******************************/


				                /****************************** Modal de Visualizar os Dados ******************************/
								echo '
								<div class="modal fade" id="modal_visualizacao'.$registro['id_usuario'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">&nbsp;Visualizar dados do usuário '.$registro["nome"].'</h5>

												<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>

											<div class="container align-visu">
												<div class="modal-body">';
													//Ativo ou não 			
													if($registro["ativo"] == 1){
														echo 
														'<div class="alert alert-ativo" role="alert">
															Pode acessar o sistema.
														</div>';
													}

													else{
														echo 
														'<div class="alert alert-inativo" role="alert">
															Não pode acessar o sistema.
														</div>';
													}

			                                        if($registro["foto"] == ""){
			                                            echo 
			                                            '<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$registro['id_usuario'].'">
			                                            	<img class="img-modal" src="imgs/semfoto.jpg" alt="tchê Sem foto" align = "center">
			                                            </a>';
			                                        }

			                                        else{
			                                            echo 
			                                            '<a href="#" '.$registro['id_usuario'].'">
			                                                <img class="img-modal" src="imgs/'.$registro["foto"].'" alt="Foto do tchê" align = "center">
			                                            </a>';                     
			                                        }

			                                        echo'
			                                        <div id="align-left">';
			                                    		echo'<p><b>Nome:</b>&nbsp;'.$registro["nome"].'</p>';
			                                    		echo'<p><b>Login:</b>&nbsp;'.$registro["login"].'</p>';
			                                    		echo'<p><b>Email:</b>&nbsp;'.$registro["email"].'</p>';
			                                    		echo'<p><b>CPF:</b>&nbsp;'.$registro["cpf"].'</p>';
			                                    		echo'<p><b>Nível:</b>&nbsp;';

													//ADM ou Técnico						
													if($registro["nivel"] == 1){
														echo 'Administrador</p>';
														echo '</div>';
													}
													else {
														echo 'Técnico</p>';
														echo '</div>';
													}
													
												echo '
												</div>
											</div>
										</div>
									</div>
								</div>';
				                /****************************** Fim do Modal de Visualização ******************************/

				                
			    			}
						echo'
						</div>';
					}
				?>
		</div>
	</body>
</html>
