<?php
include('Contas_class.php');

@$data       = $_POST['data'];
@$descricao = $_POST['descricao'];
@$valor     = $_POST['valor'];
@$parcela   = $_POST['parcela'];
@$categoria = $_POST['categoria'];
@$pago      = $_POST['pago'];


$Contas = new Contas();
$Contas->data      = $data;
$Contas->descricao = $descricao;
$Contas->valor     = $valor;
$Contas->parcela   = $parcela;
$Contas->categoria = $categoria;
$Contas->pago       = $pago;
$Contas->validaNovaConta();


