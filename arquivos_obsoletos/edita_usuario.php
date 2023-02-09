<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Editar Usuário</title>

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
	            text-align: center;
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

				/*if (nivel=="Selecione") {
					alert("Selecione nível de acesso!");
					form3.ativo.focus();
					return false;
				}*/

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

				/*if (ativo=="Está ativo?") {
					alert("Selecione Ativo ou inativo!");
					form3.ativo.focus();
					return false;
				}*/
			}
		</script>

	</head>
	<body>	
	
	 <?php
        
            require ("conecta.php");
            //recebendo o valor da matricula ou id aluno via REQUESTE
            //$id_usuario = $_REQUEST['matricula'];

            echo $id_usuario;
            
            $query = "SELECT * FROM usuario WHERE id_usuario ='".$id_usuario."';";
            $sqlusuario = mysqli_query($conecta, $query);
            $exibeusuario = mysqli_fetch_array($sqlusuario);

            echo" - ".$exibeusuario['nome'];
            
        ?>
		<div class="container">

			<form name="form3" action="atualiza_usuario.php" method="post">
				<div class="form-group">
				
				    <input name="id_aluno" type="hidden" value="<?php echo $id_aluno; ?>"><br>
				    
					<label>Nome: </label><br>
					<input name="nome" type="text" class="form-control" placeholder="Nome Completo" required>
					
					<br>

					<label>Email: </label><br>
					<input name="email" type="email" class="form-control" placeholder="nome@email.com" required>				
					
					<br>

					<label>CPF: </label><br>
					<input name="cpf" type="text" class="form-control" placeholder="000.000.000-00" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required>

					<br>

					<label>Login: </label><br>
					<input name="login" type="text" class="form-control" placeholder="Login" required>

					<br>

					<div class="row">
						<div class="col-sm-6">
							<label>Senha: </label><br>
							<input name="senha" type="password" class="form-control" placeholder="No mínimo 8 caracteres" required>
						</div>

						<div class="col-sm-6">
							<label>Confirme a senha: </label><br>
							<input name="confirmasenha" type="password" class="form-control" placeholder="Redigite sua senha" required>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<label>Nível: </label><br>
							<select name="nivel" class="form-control" required>
								<!--<option>Selecione</option>-->
								<option value="1">Administrador</option>
								<option value="0" selected>Técnico</option>
							</select>
						</div>
						
						<div class="col-sm-6">
							<label>Ativo? </label><br>
							<select name="ativo" class="form-control" required>
								<option value="1" selected>Sim</option>
								<option value="0">Não</option>
							</select>
						</div><br>

					</div>

						<div>
							<br>
							<input type="submit" value="Atualizar" class="btn form-control form-control-file" onclick="return validar()">
						</div>
				</div>
			</form>
		</div>
	</body>
</html>
<!--

Depois que o cadastra_usuario estiver completo copiar ele aqui e modificar os dados <3

-->
