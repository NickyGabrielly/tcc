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
			/*display: none; no media query faz com que o elemento suma, ja o display: block; faz com que ele apareça*/

			/*body{
				background-color: var(--bgcolor);
			}*/
			nav{
				/*faz com que o menu não cubra o conteudo da pagina, se caso o css for separado daqui teremos de por manualmente em cada pagina :p */
				padding-top: 5em;
				padding-left: 10em;
			}

			.li-menu, .ul-menu{
				list-style-type: none;
				padding-inline-start: 0;
			}

			/*Menu Hambúrguer*/
			.menu{
				width: 100%;
				height: 5em;
			  	top: 0;
			}

			.ul-menu .menu .li-menu{
				/* alinha na horizontal */
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
				/*Sombras 
				overflow:hidden;
				box-shadow: 2px 0 18px rgba(0, 0, 0, 0.26);*/
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
				/*display: block;*/
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
			/*
			.menu-vertical .li-menu .a-menu:hover{
				background-color: #8c5cff;
				color: white;
			}*/

			/*.hr-menu{
				border-color: #b8b8b8;
				width: 60px;
			}*/

			.titulomobile{
				display: none;
			}

			/*.titulomobile, .titulopc, .h1-menu{
				font-family: 'Berkshire Swash', cursive;
			}*/

			.li-bottom{
			    position: absolute;
			    bottom: 0;
			}

			/*Serve para abrir o menu vertical (quando devidamente colocado no JS)*/
			.open{
				width:5em;
				height: calc(100% - 5em);
			}

			/******** Versão "Mobile" ********/
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

	
		</style>
	</head>
	<body>
		<?php 
			session_start();
		 ?>
		<!-- JavaScript para quando clicar no icon do menu hambúrguer, abrir o menu vertical -->
		
		<script id="rendered-js" >
			$(document).ready(function () {
			$(".menu-button").click(function () {
			$(".menu-vertical").toggleClass("open");
			});
			});
		</script>
		

		<script>
			$(function () {
			$('[data-toggle="tooltip"]').tooltip()})
		</script>


		<!-- Menu Horizontal -->
		
		<ul class="menu ul-menu">
			<div class="row">
				<!-- Menu Hambúrguer Ícon -->
				<div class="col-4 col-sm-2 col-md-2 alinharmenu">
					<li title="Menu" class="li-menu">
						<a href="#" class="menu-button a-menu">
							<svg class="svg-menu" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
							</svg>
						</a>
					</li>
				</div>

				<div id="h1-menu" class="col-4 col-sm-8 col-md-8 alinharh1">
					<h1 class="titulopc">Ordens de Serviço<b></b></h1>
					<h1 class="titulomobile"><b>O.&nbsp;S.</b></h1>
				</div>

				<!-- Colocar aqui futura logo -->
				<!--<div class="col-4 col-sm-2 col-md-2 imagem">
					<svg class="svg-menu" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
						<path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
					</svg>
				</div>-->
				
				<div class="col-4 col-sm-2 col-md-2 imagem">
					<div class="icon_color" title="Alterar Tema" data-toggle="tooltip" data-placement="bottom">
						<div class="teme_button">
							<i id="temeButton" class="bi bi-moon-stars-fill svg-menu"></i>
						</div>
					</div>
				</div>


			</div>
		</ul>

		<!-- Menu Verical -->

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
				
				
					<!--<li title="Usuários" class="li-menu" data-toggle="tooltip" data-placement="right">
						<a href="exibe_usuario.php" class="a-menu">
							<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
								<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
							</svg>
						</a>
					</li>
					<hr class="hr-menu">-->
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
							<a href="sair.php" class="a-menu">
								<svg class="svg-menu-vertical" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
									<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
								</svg>
							</a>
						</li>
					</div>
				</ul>

			</div>
		</div>
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
						//Removerá-la
						icon.classList.remove('bi-sun-fill')
						//E adicionara a classe bi-moon-fill
						icon.classList.add('bi-moon-fill')
						//Se não ter a classe bi-sun-fill:
					}

					else {
						//Removerá a classe bi-moon-fill
						icon.classList.remove('bi-moon-fill')
						//E adicionará o icone de bi-sun-fill
						icon.classList.add('bi-sun-fill')


					}
				}

		</script>
	</body>
</html>

