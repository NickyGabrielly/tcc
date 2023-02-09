<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Cadastro Ordem de Serviço</title>

		<!-- Tema CSS -->
		<link rel="stylesheet" href="style_tema.css"><!--colocar o css aqui antes para ele ser prioridade no modal e não o bootstrap-->

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		


		<!--testando media query-->
		<style>
			.botoes{
				text-align: right;
			}
			
			/*
			@media (max-width: 1200px) {
				body{
					width: 1000px;
					background-color: green;
				}
			}
			@media (max-width: 1024px) {
				body{
					width: 700px;
					background-color: red;
				}
			}
			@media (max-width: 766px) {
				body{
					width: 400px;
					background-color: green;
				}
			}
			@media (max-width: 425px) {
				body{
					width: 320px;
					background-color: red;
				}
			}
			*/
		</style>
	</head>
	<body>
		<nav>
          <?php
			session_start();
        	include("barra_menu.php");
          ?>
     	</nav>
		<div class="container">
			<!-- Icone-->
			<a href="#" data-toggle="modal" data-target="#modal_cadastrar_os">
				<svg xmlns="http://www.w3.org/2000/svg" width="100" height="auto" fill="black" class="bi bi-clipboard2" viewBox="0 0 16 16">
				  	<path d="M3.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5H12a.5.5 0 0 1 0-1h.5A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1H4a.5.5 0 0 1 0 1h-.5Z"/>
				  	<path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
				</svg>
			</a>

			<!-- Iniciando o modal para cadastrar Ordem de Serviço -->
			<div id="modal"class="modal fade" id="modal_cadastrar_os" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">

						<div class="modal-header">
							<h5 class="modal-title"><b>&nbsp&nbspNova Ordem de Serviço</b></h5>
							<!--Botão para fechar modal-->
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<div class="modal-body">
							<div class="container">
								<form name="form1" action="grava_ordem.php" method="post">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Categoria: </label><br>
												<select name="categoria" class="form-control" required>
													<option>Selecione a Categoria</option>
													<option value="">Software</option>
													<option value="">Rede</option>
													<option value="">Hardware</option>
													<option value="">Outros</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label>Número de Patrimônio: </label><br>
												<input name="n_patrimonio" type="text" placeholder="Digite o número de patrimônio do equipameto" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Prioridade: </label><br>
												<select name="prioridade" class="form-control" required>
													<option>Selecione a Prioridade</option>
													<option value="1">Alta</option>
													<option value="2">Média</option>
													<option value="3">Baixa</option>
												</select>
											</div>
											<div class="col-sm-6">
												<label>Data de abertura: </label><br>
												<input name="dh_abertura" type="date" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Status: </label><br>
												<select name="status" class="form-control" required>
													<option>Selecione o Status</option>
													<option value="1">Aberta</option>
													<option value="2">Em Atendimento</option>
													<option value="3">Aguardando peças</option>
													<option value="0">Finalizada</option>
												</select>
											</div>

											<div class="col-sm-6">
												<label>Foto do equipamento: </label><br>
												<input type="file" name="arquivo" class="form-control-file" id="arquivo" accept=".jpg, .jpeg, .png, .gif">
											</div>
										</div>
									</div>
									<br><hr><br>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Problema: </label><br>
												<textarea rows="6"  name="problema" class="form-control" placeholder="Liste os problemas do equipamento" required></textarea><br>
											</div>
											<div class="col-sm-6">
												<label>Observações: </label><br>
												<textarea rows="6"  name="observacoes" class="form-control" placeholder="Observações" required></textarea><br>
											</div>
										</div>
									</div>
									<div class="botoes">
										<div> <!-- onclick="return validar()"-->
											<br>
											<button type="submit" value="Cancelar" class="btn" class="form-control" data-dismiss="modal" aria-label="Fechar">
												Cancelar
											</button>

											<button type="submit" class="btn" class="form-control" onclick="return validar()">
												Cadastrar
											</button>
										</div>
									</div>	
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
					<!-- Finalizando o modal para cadastrar Ordem de Serviço -->
		</div>
	</body>
</html>