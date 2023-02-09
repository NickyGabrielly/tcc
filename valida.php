<?php
	session_start();
	date_default_timezone_set('America/Sao_Paulo');

	//Recebe os valores provenientes da tela de LOGIN
	$login  =       $_POST['login'];
	$senha  =       md5(md5(md5(md5($_POST["senha"]))));


	//echo 'dados recebidos: <br>'.$login.'<br>'.$senha;

	//Conexão com o banco de dados
	require ("conecta.php");
	$conexao    =   mysqli_select_db($conecta, "scos");

	//Consulta SQL
	$sqllogin   =   "SELECT * FROM usuario WHERE login = '".$login."' AND senha='".$senha."' AND ativo = 1";

	$resultado  =   mysqli_query($conecta, $sqllogin);
	$quant      =   mysqli_num_rows($resultado);
    
	//Consulta o nome do usuario que fez o login e guarda em uma session para exibir futuramente
	while($registro = mysqli_fetch_assoc($resultado)) 
	{
		$_SESSION['id_usuario']		=	$registro['id_usuario'];		
		$_SESSION['nome']			=	$registro['nome'];
		$_SESSION['email']			=	$registro['email'];
		$_SESSION['nivel']			=	$registro['nivel'];
		$_SESSION['foto']			=	$registro['foto'];
		$_SESSION['login']			=	$registro['login'];
		$_SESSION['dark']           =   $registro['dark'];
		$_SESSION['ativo']			=	$registro['ativo'];
		
	}

	//Consultar se os resultados estao corretos
	//echo "Total de resultados: ".$quant;

	if ($quant > 0){
			//////// INSERINDO OS LOGS DE login bem sucedido NO BANCO DE DADOS ///

			$ip_user	=	$_SERVER['REMOTE_ADDR'];	
			$fk_usuario =	$_SESSION['id_usuario'];
			$evento     =   'Login bem sucedido, '.$_SESSION['nome'].' entrou';
			$tipo       =   'ACESSO AO SISTEMA';
			$dh_log     =	date('Y-m-d H:i:s');

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

			/////fim da inserção de log/////////////////////
	    header('location: principal.php');
	    $_SESSION['login']  =   $login;
	}

	else{
	    unset($_SESSION['login']);
	    $_SESSION['msg_login']  =   "<b>Login</b> ou <b>senha</b> incorretos!";
		$_SESSION['acessado']  =	1;

		//////// INSERINDO OS LOGS DE CADASTRO DE login mal sucedido NO BANCO DE DADOS ///

			$ip_user	=	$_SERVER['REMOTE_ADDR'];	
			$fk_usuario =	0;
			$evento     =   'Login mal sucedido, usuário ('.$login.') ou senha incorretos';
			$tipo       =   'TENTATIVA DE ACESSO AO SISTEMA';
			$dh_log     =	date('Y-m-d H:i:s');

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
		
		//fim da inserção de log//

	    header('location: index_fofo.php');
	}
?>
