<?php
    session_start(); 
    date_default_timezone_set('America/Sao_Paulo');
    require ('conecta.php');
    //////// INSERINDO OS LOGS DE login bem sucedido NO BANCO DE DADOS ///

            $ip_user    =   $_SERVER['REMOTE_ADDR'];    
            $fk_usuario =   $_SESSION['id_usuario'];
            $evento     =   $_SESSION['nome']." saiu";
            $tipo       =   "SAIR";
            $dh_log     =   date('Y-m-d H:i:s');

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

            $sqlinsertlog   = "INSERT INTO logs (ip_user, fk_usuario, evento, tipo, dh_log) VALUES
            
            ('$ip_user', '$fk_usuario', '$evento', '$tipo', '$dh_log');";
            
            mysqli_query($conecta, $sqlinsertlog) or die ("Não foi possível inserir os dados de log no banco!");/**/

            /////fim da inserção de log/////////////////////

    echo "<script>
        window.location='sair.php';
    </script>";
?>
