
<?php

require 'Class.relatorios.php';

@$id = $_POST['id'];
echo $id;

$valida_delete = new  Relatorios();
$valida_delete->deletarEcriaHistoricoDeDelete($id);

?>