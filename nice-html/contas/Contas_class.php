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
        if ($this->parcela > '0') {
            for ($i = 0; $i  < $this->parcela; $i++) {

                if ($i === 0) {
                    $qtd = '31 days';
                }

                if ($i === 1) {
                    $qtd = '62 days';
                }

                if ($i === 2) {
                    $qtd = '92 days';
                }
                if ($i === 3) {
                    $qtd = '122 days';
                }

                if ($i === 4) {
                    $qtd = '152 days';
                }

                if ($i === 5) {
                    $qtd = '182 days';
                }

                if ($i === 6) {
                    $qtd = '212 days';
                }

                if ($i === 7) {
                    $qtd = '242 days';
                }

                if ($i === 8) {
                    $qtd = '272 days';
                }

                if ($i === 9) {
                    $qtd = '302 days';
                }

                if ($i === 10) {
                    $qtd = '332 days';
                }

                if ($i === 11) {
                    $qtd = '362 days';
                }

                if ($i === 12) {
                    $qtd = '392 days';
                }

                $data_mais31   = date('d/m/Y', strtotime($qtd, strtotime($this->data)));
                $valor_parcela = $this->valor / $this->parcela;
                $pdo = parent::get_instace();
                $smts = "INSERT INTO tb_contas (data,descricao,valor,parcela,categoria,pago) value (:data,:descricao,:valor,:parcela,:categoria,:pago)";
                $smts = $pdo->prepare($smts);
                $smts->bindValue(":data", $data_mais31);
                $smts->bindValue(":descricao", $this->descricao);
                $smts->bindValue(":valor", $valor_parcela);
                $smts->bindValue(":parcela", $this->parcela);
                $smts->bindValue(":categoria", $this->categoria);
                $smts->bindValue(":pago", $this->pago);
                $smts->execute();
                echo "<script>alert('$this->parcela Contada Cadastrada Com sucesso , parcela ');window.location='contas_a_pagar.php?Sucesso'; </script>";
            }
        }
    }


    public function relatorioDeContasApagar()
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM  tb_contas ";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }
}
