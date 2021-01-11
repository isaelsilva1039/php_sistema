<?php

include('../model/conexao.php');

class Relatorioserros extends Conexao
{
    public $limite;
    public $filial;
    public $dataInicio;
    public $dataFim;
    public function relatorioErrosAuditoriaNoturna()
    {
        $this->limite;
        $this->filial;
        // filtro se o limite de paginas for igual a todo e filial não ouver selesão e ouver data: filtro so por data 
        if ($this->limite === 'todos' && $this->filial === false && $this->dataInicio) {

            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE data = '$this->dataInicio'  order by id    ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  "QTD ENCONTRADO :" . $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
            return $slq->fetchAll();
        }
        // filtro 
        if ($this->limite === 'todos' && $this->filial && $this->dataInicio) {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE filial = $this->filial and data = '$this->dataInicio'  order by id    ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  "QTD ENCONTRADO :" . $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
            return $slq->fetchAll();
        }

        if ($this->limite == 'todos' && $this->filial === false) {

            // $data = date("Y-m-d");
            $dia = date("Y-m-d");
            // $data = implode("/", array_reverse(explode("-", $data)));
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria where data ='$dia' ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  "QTD ENCONTRADO :" . $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
            return $slq->fetchAll();
        }

        if ($this->limite == 'todos' && isset($this->filial)) {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE filial Like '%" . $this->filial . "%'   ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  "QTD ENCONTRADO :" . $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
            return $slq->fetchAll();
        }

        if (isset($this->filial)  && isset($this->limite)) {

            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE filial Like '%" . $this->filial . "%'   order by id  LIMIT $this->limite  ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  "QTD ENCONTRADO :" . $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
            return $slq->fetchAll();
        }
        if (!isset($this->filial) && $this->limite == 'todos' && isset($this->dataInicio)) {
            // Frilto com filial e data e limite a ser mostrado por pagina

            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE filial Like '%" . $this->filial . "%'  AND  data = $this->dataInicio  ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  "QTD ENCONTRADO :" . $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
            return $slq->fetchAll();
        }
    }

    public function limite()
    {
        if (@$_GET['limite']) {
            @$limite = $_GET['limite'];
            $this->limite = $limite;
        } else {
            $this->limite = 'todos';
        }
    }

    public function Filto()
    {
        if (@$_GET['filial']) {
            @$filial = $_GET['filial'];
            $this->filial = $filial;
        } else {
            $this->filial = false;
        }
    }

    public function datasFiltros()
    {
        if (@$_GET['datainicial']) {
            @$datainicial = $_GET['datainicial'];
            $this->dataInicio = $datainicial;
        } else {
            $this->dataInicio = false;
        }
    }
}




class Cardes extends Relatorioserros
{
    public $filialCards;

    public function quantidadeErroos()
    {
        if ($this->filialCards === 'Filial') {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        } else {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE  filial Like '%" . $this->filialCards . "%'   ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        }
    }

    public function quantidadeCancelados()
    {
        if ($this->filialCards === 'Filial') {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria where tipoerro ='Cancelado'";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        } else {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE tipoerro ='Cancelado' and filial Like '%" . $this->filialCards . "%'   ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        }
    }

    public function quantidadeDivergente()
    {
        if ($this->filialCards === 'Filial') {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria where tipoerro ='Quantidade'";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        } else {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE tipoerro ='Quantidade' and filial Like '%" . $this->filialCards . "%'   ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        }
    }

    public function quantidadedeErroEnderecos()
    {

        if ($this->filialCards === 'Filial') {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria where tipoerro ='Endereco'";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        } else {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE tipoerro ='Endereco' and filial Like '%" . $this->filialCards . "%'   ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        }
    }
    public function quantidadedeErroDesinternados()
    {

        if ($this->filialCards === 'Filial') {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria where tipoerro ='Desinternado'";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        } else {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE tipoerro ='Desinternado' and filial Like '%" . $this->filialCards . "%'   ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        }
    }

    public function ErrosDeHoje()
    {

        if ($this->filialCards === 'Filial') {
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria where data = 'data(Y-m-d)' ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        } else {

            $dt = date('Y-m-d');
            $pdo = parent::get_instace();
            $slq = "SELECT * FROM tb_erros_auditoria WHERE data = '$dt'  and filial Like '%" . $this->filialCards . "%'   ";
            $slq = $pdo->prepare($slq);
            $slq->execute();
            $resul =  $slq->rowCount();
            $html = "<div style='color:red'> $resul</div>";
            echo $html;
        }
    }

    // public function ErrosDoMes()
    // {

    //     if ($this->filialCards === 'Filial') {
    //         $pdo = parent::get_instace();
    //         $slq = "SELECT * FROM tb_erros_auditoria where data = '' ";
    //         $slq = $pdo->prepare($slq);
    //         $slq->execute();
    //         $resul =  $slq->rowCount();
    //         $html = "<div style='color:red'> $resul</div>";
    //         echo $html;
    //     } else {

    //         $dt = date('Y-m-d');
    //         MONTH($dt) = 'mes_escolhido' ;  
            
    //         $pdo = parent::get_instace();
    //         $slq = "SELECT * FROM tb_erros_auditoria WHERE data = '$dt'  and filial Like '%" . $this->filialCards . "%'   ";
    //         $slq = $pdo->prepare($slq);
    //         $slq->execute();
    //         $resul =  $slq->rowCount();
    //         $html = "<div style='color:red'> $resul</div>";
    //         echo $html;
    //     }
    // }
    


    public function pegaFilial()
    {
        if (@$_GET['filial']) {

            $filial = $_GET['filial'];
            $this->filialCards = $filial;
        } else {
            $this->filialCards = false;
        }
    }
}
