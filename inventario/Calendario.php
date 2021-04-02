<?php
include '../conexao/conexao.php';

class Calendario extends Conexao
{

    public function ExibirCaledario()
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM  tb_calendario order by inicio";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }
}

