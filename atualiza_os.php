<?php
	session_start();
	if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
		header('location: index_fofo.php');
		exit();
	}
	date_default_timezone_set('America/Sao_Paulo');
	require("conecta.php");

	$id_os				=	$_POST["id_os"];
	$categoria			=	$_POST["categoria"];
	$status_os			=	$_POST["status_os"];
	$prioridade			=	$_POST["prioridade"];
	$problema			=	$_POST["problema"];
	$observacoes	    =	$_POST["observacoes"];
	//$dh_abertura		=	date('Y-m-d H:i:s'); //$_POST["dh_abertura"];
	$dh_encerramento	=	$_POST["dh_encerramento"];
	$foto_equipamento	=	$_POST["foto_equipamento"];
	$n_patrimonio		= 	$_POST["n_patrimonio"];
	$atualizacao		=	$_POST["atualizacao"];
	//echo $categoria."<br>".$status_os."<br>".$prioridade."<br>".$problema."<br>".$observacoes."<br>".$dh_abertura."<br>".$dh_encerramento."<br>".$foto_equipamento."<br><br>";


	/****************************** INSERINDO NA TABELA EVENTOS A ATUALIZAÇÃO! ******************************/ 
	$id_usuario			=	$_SESSION['id_usuario'];
    $id_equipamento		=	$n_patrimonio;
    $data_hora			=	date('Y-m-d H:i:s');	
    
    /*Verifica se foi reaberta*/
	$sqlverifica 		= 	"SELECT * FROM ordem_de_servico WHERE id_os = '".$id_os."';";
	$verifica 			= 	mysqli_query($conecta, $sqlverifica);
	$veri 				= 	mysqli_fetch_array($verifica);

	if ($veri['status_os'] == 'Finalizada' and $status_os != 'Finalizada') {
	 	$evento				=	"Atualização da OS (REABERTA)";
	 	$prioridade			= 	3;
	}
	if ($veri['status_os'] != 'Finalizada' and $status_os != 'Finalizada') {
	 	$evento				=	"Atualização da OS";
	} 
	if ($veri['status_os'] != 'Finalizada' and $status_os == 'Finalizada') {
	 	$evento				=	"Atualização da OS (FINALIZADA)";
	 	$dh_encerramento	=	date('Y-m-d H:i:s');
	}

	/*fim da verificação de reabertura */
	 $sqlinsertevento = "INSERT INTO evento_os (id_os, id_usuario, id_equipamento, evento, data_hora, atualizacao) VALUES
		
	('$id_os', '$id_usuario', '$id_equipamento', '$evento', '$data_hora', '$atualizacao')";
		
	mysqli_query($conecta, $sqlinsertevento) or die ("Não foi possível inserir os dados no banco!");
	/****************************** FIM DA INSERÇÃO DO EVENTO ******************************/

	
	/****************************** UPDATE NO BANCO ******************************/
	/*Se a ordem for encerrada a gente apaga a prioridade e imprime a dh_encerramento*/
	if ($status_os == "Finalizada") {
		$prioridade = "";
		$sqlinsert = "UPDATE ordem_de_servico SET categoria = '".$categoria."', status_os = '".$status_os."', prioridade = '".$prioridade."', problema = '".$problema."', observacoes = '".$observacoes."', dh_encerramento = '".$dh_encerramento."' WHERE ordem_de_servico.id_os='".$id_os."';";
	}
	else{
		$sqlinsert = "UPDATE ordem_de_servico SET categoria = '".$categoria."', status_os = '".$status_os."', prioridade = '".$prioridade."', problema = '".$problema."', observacoes = '".$observacoes."' WHERE ordem_de_servico.id_os='".$id_os."';";
	}
	mysqli_query($conecta, $sqlinsert) or die ("Não foi possível inserir os dados no banco!");
	/****************************** Fim do update no banco ******************************/


	/****************************** INSERINDO OS LOGS DE CADASTRO DE ORDEM DE SERVIÇO NO BANCO DE DADOS ******************************/
	/* Recebendo dados do formulário */

	$ip_user	=	$_SERVER['REMOTE_ADDR'];	
	$fk_usuario =	$_SESSION['id_usuario'];
	$evento     =   'O.S. n°'.$id_os.', '.$atualizacao;
	$tipo       =   'ATUALIZAÇÃO NA ORDEM DE SERVIÇO';
	$dh_log     =	date('Y-m-d H:i:s');

	//echo $ip_user;
	//echo "<br>";
	//echo $evento;
	//echo "<br>";
	//echo $tipo;
	//echo "<br>";
	//echo $dh_log;
	//echo "<br>";
	//echo $fk_usuario;
	//echo "<br>";

	$sqlinsertlog 	= "INSERT INTO logs (ip_user, fk_usuario, evento, tipo, dh_log) VALUES
	
	('$ip_user', '$fk_usuario', '$evento', '$tipo', '$dh_log')";
	
	mysqli_query($conecta, $sqlinsertlog) or die ("Não foi possível inserir os dados de log no banco!");

	echo "<script> 
			window.alert('Ordem atualizada com sucesso!');
			window.location='exibe_ordens.php';
		</script>";
?>