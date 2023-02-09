<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Novo Equipamento</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<!-- Tema CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="style_tema.css">

		<style>
			h1{
	            display: flex;
	            align-content: center;
			    justify-content: center;
			    align-items: center;
	        }

	        .btn_cadastro{
	        	width: 150px !important;
	        	height: 45px !important;
	        }

	        .row{
	        	display: flex;
	        	align-content: center;
				justify-content: center;
				align-items: center;
	        }
		</style>
	</head>
	<body>
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
				var n_patrimonio 		= form2.n_patrimonio.value;
				var nome_equipamento 	= form2.nome_equipamento.value;
				var especificacao 		= form2.especificacao.value;
				var local_origem 		= form2.local_origem.value;

				if (n_patrimonio == "") {
					alert("Preencha o campo com o n° de patrimônio!");
					form2.n_patrimonio.focus();
					return false;
				}

				if (form2.n_patrimonio.value.length < 3){
					alert("Preencha o campo com o n° de patrimônio completo!");
					form2.n_patrimonio.focus();
					return false;
				}

				if (nome_equipamento == "") {
					alert("Preencha o campo com o nome do equipamento!");
					form2.nome_equipamento.focus();
					return false;
				}

				if (especificacao == "") {
					alert("Digite as especificações!");
					form2.especificacao.focus();
					return false;
				}

				if (local_origem == "") {
					alert("Digite onde fica/ficará instalado!");
					form2.local_origem.focus();
					return false;
				}

				if (form2.especificacao.value.length < 5) {
					alert("Digite a especificação!");
					form2.especificacao.focus();
					return false;
				}
			}
		</script>


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

			<br>
			<h1>Novo Equipamento</h1>
			<hr>

			<form name="form2" action="grava_equipamento.php" method="post">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label>Número de Patrimônio: </label><br>
							<input name="n_patrimonio" type="text" class="form-control" placeholder="Número de Patrimônio">
						</div>

						<div class="col-sm-6">
							<label>Nome do Equipamento: </label><br>
							<input name="nome_equipamento" type="text" class="form-control" placeholder="Ex: monitor, teclado, mouse.">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label>Especificações: </label><br>
							<textarea rows="5" name="especificacao" class="form-control" placeholder="Ex: tipo, modelo, cor."></textarea>
						</div>

						<div class="col-sm-6">
							<label>Local onde está/estava instalado: </label><br>
							<textarea rows="5" name="local_origem" class="form-control" placeholder="Local de origem"></textarea>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-sm-2">
							<br>
							<input type="submit" value="Cadastrar" class="btn form-control form-control-file btn_cadastro" onclick="return validar()">
						</div>
					</div>				
				</div>
			</form>
		</div>
	</body>
</html>