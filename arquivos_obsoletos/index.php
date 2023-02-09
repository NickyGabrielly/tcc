<?php
	session_start();
	if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
        header('location: ../index_fofo.php');
    }
	if ($_SESSION['nivel'] != 1) {
		header('location: ../index_fofo.php');
	}

	$path = "../arquivos_obsoletos/";
	$diretorio = dir($path);

	echo "<h2>Lista de Arquivos do diretório '<strong>".$path."</strong>':</h2><br>";
	while($arquivo = $diretorio -> read()){
		echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
	}
	$diretorio -> close();
?>