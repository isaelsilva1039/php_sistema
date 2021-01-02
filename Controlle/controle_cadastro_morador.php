<?php	
	session_start();

	include_once '../model/Class.configue.php';
    $nome_completo =$_POST['nome_completo'];
    $cpf           = $_POST['cpf'];
    $data_entrada  =$_POST['data_entrada'];
	$bloco 		   = $_POST['bloco'];
	$nivel 		   = $_POST['nivel'];
	$apartamento   = $_POST['apartamento'];
	$aluguel       = $_POST['aluguel'];

	// echo $nome_completo."<br>";
	// echo $cpf."<br>";
	// echo $data_entrada."<br>";
	// echo $bloco."<br>";
	// echo $nivel."<br>";
	// echo $apartamento."<br>";

	$valida_cadastros_morador = new  Validacao();
	$valida_cadastros_morador->ValidaCadastroMorador($nome_completo,$cpf,$data_entrada,$bloco,$apartamento,$nivel,$aluguel);

?>