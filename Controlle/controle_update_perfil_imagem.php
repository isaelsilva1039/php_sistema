<?php

include('../model/Class.configue.php');

$foto = $_FILES['foto'];


//nomr do arquivo
$fotoNome = $_FILES['foto']['name'];

//nome temporario
$tmp_name = $_FILES['foto']['tmp_name'];

//movendo o arquivo
$up = move_uploaded_file($_FILES['foto']['tmp_name'], '../nice-html/img/' . $fotoNome);



@$id = $_POST['id'];

$valida = new Validacao();
$valida->idUsuario = $id;
$valida->foto = $fotoNome;
$valida->updadePerfilDaimagemDoUsuarioLogado();
