<?php session_start();
	if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
		header('location: index_fofo.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Imprimir</title>
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
			.align, h1, h3{
			    display: flex;
			    align-content: center;
			    justify-content: center;
			    align-items: center;
			}

			.align-btn{
			    display: flex;
			    align-content: center;
			    justify-content: center;
			    align-items: center;
			    margin-bottom: 20px;
			}

			.btn{
				width: 200px;
			}

			#folha{
				padding: 20px;
			}
			
			body {
				background: var(--bg-color);
				padding: 20px;
			}

			page {
				background: white;
				display: block;
				margin-bottom: 0.5cm;
				box-shadow: 0 0 0.5cm rgb(0 0 0);
			}

			page[size="A4"] {
				width: 21cm;
				height: 29.7cm;
			}

			page[size="A4"][layout="portrait"] {
				width: 29.7cm;
				height: 21cm;
			}
			
			.header {
				padding-top: 10px;
				text-align: center;
			}

			table {
				border-collapse: collapse;
				width: 100%;
				font-size: 80%;
			}

			table th {
				background-color: var(--btn-bg);
				color: white;
			}

			table td{
				background-color: white;
			}

			th, td {
				border: 1px solid #ddd;
				text-align: left;
				/*Faz com que a tabela não transborde da folha*/
				max-width: 1px; 
				/* Faz com que o texto não transborde da div e pule linhas. Arrumar o tamanho com width se for necessário */
                white-space: break-spaces;
                overflow-wrap: anywhere;
			}

			tr:nth-child(even) {
				background-color: #f2f2f2;
			}

			b{
				font-size: 15px;
			}

			td{
				font-size: 15px;
			}

			.btn-mb{
				display: none;
			}

			/*Faz com que apenas tudo que esta dentro do id="folha" seja impresso em uma folha inteira*/
			@media print {
				/*Faz com que o body não seja impresso junto*/
				body * {
					visibility: hidden;
				}

				#folha, #folha * {
					visibility: visible;
				}

				#folha {
					position: fixed;
					left: 0;
					top: 0;
					width: 100%;
					height: 100%;

					/*Dá um espaçamento nas margens pois geralmente a impressora tem uma certa margem de erro nas bordas*/
					padding: 20px;
				}

				.table th {
				    background-color: #707070!important;
				}

				/*Faz com que os botões não apareçam na impressão*/
				.btn-none{
					display: none;
				}

				tbody{   
					windows: 1; page-break-before: auto;
				}
			}

			@media (max-width: 360px) {
				page[size="A4"] {
					width: 21cm;
					height: 29.7cm;
				}
			}

			@media (max-width: 360px) {
				.btn-pc{
					display: none;
				}

				.btn-mb{
					display: block;
				}

				.btn{
					width: 100%;
				}
			}
		</style>
	</head>

	<body>
		<nav>
			<?php
				session_start();
				if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
					header('location: index_fofo.php');
				}
				require ("conecta.php");
	            //recebendo o valor do raqm da os (id_os) via REQUESTE (raqm é >>>número<<< em arabe, pra ficar chique)
	            $id_os = $_REQUEST['raqm'];

	            //echo $id_os;
	            $sql_os 	= "SELECT * FROM ordem_de_servico WHERE id_os ='".$id_os."';";
	            $query_os 	= mysqli_query($conecta, $sql_os);
	            $exibe_os 	= mysqli_fetch_array($query_os);

	            $sql_user	= "SELECT * FROM usuario WHERE id_usuario ='".$exibe_os["fk_usuario_abertura"]."';";
	            $query_user = mysqli_query($conecta, $sql_user);
	            $exibe_user = mysqli_fetch_array($query_user);

	            $sql_evento 		= "SELECT * FROM evento_os WHERE id_os ='".$id_os."';";
	            $query_evento 		= mysqli_query($conecta, $sql_evento);
	            $exibe_evento 		= mysqli_fetch_array($query_evento);

	            $sql_equipamento 	= "SELECT * FROM equipamento WHERE id_equipamento ='".$exibe_evento['id_equipamento']."';";
	            $query_equipamento 	= mysqli_query($conecta, $sql_equipamento);
	            $exibe_equipamento 	= mysqli_fetch_array($query_equipamento);
	            
	           	$sql_evento_at 	= "SELECT * FROM evento_os WHERE atualizacao != '' and evento != 'Cadastro da OS' and id_os ='".$id_os."';";
	            $query_evento_at 	= mysqli_query($conecta, $sql_evento_at);
				?>
		</nav>


		<div class="align-btn btn-pc">
			<button onclick="window.location.href='exibe_ordens.php'" class="btn-none btn"><i class="bi bi-stars"></i> VOLTAR <i class="bi bi-stars"></i></button>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<button onclick="print()" class="btn-none btn"><i class="bi bi-stars"></i> IMPRIMIR <i class="bi bi-stars"></i></button>
		</div>


		<div class="align-btn btn-mb">
			<div class="row">
				<div class="col-sm-12">
					<button onclick="window.location.href='exibe_ordens.php'" class="btn-none btn"><i class="bi bi-stars"></i> VOLTAR <i class="bi bi-stars"></i></button>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-12">
					<button onclick="print()" class="btn-none btn"><i class="bi bi-stars"></i> IMPRIMIR <i class="bi bi-stars"></i></button>
				</div>
			</div>
		</div>


		<div class="align">
			<page size="A4" id="folha">
				<div class="header">
					<h1>Ordem de Serviço</h1>
					<br>
					<h3>Número - <?php echo $id_os;?></h3>
					<h3>Categoria - <?php echo $exibe_os['categoria'];?></h3>
					<br>
				</div>

				<table class="table">
					<thead>
						<tr>
							<th colspan="2">DATA E HORA DA ABERTURA</th>
							<th colspan="2">DATA E HORA DO FECHAMENTO</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="2"> <?php echo $exibe_os['dh_abertura'];?></td>
							<td colspan="2"> <?php 
							if ($exibe_os["status_os"] == 'Finalizada') {
								echo $exibe_os['dh_encerramento'];
							}
							else{
								echo 'O.S. não finalizada.';
							}?>
							</td>
						</tr>
					</tbody>

					<thead>
						<tr>
							<th colspan="2">TÉCNICO RESPONSÁVEL</th>
							<th colspan="2">EMAIL DO RESPONSÁVEL</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td colspan="2"><?php echo $exibe_user['nome'];?></td>
							<td colspan="2"><?php echo $exibe_user['email'];?></td>
						</tr>
					</tbody>

					<thead>
						<tr>
							<th colspan="4">EQUIPAMENTO</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td colspan="2"><b>Nome:</b><br><?php echo $exibe_equipamento['nome_equipamento']; ?></td>
							<td colspan="2"><b>Número de Patrimônio:</b><br><?php echo $exibe_equipamento['n_patrimonio']; ?></td>
						</tr>
						<tr>
							<td colspan="2"><b>Especificação:</b><br><?php echo $exibe_equipamento['especificacao']; ?></td>
							<td colspan="2"><b>Local de Origem:</b><br><?php echo $exibe_equipamento['local_origem']; ?></td>
						</tr>
					</tbody>


					<thead>
						<tr>
							<th colspan="4">PROBLEMA</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td colspan="4"><b> - Problema Relatado:</b><br> <?php echo $exibe_os['problema'];?></td>
						</tr>
					</tbody>


					<thead>
						<tr>
							<th colspan="4">OBSERVAÇÕES</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td colspan="4"><b> - Observações do problema relatado:</b><br> <?php echo $exibe_os['observacoes'];?></td>
						</tr>
					</tbody>

					<thead>
						<tr>
							<th colspan="4">ACONTECIMENTOS</th>
						</tr>
					</thead>
					<?php while ($acontecimento = mysqli_fetch_array($query_evento_at)) { 

	                    $sql_user_at 	= "SELECT * FROM usuario WHERE id_usuario = '".$acontecimento['id_usuario']."';";
						$query_user_at 	= mysqli_query($conecta, $sql_user_at);
						$num_att		= mysqli_num_rows($query_user_at);
	                    while($viewuser = mysqli_fetch_assoc($query_user_at)) {
	                        $user_at   =   $viewuser['nome'];                        
	                    }
					?>
						<tbody>	
							<tr>		
								<td colspan="2"><b> - Técnico:</b> <?php echo $user_at; ?>
									<br><b> - Horário:</b> <?php echo $acontecimento['data_hora'];?></td>
								<td colspan="2"><b> - <?php echo $acontecimento['evento'];?></b> <br> <?php echo $acontecimento['atualizacao'] ;?></td>
							</tr>
						</tbody>
					<?php } ?>
				</table>
			</page>	
		</div>

		<!--
		<page size="A4">

		<div class="header">
		[nomeEmpresa]
		<br>[endereco] - [cidade] - [cep]
		<br>[cnpj] - [telefone]
		<br>
		<h3>[nomeRelatorio] -  [tipoRelatorio]</h3>
		</div>

			<table class="table">
				<thead>
					<tr>
						<th>[coluna0]</th>
						<th>[coluna1]</th>
						<th>[coluna2]</th>
						<th>[coluna3]</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
						<tr>
						<td>3</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
		</page>
		-->
	</body>
</html>