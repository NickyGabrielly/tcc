<?php
	session_start();

	if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
		header('location: index_fofo.php');
	}

	date_default_timezone_set('America/Sao_Paulo');
	require("conecta.php");

	// Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'imgs/';
	 
	// Tamanho máximo do arquivo (em Bytes)
	$_UP['tamanho'] = 1024 * 1024 * 5; // 5Mb
	 
	// Array com as extensões permitidas
	$_UP['extensoes'] = array('jpg', 'jpeg', 'png', 'gif');
	 
	// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
	$_UP['renomeia'] = false;

	// Array com os tipos de erros de upload do PHP
	$_UP['erros'][0] = 'Não houve erro';
	$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
	$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
	$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
	$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
	 
	// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
	if ($_FILES['arquivo']['error'] != 0) {
		die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
		exit; // Para a execução do script
	}
	 
	// Faz a verificação da extensão do arquivo
	$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));

	if (array_search($extensao, $_UP['extensoes']) === false) {
		echo "Por favor, envie arquivos com as seguintes extensões: jpg, jpeg, png ou gif";
	}
	 
	// Faz a verificação do tamanho do arquivo
	else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
		echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
	}
	 
	// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
	else{
		// Primeiro verifica se deve trocar o nome do arquivo
		if ($_UP['renomeia'] == true) {
			// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
			$nome_final = time().'.jpg';
		} 

		else{
			// Mantém o nome original do arquivo
			$nome_final = $_FILES['arquivo']['name'];
		}
	 
		// Depois verifica se é possível mover o arquivo para a pasta escolhida
	    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].date('Ymd_His').$nome_final)){
			// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
			echo "Upload efetuado com sucesso!";
			$nome_concatenado = date('Ymd_His') . $nome_final;
		}

		else{
			// Não foi possível fazer o upload, provavelmente a pasta está incorreta
			echo "Não foi possível enviar o arquivo, tente novamente";
		}
	}

	/****************************** ENVIADO DADOS PARA O BANCO DE DADOS ******************************/
	//Recebe os valores para enviar para o banco de dados
	$id_usuario   =   $_POST["id_usuario"];
	$foto   	  =   $nome_concatenado;

	$sqlinsert  = "UPDATE usuario set foto='".$foto."' WHERE usuario.id_usuario='".$id_usuario."';";

	mysqli_query($conecta, $sqlinsert) or die ("Não foi possivel alterar a localização da foto no BD!");

	echo "
	<script> window.alert('Foto atualizada com sucesso!');
	    window.location='exibe_usuario.php'
	</script>";
?>
