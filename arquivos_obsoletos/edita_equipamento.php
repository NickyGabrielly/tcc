			<form name="form2" action="atualiza_equipamento.php" method="post">
				<div class="form-group">
					<input name="id_equipamento" type="hidden" value="<?php echo $registro['id_equipamento']; ?>"><br>
					<div class="row">
						<div class="col-sm-4">
							<label>Número de Patrimônio: </label><br>
							<input name="n_patrimonio" type="text" class="form-control" value="<?php echo $registro['n_patrimonio']; ?>" placeholder="Digite o n° de patrimônio deste equipamento"><br>
						</div>

						<div class="col-sm-8">
							<label>Nome do Equipamento: </label><br>
							<input name="nome_equipamento" type="text" class="form-control" value="<?php echo $registro['nome_equipamento']; ?>" placeholder="Ex: monitor, caixa de som, etc">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label>Especificações: </label><br>
							<!--<input name="especificacao" type="text" class="form-control" placeholder="Tipo, modelo... essas coisas">-->
							<textarea rows="5"  name="especificacao" class="form-control" value="<?php echo $registro['especificacao']; ?>" placeholder="Tipo, modelo... essas coisas"></textarea><br>
						</div>

						<div class="col-sm-6">
							<label>Local onde está/estava instalado: </label><br>
							<!--<input name="local_origem" type="text" class="form-control" placeholder="Onde essse equipameto estava?">-->
							<textarea rows="5"  name="local_origem" class="form-control" value="<?php echo $registro['local_origem']; ?>" placeholder="Onde essse equipameto estava?"></textarea>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-2">
							<label>Ativo? </label><br>
							<select name="ativo" class="form-control" value="<?php echo $registro['ativo']; ?>">
								<option value="1" <?php if($registro["ativo"] == '1') {echo 'selected'; }?>>Sim</option>
								<option value="0" <?php if($registro["ativo"] == '0') {echo 'selected'; }?>>Não</option>
							</select>
						</div>

						<div class="col-sm-8"></div> <!--FEITA APENAS PARA SEPARAR O ATIVO DO BOTÃO-->

						<div class="col-sm-2"> <!-- onclick="return validar()"-->
							<br>
							<input style="float: right;" type="submit" value="Atualizar" class="btn" class="form-control" onclick="return validar()">
						</div>
					</div>				
				</div>
			</form>