<?php 

@$id                    = $_POST['id'];
@$nome_completo         = $_POST['nome'];
@$cargo                 = $_POST['cargo'];
@$cpf                   = $_POST['cpf'];
@$data_entrada_admisao  = $_POST['admisao'];
@$horario               = $_POST['horario'];
@$salario               = $_POST['salario'];

require 'Class.relatorios.php';

$editaFuncionario = new Relatorios();
$editaFuncionario->editaFuncionario($nome_completo,$cargo,$cpf,$data_entrada_admisao,$horario,$salario);