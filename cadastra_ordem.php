<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Nova O.S.</title>
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

	        .row{
	        	display: flex;
	        	align-content: center;
				justify-content: center;
				align-items: center;
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
				var n_patrimonio 		= form3.n_patrimonio.value;
				var categoria			= form3.categoria.value;
				var prioridade 			= form3.prioridade.value;
				var problema			= form3.problema.value;

				if (n_patrimonio == "Selecione o n° de patrimônio") {
					alert("Selecione o número de patrimonio do equipamento!");
					form3.n_patrimonio.focus();
					return false;
				}

				if (categoria == "Selecione a Categoria") {
					alert("Selecione a categoria da Ordem de Serviço!");
					form3.categoria.focus();
					return false;
				}

				if (problema == "") {
					alert("Digite o problema que o equipamento tem!");
					form3.problema.focus();
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
				
	          	include("barra_menu.php");
	          	require('conecta.php')
	        ?>
	    </nav>
	
		<div class="container">

			<br>
			<h1>Nova Ordem de Serviço</h1>
			<hr>

			<form name="form3" action="grava_ordem.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-5">
							<label>Patrimônio: *</label><br>
							<select name="n_patrimonio" id="n_patrimonio" class="form-control">
								<option>Selecione o n° de patrimônio</option>
								<?php
									$sqlpatrimon = "SELECT * FROM equipamento WHERE ativo = 1 and n_patrimonio != '' ORDER BY n_patrimonio";
									$consulta = mysqli_query($conecta, $sqlpatrimon);
									$cnt = mysqli_num_rows ($consulta);
									while($registro = mysqli_fetch_assoc($consulta)){
										echo '<option value="'.$registro['id_equipamento'].'">'.$registro['n_patrimonio'].'</opition>';
									}
								?>
							</select> 
						</div>

						<div class="col-sm-5">
							<label>Quem está abrindo: </label><br>
							<input name="fk_usuario_abertura" type="text" class="form-control" value="<?php echo $_SESSION['nome'] ?>" readonly>
						</div>				
					</div>
					<br>

					<div class="row">
						<div class="col-sm-5">
							<label>Categoria: *</label><br>
							<select name="categoria" class="form-control" required>
								<option value="VÁRIOS" selected>VÁRIOS</option>
								<option value="REDE">REDE</option>
								<option value="HARDWARE">HARDWARE</option>
								<option value="SOFTWARE">SOFTWARE</option>
								<option value="MANUTENÇÃO">MANUTENÇÃO</option>
								<option value="LIMPEZA">LIMPEZA</option>
							</select>
						</div>
			
						<div class="col-sm-5">
							<label>Prioridade: *</label><br>
							<select name="prioridade" class="form-control" required>
								<option value="1">Alta</option>
								<option value="2">Média</option>
								<option value="3" selected>Baixa</option>
							</select>
						</div>						
					</div>

					<br>

					<div class="row">
						<div class="col-sm-5">
							<label>Problema: *</label><br>
							<textarea rows="3" maxlength="250" name="problema" class="form-control" placeholder="Liste os problemas do equipamento" required></textarea><br>
						</div>

						<div class="col-sm-5">
							<label>Observações: </label><br>
							<textarea rows="3" maxlength="250" name="observacoes" class="form-control"  placeholder="Observações"></textarea><br>
						</div>	
					</div>

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