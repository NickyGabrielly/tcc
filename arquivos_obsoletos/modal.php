//outro modal, dessa vez é de edição de dados. 	
	               	//Modal de edição :(

						
	                echo '
						<div class="modal fade" id="modal_edicao'.$registro["id_usuario"].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Editar '.$registro["nome"].'</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="container">';
										echo '
										<form name="form3" action="atualiza_usuario.php" method="post">
											<div class="form-group">
											    <input name="id_usuario" type="hidden" value="'.$registro["id_usuario"].'"><br>
											    
												<label>Nome: </label><br>
												<input name="nome" type="text" class="form-control" placeholder="Nome Completo" value="'.$registro["nome"].'"required>
												
												<br>

												<label>Email: </label><br>
												<input name="email" type="email" class="form-control" placeholder="nome@email.com" value="'.$registro["email"].'"required>				
												<br>

												<label>CPF: </label><br>
												<input name="cpf" type="text" class="form-control" placeholder="000.000.000-00" maxlength="14"'; echo' OnKeyPress="formatar'; echo "('###.###.###-##', this)"; echo '" value="'.$registro["cpf"].'"required>';

												echo'
												<br>

												<label>Login: </label><br>
												<input name="login" type="text" class="form-control" placeholder="Login" value="'.$registro["login"].'" required>

												<br>

												<div class="row">
													<div class="col-sm-6">
														<label> Nova senha: </label><br>
														<input name="senha" type="password" class="form-control" placeholder="No mínimo 8 caracteres">
													</div>

													<div class="col-sm-6">
														<label>Confirme a nova senha: </label><br>
														<input name="confirmasenha" type="password" class="form-control" placeholder="Redigite a senha">
													</div>
												</div>

												<br>	

												<div class="row">
													<div class="col-sm-6">
														<label>Nível: </label><br> 
														<select name="nivel" class="form-control" value="'.$registro["nivel"].'" required>';?>
															<option value="1" <?php if($registro["nivel"] == '1') {echo 'selected'; } ?>>Administrador</option>
															<option value="0" <?php if($registro["nivel"] == '0') {echo 'selected'; } ?>>Técnico</option>
														</select>
													</div>
													
													<?php echo '
													<div class="col-sm-6">
														<label>Ativo? </label><br>
														<select name="ativo" class="form-control" value="'.$registro["ativo"].'"required>';?>
															<option value="1" <?php if($registro["ativo"] == '1') {echo 'selected'; } ?>>Sim</option>
															<option value="0" <?php if($registro["ativo"] == '0') {echo 'selected'; } ?>>Não</option>
														</select>
													</div><br>
												</div>

												<?php echo'
													<div>
														<br>
														<input type="submit" value="Atualizar" class="btn form-control form-control-file" onclick="return validar()">
													</div>
											</div>
										</form>';	
									echo '</div>
							
								</div>
							</div>
						</div>';

	                //fim do modal de edição de dados.
