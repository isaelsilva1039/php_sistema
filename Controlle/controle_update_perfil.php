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
@$nome = $_POST['nome'];
@$email = $_POST['email'];
@$senha = $_POST['senha'];


$valida = new Validacao();
$valida->idUsuario = $id;
var_dump($valida->foto = $fotoNome);
$valida->nomeUsuario = $nome;
$valida->emailUsuario = $email;
$valida->senhaUsuario = $senha;
$valida->uoDatePerfilUsuarioLogado();
