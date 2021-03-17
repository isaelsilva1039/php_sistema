<?php
// include ('Erros_class.php');
// include('../controlle/controla_sessao.php');
require('Erros_class.php');
session_start();

@$usuarioLogado    = $_SESSION['nome'];
@$filial     = $_POST['filial'];
@$cidade     = $_POST['cidade'];
@$rua        = $_POST['rua'];
@$tipoerro   = $_POST['tipoerro'];
@$nomeobjeto = $_POST['nomeobjeto'];
@$usuarioerro = $_POST['usuarioerro'];
@$nomeerrocolaborador = $_POST['nomeerrocolaborador'];
$ca = new ErosLn();
$ca->cadastraerro($usuarioLogado, $filial, $cidade, $rua, $tipoerro, $nomeobjeto, $nomeerrocolaborador,$usuarioerro);
