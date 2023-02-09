<?php
	session_start();
	if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
		header('location: index_fofo.php');
	}
	date_default_timezone_set('America/Sao_Paulo');
	require("conecta.php");

	$id_equipamento    	= 	$_POST["id_equipamento"];
	$n_patrimonio		=	$_POST["n_patrimonio"];
	$nome_equipamento	=	$_POST["nome_equipamento"];
	$especificacao		=	$_POST["especificacao"];
	$local_origem		=	$_POST["local_origem"];
	$ativo		    	=	$_POST["ativo"];

	//echo $id_equipamento;
	//echo "<br>";
	//echo $n_patrimonio;
	//echo "<br>";
	//echo $nome_equipamento;
	//echo "<br>";
	//echo $especificacao;
	//echo "<br>";
	//echo $local_origem;
	//echo "<br>";
	//echo $ativo;
	//echo "<br><br>";

	$sqlinsert = "UPDATE equipamento SET n_patrimonio = '".$n_patrimonio."', nome_equipamento = '".$nome_equipamento."', especificacao = '".$especificacao."', local_origem = '".$local_origem."', ativo = '".$ativo."' WHERE equipamento.id_equipamento='".$id_equipamento."';";

	mysqli_query($conecta, $sqlinsert) or die ("Não foi possível inserir os dados no banco!");


	/****************************** INSERINDO OS LOGS DE ATUALIZAÇÃO DE USUÁRIO NO BANCO DE DADOS ******************************/
	 
	/*************** Recebendo dados do formulario ***************/

	$ip_user		=	$_SERVER['REMOTE_ADDR'];	
	$fk_usuario 	=	$_SESSION['id_usuario'];
	$evento     	=   'atualizou '.$nome_equipamento.': '.$n_patrimonio;
	$tipo       	=   'EQUIPAMENTO ATUALIZADO';
	$dh_log     	=	date('Y-m-d H:i:s');

	echo $ip_user;
	echo "<br>";
	echo $evento;
	echo "<br>";
	echo $tipo;
	echo "<br>";
	echo $dh_log;
	echo "<br>";
	echo $fk_usuario;
	echo "<br>";

	$sqlinsertlog 	= "INSERT INTO logs (ip_user, fk_usuario, evento, tipo, dh_log) VALUES
	
	('$ip_user', '$fk_usuario', '$evento', '$tipo', '$dh_log')";
	
	mysqli_query($conecta, $sqlinsertlog) or die ("Não foi possível inserir os dados de log no banco!");

	/****************************** FIM DA INSERÇÃO DOS LOGS ******************************/


	echo "<script> 
			window.alert('Equipamento cadastrado com sucesso!');
			window.location='exibe_equipamento.php';
		</script>";

		//$ordemmaisrecente		= mysqli_insert_id($conecta);  //Guarda o ID retornado da função - Gerado pelo AUTO_INCREMENTO do MySQL
        //$id_campanha	        =	$ordemmaisrecente;
?>
