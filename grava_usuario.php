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

	$nome			=	$_POST["nome"];
	$email			=	$_POST["email"];
	$cpf			=	$_POST["cpf"];
	$nivel			=	$_POST["nivel"];
	$foto			=	$_POST["arquivo"];
	$login			=	$_POST["login"];
	$senha			=	md5(md5(md5(md5($_POST["senha"]))));
	$ativo			=	$_POST["ativo"];

	/*echo $nome;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $cpf;
	echo "<br>";
	echo $nivel;
	echo "<br>";
	echo $foto;
	echo "<br>";
	echo $login;	
	echo "<br>";
	echo $senha;	
	echo "<br>"; 
	echo $ativo;	
	echo "<br><br>";*/

	$sqlinsert = "INSERT INTO usuario (nome, email, cpf, nivel, foto, login, senha, ativo) VALUES
	
	('$nome', '$email', '$cpf', '$nivel', '$foto', '$login', '$senha', '$ativo')";
	
	mysqli_query($conecta, $sqlinsert) or die ("Não foi possível inserir os dados no banco!");

	/*echo "
	<script> 
		window.alert('Usuário cadastrado com sucesso!');
		window.location='exibe_usuario.php';
	</script>";
	*/

	/****************************** INSERINDO OS LOGS DE CADASTRO DE USUÁRIO NO BANCO DE DADOS ******************************/
	// Recebendo dados do formulario
	$ip_user		=   $_SERVER['REMOTE_ADDR'];	
	$fk_usuario 	=   $_SESSION['id_usuario'];

	if ($nivel == 1) {
		$evento    	=   $nome.', de nível administrador, login: '.$login.'';
	}

	if ($nivel != 1) {
		$evento    	=   $nome.', de nível técnico, login: '.$login.'';
	}

	$tipo       	=   'NOVO USUÁRIO';
	$dh_log     	=	date('Y-m-d H:i:s');

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
	/****************************** FIM DA INSERÇÃO DE LOGS ******************************/


	/****************************** GRAVA FOTO DO USUÁRIO ******************************/
    $id_usuario 		= mysqli_insert_id($conecta);  //Guarda o ID retornado da função - Gerado pelo AUTO_INCREMENTO do MySQL

    // Pasta onde a arquivo vai ser salvo
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
    	echo "<script>window.location='exibe_usuario.php'</script>";
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
    else 
    {
	    // Primeiro verifica se deve trocar o nome do arquivo
	    if ($_UP['renomeia'] == true) {
		    // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
		    $nome_final = time().'.jpg';
	    } 

	    else 
	    {
		    // Mantém o nome original do arquivo
		    $nome_final = $_FILES['arquivo']['name'];
	    }
     
	    // Depois verifica se é possível mover o arquivo para a pasta escolhida
       if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].date('Ymd_His').$nome_final)) 
	    {
		    // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
		    echo "Upload efetuado com sucesso!";
		    $nome_concatenado = date('Ymd_His') . $nome_final;
		    
		    //echo '<br /><a href="' . $nome_concatenado. '">Clique aqui para acessar o arquivo</a>';
	    }

	    else
	    {
		    // Não foi possível fazer o upload, provavelmente a pasta está incorreta
		    echo "Não foi possível enviar o arquivo, tente novamente";
	    }
    }
    /****************************** FIM GRAVA FOTO DO USUÁRIO ******************************/


    /****************************** ENVIADO DADOS PARA O BANCO DE DADOS ******************************/
    //Recebe os valores para enviar para o banco de dados

    $foto   	=   $nome_concatenado;
    $sqlinsert  = "UPDATE usuario set foto='".$foto."' WHERE usuario.id_usuario='".$id_usuario."';";
    mysqli_query($conecta, $sqlinsert) or die ("Não foi possivel inserir a foto no BD!");

	echo "
	<script> 
		window.alert('Usuário cadastrado com sucesso!');
		window.location=' exibe_usuario.php';
	</script>";
?>