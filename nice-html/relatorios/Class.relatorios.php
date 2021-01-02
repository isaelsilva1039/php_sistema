<?php

include '../../model/conexao.php';

class Relatorios extends Conexao {

    public function RelatorioFuncionarios($cargo = 'todos') {
        $pdo = parent::get_instace();
        if ($cargo === 'todos') {
            $sql = "SELECT * FROM  tb_cadastro_funcionario order by id desc ";
            $sql = $pdo->prepare($sql);
            $sql->execute();
            return $sql->fetchAll();
        } else {
            $sql = "SELECT * FROM  tb_cadastro_funcionario where cargo LIKE '%" . $cargo . "%' or nome_completo LIKE '%" . $cargo . "%'  or cpf Like '%" . $cargo . "%' order by id limit 6 ";
            $sql = $pdo->prepare($sql);
            $sql->execute();
            return $sql->fetchAll();
        }
    }

    public function listaFilto($cargo) {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM  tb_cadastro_funcionario where cargo=$cargo ";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function deletarEcriaHistoricoDeDelete($id) { //seleciona usuario pelo id, depois joga em umetodo pra cria historico , depois deleta
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM  tb_cadastro_funcionario where id=:id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        foreach ($sql->fetchAll() as $lista) {
            $id = $lista['id'];
            $nome_completo = $lista['nome_completo'];
            $cpf = $lista['cpf'];
            $admisao = $lista['data_entrada_admisao'];
            $cargo = $lista['cargo'];
            $salario = $lista['salario'];
            $horario = $lista['horario'];
        }
        $this->historicoDeletefuncionario($nome_completo, $cpf, $admisao, $cargo, $salario, $horario); //metodo pra inserir 
        $this->deleta($id); //metodo para deleta
    }

