




<!--

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Menu Lateral</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<style>
			*{
				padding:  0px;
				margin:  0px;
			}

			a{
				text-decoration: none;
				color: black;
				/*O display vai fazer com que os links ocupem toda a área (pra fazer com que onde você clique ele acesse)*/
				display: block;
				padding: 7px 5px;
				color: red;
				border-style: ridge;

			}

			ul{
				/*Serve para  tirar a bolinha do ul*/
				list-style: none;
			}

			li{
				border-width: 2px;
				border-color: grey;
			}

			/*div{
				float: left;
			}*/


		</style>
	</head>
	<body>

		<div class="row">
			<ul class="col-sm-12">
				<li><a href="cadastra_equipamento.php">Novo Equipamento</a></li>
				<li><a href="cadastra_ordem.php">Nova OS</a></li>
				<li><a href="cadastra_usuario.php">Novo Usuário</a></li>
				<li><a href="exibe_equipamento.php">Equipamentos</a></li>
				<li><a href="exibe_usuario.php">Usuários</a></li>
				<li><a href="exibe_ordens.php">Ordens de Serviço</a></li>
				<li><a href="log.php">Logs</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="sair.php">Sair</a></li>
			</ul>
		</div>
		
	</body>
</html>
-->

<!--


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Menu</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		
		<style>
			/**{
				padding:  0px;
				margin:  0px;
			}

			Fundo e tamanho do menu
			#tamanho{
				background-color: white;
				width: 350px;
				height: 100%;
			}


			div{
				float: left;
			}*/


		</style>


    </head>

    <body>
		

		<header>
			<div class="container">
				<div class="form-group">
					<div class="row" style="background-color: black; align-items: center; text-align: right;">
						<div class="col-1" id="tamanho">
							<ul class="nav nav-pills">
							  	<li class="nav-item dropdown">
									<a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
										<svg xmlns="http://www.w3.org/2000/svg" width="30" height="auto" fill="#4BBB3B" class="bi bi-list" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
										</svg>
									</a>
								
									<div class="dropdown-menu">
										<a class="dropdown-item" href="exibe_ordens.php">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
											<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
											</svg> Principal
										</a>

										<a class="dropdown-item" href="https://colegiobarao.info/info/tii2019/nicolly/Cadastro/listaaluno.php#">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-stars" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
											<path d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53z"/>
											</svg> Lista
										</a>

										<a class="dropdown-item" href="https://colegiobarao.info/info/tii2019/nicolly/Cadastro/cadastro_aluno.php">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
											<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
											<path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
											</svg> Cadastro
										</a>
										
										<div class="dropdown-divider"></div>

										<a class="dropdown-item" href="https://colegiobarao.info/info/tii2019/nicolly/Cadastro/sair.php">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
											<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
											</svg> Sair
										</a>
									</div>
							  	</li>
							</ul>
						</div>


						<div class="col-10" style="text-align: center;">
							<h1 style="color: white; font-size: 350%; font-family: Garamond, serif;"><b>Ordem de Serviço</b></h1>
						</div>
						
						<div class="col-1">
							<img src="https://colegiobarao.info/img/Logo_Bola_PNG.png" class="img-fluid" class="rounded float-left" alt="Logo_barão" width="90%" height="auto">
						</div>	
					</div>
				</div>
			</div>
	    </header>
    </body>
</html>
-->


<!-- ESSA BOSTA QUE NAO FUNCIONOU QUE ODIO




<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Menu Lateral</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		
		<style>
			*{
				padding:  0px;
				margin:  0px;
			}


			a{
				text-decoration: none;
				color: black;
			}

			ul{
				/*Serve para  tirar a bolinha do ul*/
				list-style: none;
			}
			input[type="checkbox"]{
				/*Esconde o input*/
				display:  none;
			}

			/*Fundo e tamanho do menu*/
			nav{
				background-color: gray;
				width: 350px;
				height: 100%;
				/*Esconde o menu*/
				left: -350px;
				position: absolute;
				transition: all .5s;
			}

			input[type="checkbox"]:checked ~ nav{
				transform: translateX(350px);
			}

			ul{
				/*Faz com que os itens desçam um pouco para não ficam embaixo do menu*/
				top: 70px;
				position: absolute;
				width: 100%;
			}

			a{
				
				/*O display vai fazer com que os links ocupem toda a área (pra fazer com que onde você clique ele acesse)*/
				display: block;
				padding: 20px 5px;
				color: red;
			}

			a:hover{
				background-color: green;
				color: white;
			}

			label{
				background-color: blue;
				padding: 15px;
				position: absolute;
				z-index: 1;
			}

			

		</style>
	</head>
	<body>
		
		<input type="checkbox" id="chec">
		<label for="chec">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
			</svg>
		</label>

		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">blablabla</a></li>
			<li><a href="">aaaaaaa</a></li>
			<li><a href="">Sair</a></li>
		</ul>

	</body>
</html> -->
