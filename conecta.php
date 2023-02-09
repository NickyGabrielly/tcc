<?php 

$hostname	=	"localhost";
$username	=	"scos";
$password	=	"bancotcc";
$banco		=	"scos";

//Criar a conexão com o banco de dados
$conecta	=	mysqli_connect($hostname, $username, $password, $banco);

//Verifica conexão com o banco de dados
if(!$conecta) 
{
	die("A conexão falhou: ".mysqli_connect_error());
}		

//echo "Conexão estabelecida com sucesso!";

?>