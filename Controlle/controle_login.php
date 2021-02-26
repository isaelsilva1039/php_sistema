<?php

include('../model/conexao.php');
@$email = $_POST['email'];
@$senha = $_POST['senha'];

$sql = $conn->query("SELECT * FROM tb_login Where email = '$email' and senha = '$senha'");
$sql->execute();

if ($sql->rowCount() > 0) {
	$sql = $sql->fetch();
	session_start();
	$sessao = $_SESSION['id'] = $sql['id'];
	$nivel = $_SESSION['nivel'] = $sql['nivel'];
	$nome = $_SESSION['nome'] = $sql['nome'];
    $nome = $_SESSION['email'] = $sql['email'];


    if ($_SESSION['nivel'] === '1') {

		header("location: ../nice-html/ltr/index.php");
	} elseif ($_SESSION['nivel'] === '2') {

		header("location: ../auditoria/painel_adm.auditoria.php");
	} elseif ($_SESSION['nivel'] === '3') {
		header("location: ../auditoria/painel_adm_auditoria_supervisor.php");
	} else {
		echo "Não deu certo ";
	}
} else {
	header("location: ../index.php?erro");
}
