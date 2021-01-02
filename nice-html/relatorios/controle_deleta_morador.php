
<?php

require 'Class.relatorios.php';

@$id = $_POST['id'];

$valida_delete = new  Relatorios();
$valida_delete->deletarEcriaHistoricoDeDeleteMorador($id);


?>