    public function deleta($id) { //metodo para deleta funcionario
        $pdo = parent::get_instace();
        $sql = "DELETE FROM tb_cadastro_funcionario WHERE id=$id";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            echo "<script>alert('DELETADO');window.location='relatorio_funcionarios.php'; </script>";
        }
    }

    public function historicoDeletefuncionario($nome_completo, $cpf, $admisao, $cargo, $salario, $horario) {
        $pdo = parent::get_instace();
        $sql = "INSERT INTO tb_historico_delete_funcionario(nome_completo,cpf,admisao,cargo,salario,horario)
         values(:nome_completo,:cpf,:admisao,:cargo,:salario,:horario)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":nome_completo", $nome_completo);
        $sql->bindValue(":cpf", $cpf);
        $sql->bindValue(":admisao", $admisao);
        $sql->bindValue(":cargo", $cargo);
        $sql->bindValue(":salario", $salario);
        $sql->bindValue(":horario", $horario);
        $sql->execute();
        if ($sql->rowCount() > 0) :
            echo "<script>alert('Historico Feito');window.location='relatorio_funcionarios.php'; </script>";
        else :
           echo "<script>alert('Não crior Historico');window.location='relatorio_funcionarios.php'; </script>";
        endif;
    }

    // relatorio dos moradores, esse parameto cargo e so pra usar como filto 
    // aproveitando codigo da tela de relatorio de funcionarios
    public function RelatorioMoradores($cargo = 'todos') {
        $pdo = parent::get_instace();
        if ($cargo === 'todos') {
            $sql = "SELECT * FROM  tb_cadastro_morador order by id desc ";
            $sql = $pdo->prepare($sql);
            $sql->execute();
            return $sql->fetchAll();
        } else {
            $sql = "SELECT * FROM  
            tb_cadastro_morador where id LIKE '%" . $cargo . "%' or nome_completo LIKE '%" . $cargo . "%' or cpf LIKE '%" . $cargo . "%' or bloco LIKE '%" . $cargo . "%' or aluguel LIKE '%" . $cargo . "%' order by id limit 6 ";
            $sql = $pdo->prepare($sql);
            $sql->execute();
            return $sql->fetchAll();
        }
    }

    // seleciona o id pra cria histotico
    public function deletarEcriaHistoricoDeDeleteMorador($id) {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM  tb_cadastro_morador where id=:id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        foreach ($sql->fetchAll() as $lista) {
            
            $id = $lista['id'];
            $nome_completo = $lista['nome_completo'];
            $cpf = $lista['cpf'];
            $entrada = $lista['data_entrada'];
            $bloco = $lista['bloco'];
            $apartamento = $lista['apartamento'];
            $nivel = $lista['nivel'];
            $aluguel = $lista['aluguel'];
        
        }

        $this->historicoDeleteMoraador($nome_completo, $cpf, $entrada, $bloco, $apartamento, $nivel, $aluguel);
        $this->deletaMorador($id);
  
    }

    public function historicoDeleteMoraador($nome_completo, $cpf, $entrada, $bloco, $apartamento, $nivel, $aluguel) {
        $pdo = parent::get_instace();
        $sql = "INSERT INTO tb_historico_delete_morador(nome_completo,cpf,entrada,bloco,apartamento,nivel,aluguel)
        values(:nome_completo,:cpf,:entrada,:bloco,:apartamento,:nivel,:aluguel)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":nome_completo",$nome_completo);
        $sql->bindValue(":cpf", $cpf);
        $sql->bindValue(":entrada",$entrada);
        $sql->bindValue(":bloco",$bloco);
        $sql->bindValue(":apartamento",$apartamento);
        $sql->bindValue(":nivel",$nivel);
        $sql->bindValue(":aluguel",$aluguel);
        $sql->execute();
        if ($sql->rowCount() > 0):
            echo "<script>alert('Historico Feito');window.location='relatorio_moradores.php'; </script>";
        else :
            echo "<script>alert('Não crior Historico');window.location='relatorio_moradores.php'; </script>";
        endif;
    }

    public function deletaMorador($id) { //metodo para deleta morador
        $pdo = parent::get_instace();
        $sql = "DELETE FROM tb_cadastro_morador WHERE id=$id";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            echo "<script>alert('DELETADO');window.location='relatorio_moradores.php'; </script>";
        }
    }

    public function editaFuncionario($nome_completo,$cargo,$cpf,$data_entrada_admisao,$horario,$salario)
    {
        $pdo = parent::get_instace();
        $sql = "UPDATE tb_cadastro_funcionario SET nome_completo=:nome_completo,  data_entrada_admisao=:data_entrada_admisao,cargo=:cargo, 
        salario =:salario, 
        horario=:horario
        WHERE cpf=$cpf ";
        $sql = $pdo->prepare($sql); 
        $sql->bindValue(":nome_completo", $nome_completo);
        $sql->bindValue(":data_entrada_admisao", $data_entrada_admisao);
        $sql->bindValue(":cargo", $cargo);
        $sql->bindValue(":salario", $salario);
        $sql->bindValue(":horario", $horario);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            
            $_SESSION['mensagem'] = "Editado com sucesso ";
            $this->mesagenConcluido();
            header("location: relatorio_funcionarios.php");
            // echo "<script>alert('Update feito');window.location='relatorio_funcionarios.php'; </script>";
        }
        else{

            $_SESSION['mensagem'] = "Editado com sucesso ";
            $this->mesagenErro();
            header("location: relatorio_funcionarios.php");
            // echo "<script>alert('Update Não Excutado');window.location='relatorio_funcionarios.php'; </script>";
        }
    }

    public function mesagenConcluido()
    {
        if(isset($_SESSION["mensagem"])):
            print $_SESSION["mensagem"];
            unset($_SESSION["mensagem"]);
          endif;
          
    }
    
    public function mesagenErro()
    {   
        if(isset($_SESSION["mensagem"])):
            print $_SESSION["mensagem"];
            unset($_SESSION["mensagem"]);
          endif;
         
        
    }

}
