<?php
require('Contas_class.php');
@$observacao = $_POST['observacao'];
@$referente = $_POST['referente'];
@$tipo = $_POST['tipo'];
@$valorconta = $_POST['valorconta'];

if(empty($observacao) && empty($referente) && empty($tipo) && empty($valorconta)){
    
    echo "<script>alert('Vazio');window.location='contas_a_pagar.php'; </script>";
}else{
    echo $observacao. "<br>";
    echo $referente. "<br>";
    echo $tipo. "<br>";
    echo $valorconta. "<br>";
    echo "validado ". "<br>";
    
    $contas = new Contas();
    $contas->validaNovaConta($observacao,$referente,$tipo,$valorconta);
}


