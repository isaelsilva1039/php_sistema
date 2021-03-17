<?php

include('../model/conexao.php');

class ErosLn extends Conexao
{


    public function cadastraerro($usuarioLogado, $filial, $cidade, $rua, $tipoerro, $nomeobjeto, $nomeerrocolaborador, $usuarioerro)
    {

        if ($filial == 'Filial') {
            $this->mensagemDeCampoVazioErediredionagemPraTelaDeErrolanacamentos();
        } elseif ($cidade == 'Cidade') {
            $this->mensagemDeCampoVazioErediredionagemPraTelaDeErrolanacamentos();
        } elseif ($rua == 'Rua') {
            $this->mensagemDeCampoVazioErediredionagemPraTelaDeErrolanacamentos();
        } elseif ($tipoerro == 'Erro') {
            $this->mensagemDeCampoVazioErediredionagemPraTelaDeErrolanacamentos();
        } else {

            if (empty($nomeobjeto)) {
                $this->mensagemDeCampoVazioErediredionagemPraTelaDeErrolanacamentos();
            }
            if (empty($usuarioerro)) {

                $this->msgRedirmensagemDeCampoVazioErediredionagemPraTelaDeErrolanacamentosecione();
            }
            if (empty($nomeerrocolaborador)) {
                $this->mensagemDeCampoVazioErediredionagemPraTelaDeErrolanacamentos();
            }
            // se passa em todas as validaçoes cair nessa função
            $this->cadastrarerrolancado($usuarioLogado, $filial, $cidade, $rua, $tipoerro, $nomeobjeto, $nomeerrocolaborador, $usuarioerro);
        }
    }


    public function cadastrarerrolancado($usuarioLogado, $filial, $cidade, $rua, $tipoerro, $nomeobjeto, $nomeerrocolaborador, $usuarioerro)
    {
        $datalancamento = date("Y-m-d");
        $pdo = parent::get_instace();
        $smts = "INSERT INTO tb_erros_auditoria 
                                (usuariologado,data,filial,cidade,rua,tipoerro,nomeobjeto,nomeerrocolaborador,usuarioerro)
                                    value (:usuariologado,:data,:filial,:cidade,:rua,:tipoerro,:nomeobjeto,:nomeerrocolaborador,:usuarioerro)";
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
            return $this->mensagemDeCampoVazioErediredionagemPraTelaDeErrolanacamentos();
        } else {
            return $this->mensagemdecadastrosDeuerroNaoIncluiuaobancodedados();
        }
    }


    public function mensagemDeCadastradoComsucessoErrofoiadicionadoaobancodedados()
    {
        return header('Location: lanca_erro.php?sucesso');
    }

    public function mensagemDeCampoVazioErediredionagemPraTelaDeErrolanacamentos()
    {
        header('Location: lanca_erro.php?campovazio');
    }

}