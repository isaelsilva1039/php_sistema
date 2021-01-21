<?php
include '../model/Class.configue.php';

@$nome = $_POST['nome'];
@$email = $_POST['email'];
@$senha = $_POST['senha'];
@$nivel = $_POST['nivel'];

$ObjCadastros = new Validacao();
$ObjCadastros->nome = $nome;
$ObjCadastros->email = $email;
$ObjCadastros->senha = $senha;
$ObjCadastros->nivel = $nivel;
$ObjCadastros->cadastrasUsuariosComNivelDeAcessos();

