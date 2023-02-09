<?php
require('conecta.php')
$sqldados = "SELECT * FROM usuario WHERE id_usuario ='".$_SESSION['id_usuario']."';";
$busca = mysqli_query($conecta, $sqldados);
$dados = mysqli_fetch_assoc($busca);

echo $dados['nome'];
?>