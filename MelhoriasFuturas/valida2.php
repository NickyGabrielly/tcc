<?php
	session_start();

	//Recebe os valores provenientes da tela de LOGIN
	$login  =       $_POST['login'];
	$senha  =       $_POST['senha'];

	//echo 'dados recebidos: <br>'.$login.'<br>'.$senha;

	//Conexão com o banco de dados
	require ("conecta.php");
	$conexao    =   mysqli_select_db($conecta, "scos");

	//Consulta SQL
	$sqllogin   =   "SELECT * FROM usuario WHERE login = '".$login."' AND senha='".$senha."' AND ativo = 1";

	$resultado  =   mysqli_query($conecta, $sqllogin);
	$quant      =   mysqli_num_rows($resultado);

	//Consultar se os resultados estao corretos
	//echo "Total de resultados: ".$quant;

	if ($quant > 0){
	    header('location: principal.php');
	    $_SESSION['login']  =   $login;
	}

	else{
	    unset($_SESSION['login']);
	    $_SESSION['msg_login']  =   "<b>Usuario</b> ou <b>senha</b> incorretos!";
		$_SESSION['acessado']  =	1;
	    header('location: lindex.php');
	}

?>
