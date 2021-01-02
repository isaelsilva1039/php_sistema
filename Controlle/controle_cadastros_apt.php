<?php	
	session_start();

	include_once '../model/Class.configue.php';

	$bloco 		 = $_POST['bloco'];
	$nivel 		 = $_POST['nivel'];
	$apartamento = $_POST['apartamento'];

	$valida_cadastros = new  Validacao();
	$valida_cadastros->ValidaCadastroCondominio($bloco,$nivel,$apartamento);

?>