<?php
session_start();
if ($_SESSION['login'] != '') {
	header('location: principal.php');
}
header('location: index_fofo.php');

?>
