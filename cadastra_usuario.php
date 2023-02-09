<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Novo Usuário</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />

	    <!-- Tema CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="style_tema.css">
		
	    <style>
	        h1 {
	            display: flex;
	            align-content: center;
			    justify-content: center;
			    align-items: center;
	        }

	        .jcrop-centered {
	            display: inline-block;
	        }

	        #preview {
	            width: 150px;
	            height: 150px;
	            overflow: hidden;
	            display: inline-block;
	        }

	        .btn_cadastro{
	        	width: 150px !important;
	        	height: 45px !important;
	        }

	        .btn_center{
	        	display: flex;
	        	align-items: center;
	        	align-content: center;
	        	justify-content: center;
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
					alert("Preencha do campo com seu nome!");
					form3.nome.focus();
					return false;
				}

				if (form3.nome.value.length < 8){
					alert("Preencha do campo com seu nome completo!");
					form3.nome.focus();
					return false;
				}

				if (email == "") {
					alert("Preencha do campo com seu e-mail!");
					form3.email.focus();
					return false;
				}

				if (cpf == "") {
					alert("Digite o CPF!");
					form3.cpf.focus();
					return false;
				}

				if (login == "") {
					alert("Digite seu nome de usuário!");
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

				if (ativo=="Está ativo?") {
					alert("Selecione o estado atual do aluno");
					form3.ativo.focus();
					return false;
				}
			}
		</script>
	</head>
	<body>
		<nav>
	        <?php
	        	session_start();
	        	if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
					header('location: index_fofo.php');
				}
				if ($_SESSION['login'] != "" and $_SESSION['nome'] != "" and $_SESSION['nivel'] != 1) {
					header('location: principal.php');
				}
	          	include("barra_menu.php");
	        ?>
	    </nav>
	
		<div class="container">
		
			<br>
			<h1>Novo Usuário</h1>
			<hr>

			<form name="form3" action="grava_usuario.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							<label>Nome: </label><br>
							<input name="nome" type="text" class="form-control" placeholder="Nome Completo" required>
						</div>

						<div class="col-sm-4">
							<label>Email: </label><br>
							<input name="email" type="email" class="form-control" placeholder="nome@email.com" required>
						</div>

						<div class="col-sm-4">
							<label>CPF: </label><br>
							<input name="cpf" type="text" class="form-control" placeholder="000.000.000-00" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required>
						</div>
					</div>
					<br>

					<div class="row">
						<div class="col-sm-4">
							<label>Login: </label><br>
							<input name="login" type="text" class="form-control" placeholder="Login" required>
						</div>

						<div class="col-sm-4">
							<label>Senha: </label><br>
							<input name="senha" type="password" class="form-control" placeholder="No mínimo 8 caracteres" required>
						</div>

						<div class="col-sm-4">
							<label>Confirme a senha: </label><br>
							<input name="confirmasenha" type="password" class="form-control" placeholder="Redigite sua senha" required>
						</div>
					</div>
					<br>

					<div class="row">
						<div class="col-sm-4">
							<label>Nível: </label><br>
							<select name="nivel" class="form-control" required>
								<option value="1">Administrador</option>
								<option value="0" selected>Técnico</option>
							</select>
						</div>
						
						<!-- Apenas para centralizar o ativo -->
						<div class="col-sm-1">
						</div>
						
						<div class="col-sm-2">
							<label>Ativo? </label><br>
							<select name="ativo" class="form-control" required>
								<option value="1" selected>Sim</option>
								<option value="0">Não</option>
							</select>
						</div>
						
						<!-- Apenas para centralizar o ativo -->
						<div class="col-sm-1">
						</div>
						
						<div class="col-sm-4">
							<label>Imagem de Perfil: </label><br>                                          
					        <input type="file" name="arquivo" id="arquivo" class="form-control-file" accept=".jpg, .jpeg, .png, .gif"><br>
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-sm-12 btn_center">
							<br>
							<input type="submit" value="Cadastrar" class="btn form-control form-control-file btn_cadastro" onclick="return validar()">
						</div>
					</div>	
				</div>
			</form>
		</div>
	</body>
</html>
