<?php

require('../../conexao/conexao.php');
class Contas extends Conexao
{

    public $data;
    public $descricao;
    public $valor;
    public $parcela;
    public $categoria;
    public $pago;

    public function validaNovaConta()
    {
        $data      =   $this->data;
        $descricao = $this->descricao;
        $valor     = $this->valor;
        $parcela   = $this->parcela;
        $categoria = $this->categoria;
        $pago      = $this->pago;

        if ($this->parcela === 'avista') {

            $pdo = parent::get_instace();
            $smts = "INSERT INTO tb_contas (data,descricao,valor,parcela,categoria,pago) value (:data,:descricao,:valor,:parcela,:categoria,:pago)";
            $smts = $pdo->prepare($smts);
            $smts->bindValue(":data", $this->data);
            $smts->bindValue(":descricao", $this->descricao);
            $smts->bindValue(":valor", $this->valor);
            $smts->bindValue(":parcela", $this->parcela);
            $smts->bindValue(":categoria", $this->categoria);
            $smts->bindValue(":pago", $this->pago);
            $smts->execute();

            if ($smts->rowCount() > 0) {
                echo "<script>alert('Cdastrado Nova Conta ');window.location='contas_a_pagar.php?Sucesso'; </script>";
            }
        }

        // com duas parcelas 
        if ($this->parcela === '2') {

            $valor_parcela = $this->valor / $this->parcela;

            $data_mais31 = date('d/m/Y', strtotime('+31 days', strtotime($this->data)));
            $this->inserParcelada($data_mais31, $descricao, $valor_parcela, $categoria, $pago);
            var_dump($this->parcela);
        }
    }

    public function inserParcelada($data_mais31, $descricao, $valor_parcela, $categoria, $pago)
    {
        $pdo = parent::get_instace();
        $smts = "INSERT INTO tb_contas (data,descricao,valor,parcela,categoria,pago) value (:data,:descricao,:valor,:parcela,:categoria,:pago)";
        $smts = $pdo->prepare($smts);
        $smts->bindValue(":data", $data_mais31);
        $smts->bindValue(":descricao", $descricao);
        $smts->bindValue(":valor", $valor_parcela);
        $smts->bindValue(":parcela", $valor_parcela);
        $smts->bindValue(":categoria", $categoria);
        $smts->bindValue(":pago", $pago);
        $smts->execute();

        if ($smts->rowCount() > 0) {
            echo "<script>alert('Cdastrado Nova Conta');window.location='contas_a_pagar.php?Sucesso'; </script>";
        }
    }
}
