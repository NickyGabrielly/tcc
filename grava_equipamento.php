<?php
	session_start();

    if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
		header('location: index_fofo.php');
	}	

	date_default_timezone_set('America/Sao_Paulo');
	require("conecta.php");

	$n_patrimonio		=	$_POST["n_patrimonio"];
	$nome_equipamento	=	$_POST["nome_equipamento"];
	$especificacao		=	$_POST["especificacao"];
	$local_origem		=	$_POST["local_origem"];
	$ativo				=	1;

	/*echo $n_patrimonio;
	echo "<br>";
	echo $nome_equipamento;
	echo "<br>";
	echo $especificacao;
	echo "<br>";
	echo $local_origem;
	echo "<br>";
	echo $ativo;
	echo "<br><br>";*/

	$sqlinsert = "INSERT INTO equipamento (n_patrimonio, nome_equipamento, especificacao, local_origem, ativo) VALUES
	
	('$n_patrimonio', '$nome_equipamento', '$especificacao', '$local_origem', '$ativo')";
	
	mysqli_query($conecta, $sqlinsert) or die ("Não foi possível inserir os dados no banco!");

	echo "
	<script> 
		window.alert('Equipamento cadastrado com sucesso!');
		window.location='exibe_equipamento.php';
	</script>";
?>
