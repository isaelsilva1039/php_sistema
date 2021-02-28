<?php
include '../model/Class.configue.php';
/*
$foto = $_FILES['foto'];
var_dump($foto['name']);
var_dump($_FILES);
*/
//arquivo compelo array
$foto = $_FILES['foto'];
//nomr do arquivo
$fotoNome = $_FILES['foto']['name'];
//nome temporario
$tmp_name = $_FILES['foto']['tmp_name'];
//movendo o arquivo
$up = move_uploaded_file($_FILES['foto']['tmp_name'],'../nice-html/img/'.$fotoNome);

@$nome = $_POST['nome'];
@$email = $_POST['email'];
@$senha = $_POST['senha'];
@$nivel = $_POST['nivel'];

$ObjCadastros = new Validacao();
$ObjCadastros->foto = $fotoNome;
$ObjCadastros->nome = $nome;
$ObjCadastros->email = $email;
$ObjCadastros->senha = $senha;
$ObjCadastros->nivel = $nivel;
$ObjCadastros->cadastrasUsuariosComNivelDeAcessos();

//não conseguir finalizar o update da imagem,
// deu probelma pra envia do dormulario pra pag controle