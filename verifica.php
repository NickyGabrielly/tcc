<?php
    session_start();
    if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
        header('location: index_fofo.php');
    }
?>
