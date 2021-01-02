<?php	
	session_start();

	include_once 'Class.relatorios.php';
	$cargo = $_POST['cargo'];
	$filtro_cargo = new  Relatorios();
	$filtro_cargo->RelatorioFuncionarios($cargo);
	header("Location: relatorio_funcionarios.php");

	

?>