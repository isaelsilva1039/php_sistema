<?php

include('../model/conexao.php');
include('../controlle/controla_sessao.php');

class ErosLn extends Conexao
{

    public function cadastraerro($usuarioLogado, $filial, $cidade, $rua, $tipoerro, $nomeobjeto, $nomeerrocolaborador, $usuarioerro)
    {

        if ($filial == 'Filial') {

            echo "<script>alert('Preecha o campo Filial ');window.location='lanca_erro.php?Filial'; </script>";
        } elseif ($cidade == 'Cidade') {

            echo "<script>alert('Preecha o campo Cidade ');window.location='lanca_erro.php?Filial'; </script>";
        } elseif ($rua == 'Rua') {

            echo "<script>alert('Preecha o campo Rua ');window.location='lanca_erro.php?Filial'; </script>";
        } elseif ($tipoerro == 'Erro') {
            echo "<script>alert('Selecione o tipo de erro  ');window.location='lanca_erro.php?Filial'; </script>";
        } else {

            if (empty($nomeobjeto)) {
                echo "<script>alert('Informe o numero do Objeto ');window.location='lanca_erro.php?Filial'; </script>";
            }
            if (empty($usuarioerro)) {
                echo "<script>alert('Preencha Quem erro ');window.location='lanca_erro.php?Filial'; </script>";
            }
            if (empty($nomeerrocolaborador)) {

                echo "<script>alert('Preencha O nome de quem erro ');window.location='lanca_erro.php?Filial'; </script>";
            }
            // se passa em todas as validaçoes cair nessa função
            $this->cadastrarerrolancado($usuarioLogado, $filial, $cidade, $rua, $tipoerro, $nomeobjeto, $nomeerrocolaborador, $usuarioerro);
        }
    }


    public function cadastrarerrolancado($usuarioLogado, $filial, $cidade, $rua, $tipoerro, $nomeobjeto, $nomeerrocolaborador, $usuarioerro)
    {
        $datalancamento = date("Y-m-d");
        
        $pdo = parent::get_instace();
        $smts = "INSERT INTO tb_erros_auditoria (usuariologado,data,filial,cidade,rua,tipoerro,nomeobjeto,nomeerrocolaborador,usuarioerro) value (:usuariologado,:data,:filial,:cidade,:rua,:tipoerro,:nomeobjeto,:nomeerrocolaborador,:usuarioerro)";
        $smts = $pdo->prepare($smts);
        $smts->bindValue(":usuariologado", $usuarioLogado);
        $smts->bindValue(":data", $datalancamento);
        $smts->bindValue(":filial", $filial);
        $smts->bindValue(":cidade", $cidade);
        $smts->bindValue(":rua", $rua);
        $smts->bindValue(":tipoerro", $tipoerro);
        $smts->bindValue(":nomeobjeto", $nomeobjeto);
        $smts->bindValue(":nomeerrocolaborador", $nomeerrocolaborador);
        $smts->bindValue(":usuarioerro", $usuarioerro);
        $smts->execute();

        if ($smts->rowCount() > 0) {

            echo "<script>alert('Sucesso ');window.location='lanca_erro.php?Sucesso'; </script>";
        } else {
            echo "<script>alert('Erro ao lança  ');window.location='lanca_erro.php?erro'; </script>";
        }
    }
}
