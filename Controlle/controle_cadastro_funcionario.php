<?php

session_start();

include_once '../model/Class.configue.php';
$nome_completo = $_POST['nome_completo'];
$cpf = $_POST['cpf'];
$data_entrada_admisao = $_POST['data_entrada_admisao'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$horario = $_POST['horario'];

$valida_cadastros_funcionario = new Validacao();
$valida_cadastros_funcionario->ValidaCadastrofuncionario($nome_completo, $cpf, $data_entrada_admisao, $cargo, $salario, $horario);
?>