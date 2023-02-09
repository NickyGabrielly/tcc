<?php
	session_start();

	if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
		header('location: index_fofo.php');
	}

	date_default_timezone_set('America/Sao_Paulo');
	require("conecta.php");

	$categoria				=	$_POST["categoria"];
	$status_os				=	"Aberta";
	$fk_usuario_abertura 	=	$_SESSION["id_usuario"];
	$prioridade				=	$_POST["prioridade"];
	$problema				=	$_POST["problema"];
	$observacoes	   		=	$_POST["observacoes"];
	$dh_abertura			=	date('Y-m-d H:i:s'); 
	$foto_equipamento		=	$_POST["foto_equipamento"];
	$n_patrimonio			= 	$_POST["n_patrimonio"];

	//echo $categoria;
	//echo "<br>";
	//echo $status_os;
	//echo "<br>";
	//echo $prioridade;
	//echo "<br>";
	//echo $problema;
	//echo "<br>";
	//echo $observacoes;
	//echo "<br>";
	//echo $dh_abertura;	
	//echo "<br>";
	/*echo $dh_encerramento;	
	echo "<br>"; 
	echo $foto_equipamento;	
	echo "<br><br>";*/

	$sqlinsert = "INSERT INTO ordem_de_servico (categoria, fk_usuario_abertura, status_os, prioridade, problema, observacoes, dh_abertura, foto_equipamento) VALUES
	('$categoria', '$fk_usuario_abertura', '$status_os', '$prioridade', '$problema', '$observacoes', '$dh_abertura', '$foto_equipamento')";

	mysqli_query($conecta, $sqlinsert) or die ("Não foi possível inserir os dados de os no banco!");

	// Inserindo na tabela eventos o equipamento 
	$ordem 		= mysqli_insert_id($conecta);  //Guarda o ID retornado da função - Gerado pelo AUTO_INCREMENTO do MySQL
	$id_ordem	=	$ordem;
	$busca		=	"SELECT * FROM equipamento WHERE id_equipamento='".$n_patrimonio."';";
	$vai  		=   mysqli_query($conecta, $busca);
	$achou      =   mysqli_fetch_array($vai);

	$id_os 			=	$id_ordem;
	$id_usuario		=	$_SESSION['id_usuario'];
	$id_equipamento	=	$n_patrimonio;
	$evento			=	"Cadastro da OS";
	$data_hora		=	date('Y-m-d H:i:s');

	$sqlinsertevento = "INSERT INTO evento_os (id_os, id_usuario, id_equipamento, evento, data_hora) VALUES

	('$id_os', '$id_usuario', '$id_equipamento', '$evento', '$data_hora')";

	mysqli_query($conecta, $sqlinsertevento) or die ("Não foi possível inserir os dados de evento no banco!");


	/****************************** INSERINDO OS LOGS DE CADASTRO DE ORDEM DE SERVIÇO NO BANCO DE DADOS ******************************/
	// Recebendo dados do formulário 
	$ip_user	=	$_SERVER['REMOTE_ADDR'];	
	$fk_usuario =	$_SESSION['id_usuario'];
	$evento     =   'OS para o equipamento '.$achou['n_patrimonio'].', com o problema '.$problema;
	$tipo       =   'NOVA ORDEM DE SERVIÇO';
	$dh_log     =	date('Y-m-d H:i:s');

	/*echo $ip_user;
	echo "<br>";
	echo $evento;
	echo "<br>";
	echo $tipo;
	echo "<br>";
	echo $dh_log;
	echo "<br>";
	echo $fk_usuario;
	echo "<br>";*/

	$sqlinsertlog 	= "INSERT INTO logs (ip_user, fk_usuario, evento, tipo, dh_log) VALUES

	('$ip_user', '$fk_usuario', '$evento', '$tipo', '$dh_log')";

	mysqli_query($conecta, $sqlinsertlog) or die ("Não foi possível inserir os dados de log no banco!");

	echo "
	<script> 
		window.alert('Ordem cadastrada com sucesso!');
		window.location='exibe_ordens.php';
	</script>";
?>