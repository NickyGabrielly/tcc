<?php
	session_start();
	if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
		header('location: index_fofo.php');
	}
	if ($_SESSION['login'] != "" and $_SESSION['nome'] != "" and $_SESSION['nivel'] != 1) {
		header('location: principal.php');
	}
	date_default_timezone_set('America/Sao_Paulo');
	require("conecta.php");
    //include 

    $id_usuario      	=   $_POST["id_usuario"];
    $nome				=	$_POST["nome"];
	$email				=	$_POST["email"];
	$cpf				=	$_POST["cpf"];
	$nivel				=	$_POST["nivel"];
	$login				=	$_POST["login"];
	$senha				=	md5(md5(md5(md5($_POST["senha"]))));
	$ativo				=	$_POST["ativo"];

	/*echo $nome;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $cpf;
	echo "<br>";
	echo $nivel;
	echo "<br>";
	echo $login;	
	echo "<br>";
	echo $senha;	
	echo "<br>"; 
	echo $ativo;	
	echo "<br><br>";*/

	if ($_POST["senha"] == "") {
		$sqlinsert = "UPDATE usuario SET nome = '".$nome."', email = '".$email."', cpf = '".$cpf."', nivel = '".$nivel."', login = '".$login."', ativo = '".$ativo."' WHERE usuario.id_usuario='".$id_usuario."';";
	}
	else{
    $sqlinsert = "UPDATE usuario SET nome = '".$nome."', email = '".$email."', cpf = '".$cpf."', nivel = '".$nivel."', login = '".$login."', senha = '".$senha."', ativo = '".$ativo."' WHERE usuario.id_usuario='".$id_usuario."';";
	}	
    mysqli_query($conecta, $sqlinsert) or die ("Não foi possível atualizar os dados!");

    /****************************** INSERINDO OS LOGS DE ATUALIZAÇÃO DE USUÁRIO NO BANCO DE DADOS ******************************/
	/*************** Recebendo dados do formulario ***************/

	$ip_user	=	$_SERVER['REMOTE_ADDR'];	
	$fk_usuario =	$_SESSION['id_usuario'];

	if ($_POST["senha"] == "") {
		$evento     =   'atualizou '.$nome;
	}
	if ($_POST["senha"] != "") {
		$evento     =   'atualizou '.$nome.', senha alterada';
	}

	//$evento   =   $nome.' foi atualizado(a), nível '.$nivel.'login: '.$login.'';
	$tipo       =   'USUÁRIO ATUALIZADO';
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
/****************************** FIM DA INSERÇÃO DE LOGS ******************************/

    echo "<script>
	    window.alert('Dados atualizados com sucesso!'); 
	    window.location='exibe_usuario.php'
    </script>";
?>
