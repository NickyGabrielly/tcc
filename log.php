<?php
	session_start();
	if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
		header('location: index_fofo.php');
	}
	if ($_SESSION['login'] != "" and $_SESSION['nome'] != "" and $_SESSION['nivel'] != 1) {
		header('location: principal.php');
	}
	date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Logs</title>
		<link rel="stylesheet" href="style_tema.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Tema CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		
		
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

		.log-bug{
			/* Faz com que o texto não transborde da div e pule linhas. Arrumar o tamanho com width se for necessário */
                white-space: break-spaces;
                overflow-wrap: anywhere;
		}

		#hr{
			border-color: var(--hr-color) !important;
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
				include("barra_menu.php");
			?>
     	</nav>

		<div class="container">
			<div class="row align-items-center search-pc">
				<div class="col-6 search-pc">
					<h1>Logs</h1>
					<p>Aqui o adminstrador pode visualizar todos os passos dos usuários.<p>
				</div>
				<div class="col-6 search-pc">
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
				<div class="col-12 search-mobile">
					<h1>Logs</h1>
					<p>Aqui o adminstrador pode visualizar todos os passos dos usuários.<p>
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
					$sql = "SELECT * FROM logs ORDER by dh_log desc";
					$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
				}
					
				else
				//Se removida a chave de entrada e saida, exibe todos os registrous do banco ao carrregar a página
					$sql = "SELECT * FROM logs WHERE dh_log LIKE '%$pesquisa%' or tipo LIKE '%$pesquisa%' or evento LIKE '%$pesquisa%' or ip_user LIKE '%$pesquisa%' or '.$user.' LIKE '%$pesquisa%' ORDER by dh_log desc";
					$consulta = mysqli_query($conecta, $sql);
					$cnt = mysqli_num_rows ($consulta); //Guarda o número de resultados obtidos na consulta
				}	
					
					//Exibe mensagem de quantos registrous foram encontrados
				if ($cnt == "0") {
					$msg = '<h6 style="texte-align: right;">Nenhum log, com o termo <b>'. $pesquisa . '</b>.</h6>';
				}
					
				if ($cnt == "0" & $pesquisa != "") {
				    $msg = '<h6 style="text-align: right;">Nenhum log encontrado com o termo <b>'.$pesquisa.'</b>.</h6>';
				}
					
				if ($cnt == "1" & $pesquisa == "") {
					$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> log.</h6>';
				}
					
				if ($cnt == "1" & $pesquisa != "") {
					$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> log com o termo <b>'.$pesquisa.'</b>.</h6>';
				}
					
				if ($cnt >= "2" & $pesquisa == "") {
					$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> logs</h6>';
				}
					
				if ($cnt >= "2" & $pesquisa != "") {
					$msg = '<h6 style="text-align: right;"><b>'.$cnt.'</b> logs com o termo <b>'.$pesquisa.'</b>.</h6>';
				}

				//Exibe mensagem confore os IFs acimas
				echo '<p class = "text-right">'.$msg.'</p>';
					
				while($registrou = mysqli_fetch_assoc($consulta)) {
					echo'<div>';
                    
                    $sqlconsuluser  =   'SELECT * FROM usuario WHERE id_usuario = '.$registrou["fk_usuario"].';';
                    $queryconsuser  =   mysqli_query($conecta, $sqlconsuluser);
                    
                    while($viewuser = mysqli_fetch_assoc($queryconsuser))
                    {
                        $user   =   $viewuser['nome'];                        
                    }

                    if ($registrou["tipo"] == 'TENTATIVA DE ACESSO AO SISTEMA' or $registrou["tipo"] == 'ACESSO AO SISTEMA') {
                    	echo '<div class="log-bug"><h6>✦ '.$registrou["dh_log"].'&nbsp;IP:&nbsp;'.$registrou["ip_user"].'&nbsp;'.$registrou["tipo"].'&nbsp;'.$registrou["evento"].'.<br><hr id="hr"></div>' ;
                    }

                    if ($registrou["tipo"] == 'Novo Usuário' or $registrou["tipo"] == 'NOVO USUÁRIO') {
                    	echo '<div class="log-bug"><h6>✦ '.$registrou["dh_log"].'&nbsp;IP:&nbsp;'.$registrou["ip_user"].'&nbsp;'.$registrou["tipo"].',&nbsp;'.$user.'&nbsp;cadastrou&nbsp;'.$registrou["evento"].'.<br><hr id="hr"></div>' ;
                    }

                    if ($registrou["tipo"] == 'USUÁRIO ATUALIZADO' or $registrou["tipo"] == 'EQUIPAMENTO ATUALIZADO') {
                    	echo '<div class="log-bug"><h6>✦ '.$registrou["dh_log"].'&nbsp;IP:&nbsp;'.$registrou["ip_user"].'&nbsp;'.$registrou["tipo"].'!&nbsp;'.$user.'&nbsp;'.$registrou["evento"].'.<br><hr id="hr"></div>' ;
                    }

                   	if ($registrou["tipo"] == 'NOVA ORDEM DE SERVIÇO') {
                    	echo '<div class="log-bug"><h6>✦ '.$registrou["dh_log"].'&nbsp;IP:&nbsp;'.$registrou["ip_user"].'&nbsp;usuário&nbsp;'.$user.'&nbsp;abriu&nbsp;'.$registrou["tipo"].',&nbsp;'.$registrou["evento"].'.<br><hr id="hr"></div>' ;
                    }
                    if ($registrou["tipo"] == 'SAIR') {
                    	echo '<div class="log-bug"><h6>✦ '.$registrou["dh_log"].'&nbsp;IP:&nbsp;'.$registrou["ip_user"].'&nbsp;'.$registrou["tipo"].'&nbsp;'.$registrou["evento"].'.<br><hr id="hr"></div>' ;
                    }

					echo '</div>';	
				}  
      
			?>		
		</div>
	</body>
</html>
		
