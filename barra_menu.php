<!DOCTYPE html>
<html lang="pt-br" >
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Menu</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Quicksand&family=Rye&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- Tema CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="style_tema.css">

		<style>
			/* Display: none; no media query faz com que o elemento suma, ja o display: block; faz com que ele apareça */


			nav{
				/* Faz com que o menu não cubra o conteudo da pagina, se caso o css for separado daqui deverá ser colodado manualmente em cada pagina */
				padding-top: 5em;
				padding-left: 10em;
			}

			.li-menu, .ul-menu{
				list-style-type: none;
				padding-inline-start: 0;
			}

			/* Menu Hambúrguer */
			.menu{
				width: 100%;
				height: 5em;
			  	top: 0;
			}

			.ul-menu .menu .li-menu{
				/* Alinha na horizontal */
				display: inline-block; 
			}

			.a-menu{
				display: flex;
				align-content: center;
				justify-content: center;
				align-items: center;
			}

			.menu .li-menu .a-menu{
				height: 5em;
				width: 5em;
				line-height: 5em;
				text-align:center;
				color: white;
				position: relative;
			}

			.alinharmenu{
				display: flex;
				justify-content: flex-start;
				align-items: center;
			}

			.alinharh1{
				display: flex;
				justify-content: center;
				align-items: center;
			}

			.imagem{
				display: flex;
				justify-content: flex-end;
				align-items: center;
				padding-right: 35px;
			}

			.menu, .menu-vertical{
				position: fixed;
				left: 0;
				list-style-type: none;
				z-index:10;
			}

			.menu-vertical{
				overflow:hidden;
				top: 5em;
				z-index: 11;
				width:0;
				height:0;
				transition: all 0.1s ease-in-out;
			}

			.menu-vertical .li-menu .a-menu{
				width: 5em;
				height: 4em;
				line-height: 4em;
				text-align:center;
				
				text-decoration:none;  
				position: relative;
				font-family:verdana;
			}
			
			.li-menu{
				display: flex;
				align-content: center;
				align-items: center;
				justify-content: center;
			}


			.btn-align{
			    display: flex;
			    align-content: center;
			    justify-content: center;
			    align-items: center;
			}

			.sair-align{
				display: flex;
			    align-content: center;
			    justify-content: center;
			    align-items: center;
			}

			button{
				/*Remove o foco em volta do button*/
    			outline: none !important;
			}

			.botao{
				outline: none !important;
			}

			.padding-btn{
				padding-top: 40px;
				padding-bottom: 40px;
				width: 50vw!important;
				margin: 0 auto!important;
			}

			.titulomobile{
				display: none;
			}

			.li-bottom{
			    position: absolute;
			    bottom: 0;
			}

			#p-menu-modal{
				font-size: 34px;
			}

			.btn-exit{
				width: 174px;
			}

			.tirar-pd{
				padding-right: 8px!important;
    			padding-left: 8px!important;
    			display: flex;
			}

			.svg-menu{
				width: 40px;
				height: auto;
			}

			.svg-menu-vertical{
				width: 30px;
				height: 30px;
			}

			.tooltip{
				top: 17px !important;
			}

			/* Serve para abrir o menu vertical (quando devidamente colocado no JS) */
			.open{
				width:5em;
				height: calc(100% - 5em);
			}


			/*************** Inicio do Media Query ***************/
			@media (max-width: 885px) {
				.padding-btn{
			    width: 80vw!important;
				}
			}

			/* Versão Mobile */
			@media (max-width: 600px) {
				.titulopc{
					display: none;
				}

				.titulomobile{
					display: block;
				}

				.h1-menu{
					font-size: 30px;
				}

				.imagem{
					width: 70px;
				}
			}

			@media (max-width: 885px) {
				.padding-btn{
			    	width: 90vw!important;
				}
			}

			@media (max-width: 420px) {
				.padding-btn{
			    	width: 100vw!important;
				}

				#p-menu-modal{
					font-size: 23px;
				}
			}
			/*************** Fim do Media Query ***************/	
		</style>
	</head>
	<body>
		<?php 
			session_start();
			if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
				header('location: index_fofo.php');
			}
		 ?>

		<!-- JavaScript para quando clicar no icon do menu horizontal, abrir o menu vertical -->
		<script id="rendered-js" >
			$(document).ready(function () {
			$(".menu-button").click(function () {
			$(".menu-vertical").toggleClass("open");
			});
			});
		</script>
		<!-- Fim do JavaScript de abertura do menu vertical -->
		
		<script>
			$(function () {
			$('[data-toggle="tooltip"]').tooltip()})
		</script>


		<!------------------------------ Menu Horizontal ------------------------------>
		<ul class="menu ul-menu">
			<div class="row">
				<!-- Ícone do Menu -->
				<div class="col-4 col-sm-2 col-md-2 alinharmenu">
					<li title="Menu" class="li-menu">
						<a href="#" class="menu-button a-menu">
							<svg class="svg-menu" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
							</svg>
						</a>
					</li>
				</div>
				<!-- Fim do ícone de Menu -->

				<div id="h1-menu" class="col-4 col-sm-8 col-md-8 alinharh1">
					<h1 class="titulopc">Ordens de Serviço<b></b></h1>
					<h1 class="titulomobile"><b>O.&nbsp;S.</b></h1>
				</div>
				
				<div class="col-4 col-sm-2 col-md-2 imagem">
					<div class="icon_color" title="Alterar Tema" data-toggle="tooltip" data-placement="bottom">
						<div class="teme_button">
							<i id="temeButton" class="bi bi-moon-stars-fill svg-menu"></i>
						</div>
					</div>
				</div>
			</div>
		</ul>
		<!------------------------------ Fim do Menu Horizontal ------------------------------>


		<!------------------------------ Menu Verical ------------------------------>
		<?php 
			/* Se o usuário for de nível == 1 (Administrador), é mostrado para ele o seguinte menu: */
			if ($_SESSION['nivel'] == 1) {
				echo '
				<div class="menu-vertical">
					<div>
						<ul class="ul-menu">
							<li title="Página Inicial" class="li-menu" data-toggle="tooltip" data-placement="right">
								<a href="principal.php" class="a-menu">
									<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
										<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
									</svg>
								</a>
							</li>

							<li title="Ordem de Serviço" class="li-menu" data-toggle="tooltip" data-placement="right">
								<a href="exibe_ordens.php" class="a-menu">
									<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
										<path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
										<path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
									</svg>
								</a>
							</li>
						
							<li title="Equipamentos" class="li-menu" data-toggle="tooltip" data-placement="right">
								<a href="exibe_equipamento.php" class="a-menu">
									<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
										<path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
									</svg>
								</a>
							</li>
						
							<li title="Usuários" class="li-menu" data-toggle="tooltip" data-placement="right">
								<a href="exibe_usuario.php" class="a-menu">
									<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
										<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
									</svg>
								</a>
							</li>

							<li title="Logs" class="li-menu" data-toggle="tooltip" data-placement="right">
								<a href="log.php" class="a-menu">
									<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
										<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
										<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
									</svg>
								</a>
							</li>
						</ul>


						<ul class="ul-menu">
							<div class="li-bottom">
								<li title="Perfil" class="li-menu" data-toggle="tooltip" data-placement="right">
									<a href="perfil.php" class="a-menu">
									<!--<a href="perfil.php">-->
										<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
											<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
											<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
										</svg>
									</a>
								</li>

								<li title="Sair" class="li-menu" data-toggle="tooltip" data-placement="right">
									<a href="#" class="a-menu" data-toggle="modal" data-target="#modal_exit">
										<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
											<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
										</svg>
									</a>
								</li>
							</div>
						</ul>
					</div>
				</div>';
			}

			/* Já se o usuário for de nível == 0 (Técnico), é mostrado o seguinte menu: */
			if ($_SESSION['nivel'] == 0) {
				echo'
				<div class="menu-vertical">
					<div>
						<ul class="ul-menu">
							<li title="Página Inicial" class="li-menu" data-toggle="tooltip" data-placement="right">
								<a href="principal.php" class="a-menu">
									<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
										<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
									</svg>
								</a>
							</li>

							<li title="Ordem de Serviço" class="li-menu" data-toggle="tooltip" data-placement="right">
								<a href="exibe_ordens.php" class="a-menu">
									<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
										<path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
										<path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
									</svg>
								</a>
							</li>
									
							<li title="Equipamentos" class="li-menu" data-toggle="tooltip" data-placement="right">
								<a href="exibe_equipamento.php" class="a-menu">
									<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
										<path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
									</svg>
								</a>
							</li>
						</ul>


						<ul class="ul-menu">
							<div class="li-bottom">
								<li title="Perfil" class="li-menu" data-toggle="tooltip" data-placement="right">
									<a href="perfil.php" class="a-menu">
									<!--<a href="perfil.php">-->
										<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
											<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
											<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
										</svg>
									</a>
								</li>

								<li title="Sair" class="li-menu" data-toggle="tooltip" data-placement="right">
									<a href="#" class="a-menu" data-toggle="modal" data-target="#modal_exit">
										<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
											<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
										</svg>
									</a>
								</li>
							</div>
						</ul>
					</div>
				</div>';
			}
		?>
		<!------------------------------ Fim do Menu Vertical ------------------------------>
		
							
		<!------------------------------ Modal para encerrar sessão ------------------------------>
		<div class="modal fade" id="modal_exit" tabindex="-1" role="dialog" aria-hidden="true">
			 <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content padding-btn">			
					<div class="container"> 
						<div class="sair-align">
							<p id="p-menu-modal"><i class="bi bi-stars"></i> Deseja mesmo sair? <i class="bi bi-stars"></i></p>
						</div>

						<br>

						<div class="sair-align">
							<div class="row">
								<div class="col-6 tirar-pd">
									<button class="btn btn-exit" data-dismiss="modal">CANCELAR</button>
								</div>
								<div class="col-6 tirar-pd">
									&nbsp;<button class="btn btn-exit" onclick="window.location.href='sair.php'">SAIR</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!------------------------------ Fim do modal de encerrar sessão ------------------------------>
		

		<!------------------------------ Inicio dos Scripts para mudar o tema ------------------------------>							
		<?php 
		echo $_SESSION["tema"];
		?>

		<script>
			const toTheme = () => {
				const theme = localStorage.getItem("theme")
				const body = document.querySelector("body")
				theme == 0 ? body.classList.remove("white")
				    : body.classList.add("white")
				addOrRemoveDark(theme)
			}
			
			toTheme()

			//Pegando o elemento com a classe teme_button
			const button = document.querySelector('.teme_button')
			
			button.addEventListener('click', () => {
				const theme = localStorage.getItem("theme")               
                theme == 0 ? localStorage.setItem("theme", 1)
                    : localStorage.setItem("theme", 0)                   
                toTheme()
			})

			function addOrRemoveDark(theme) {
				const icon = document.querySelector('#temeButton')
				if(theme == 0) {
					//Irá remove-la
					icon.classList.remove('bi-sun-fill')
					//E adicionará a classe bi-moon-fill
					icon.classList.add('bi-moon-fill')
					//Se não tiver a classe bi-sun-fill:
				}

				else {
					//Removerá a classe bi-moon-fill
					icon.classList.remove('bi-moon-fill')
					//E adicionará o icone de bi-sun-fill
					icon.classList.add('bi-sun-fill')
				}
			}
		</script>
		<!------------------------------ Fim dos Scripts para mudar o tema ------------------------------>

	</body>
</html>
