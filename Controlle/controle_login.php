<?php
include_once'../model/Class.configue.php';

@$email = $_POST['email'];
@$senha = $_POST['senha'];

echo $senha;

$login = new Validacao();	

	if(isset($_POST['email']) & !empty('senha') ){
		
    	$login->validaLog($email,$senha);
	
	};

?>