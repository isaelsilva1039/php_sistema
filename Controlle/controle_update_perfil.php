<?php

    @$id = $_POST['id'];
    @$nome = $_POST['nome'];
    @$email = $_POST['email'];
    @$senha = $_POST['senha'];
    
    include ('../model/Class.configue.php');
    $valida = new Validacao();
    $valida->idUsuario    = $id;
    $valida->nomeUsuario  = $nome;
    $valida->emailUsuario = $email;
    $valida->senhaUsuario = $senha;
    $valida->uoDatePerfilUsuarioLogado();
