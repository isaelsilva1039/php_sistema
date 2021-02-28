<?php

require_once 'conexao.php';

// clas de validaçoes .
class Validacao extends Conexao
{

    public $nome;
    public $id;
    public $email;
    public $senha;
    public $nivel;
    public $idUsuario;
    public $nomeUsuario;
    public $emailUsuario;
    public $senhaUsuario;
    public $foto;

    //metodo para validar o loogin 
    public function validaLog($email, $senha)
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM tb_login WHERE email = :email and senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            session_start();
            $_SESSION['id'] = $sql['id'] = $this->id;
            header("location: ../nice-html/ltr/index.php");
        } else {
            header("location: ../index.php");
        }
    }


    // perfil
    public function perfil($idUsuarioLogadoSession)
    {

        $pdo = parent::get_instace();
        $sql = "SELECT * FROM tb_login WHERE id = $idUsuarioLogadoSession ";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    //metodo para cadastra apartamento 
    public function ValidaCadastroCondominio($bloco, $nivel, $apartamento)
    {
        //não aceita se vinher vazio ou com valor zer
        if ($bloco == "00" || $nivel == '00' || $apartamento == '00') {
            echo "<script>alert('Selecione Um Bloco');window.location='../nice-html/ltr/Cadastro.php'; </script>";
            exit();
        }

        $pdo = parent::get_instace();
        // slect para validade se ja existe cadastro
        $sql01 = "SELECT * FROM tb_estrutura_condominio WHERE bloco=:bloco and nivel=:nivel and apartamento=:apartamento";
        $sql01 = $pdo->prepare($sql01);
        $sql01->bindValue(":bloco", $bloco);
        $sql01->bindValue(":nivel", $nivel);
        $sql01->bindValue(":apartamento", $apartamento);
        $sql01->execute();
        if ($sql01->rowCount() > 0) {
            echo "<script>alert('Cadastro ja existe');window.location='../nice-html/ltr/Cadastro.php'; </script>";
            exit();
        } else {
            //inset no banco se todas as validaçoes de certo.
            $sql = "INSERT INTO tb_estrutura_condominio (bloco,nivel,apartamento) VALUES (:bloco,:nivel,:apartamento)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":bloco", $bloco);
            $sql->bindValue(":nivel", $nivel);
            $sql->bindValue(":apartamento", $apartamento);
            $sql->execute();
            if ($sql->rowCount()) {

                echo "<script>alert('Cadastrado Com sucesso');window.location='../nice-html/ltr/Cadastro.php'; </script>";
            } else {
                echo "<script>alert('Nao cadastrado ');window.location='../nice-html/ltr/Cadastro.php'; </script>";
            }
        }
    }

    //lista dos cinto utimos cadastros 
    public function listaDeuBlocos()
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM tb_estrutura_condominio Order by id desc limit 5";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        }
    }

    //metodo pra relecionar, la na tela de cadastro de morado
    public function listaDeuBlocosOpcao()
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM tb_estrutura_condominio Order by bloco";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        }
    }

    // Metodo paara cadastra o morador.(esta bugado )
    public function ValidaCadastroMorador($nome_completo, $cpf, $data_entrada, $bloco, $apartamento, $nivel, $aluguel)
    {
        $pdo = parent::get_instace();

        //metodo chamado para valida se apartamento ja esta alugado
        $this->mostraCincosUltimosMoradoresEntrou($bloco, $nivel, $apartamento);

        //insert no banco de dados, morador novo
        $sql = "INSERT INTO tb_cadastro_morador(nome_completo,cpf,data_entrada,bloco,nivel,apartamento,aluguel) VALUES 
        (:nome_completo,:cpf,:data_entrada,:bloco,:nivel,:apartamento,:aluguel)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":nome_completo", $nome_completo);
        $sql->bindValue(":cpf", $cpf);
        $sql->bindValue(":data_entrada", $data_entrada);
        $sql->bindValue(":bloco", $bloco);
        $sql->bindValue(":nivel", $nivel);
        $sql->bindValue(":apartamento", $apartamento);
        $sql->bindValue(":aluguel", $aluguel);

        $sql->execute();
        if ($sql->rowCount() > 0) {
            echo "<script>alert('Cadastrado Com sucesso');window.location='../nice-html/ltr/Cadastro_modador.php'; </script>";
        } else {
            echo "<script>alert('Não Cadastrado');window.location='../nice-html/ltr/Cadastro_modador.php'; </script>";
        }
    }

    // cadastro De usuarios

    public function cadastrasUsuariosComNivelDeAcessos()
    {

        $pdo = parent::get_instace();
        $sql = "INSERT INTO tb_login (nome,email,senha,nivel,foto) VALUES (:nome,:email,:senha,:nivel,:foto)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":nome", $this->nome);
        $sql->bindValue(":email", $this->email);
        $sql->bindValue(":senha", $this->senha);
        $sql->bindValue(":nivel", $this->nivel);
        $sql->bindValue(":foto", $this->foto);
        $sql->execute();
        if ($sql->rowCount()) {
            echo "<script>alert('Cadastrado Com sucesso ');window.location='../nice-html/ltr/usuarios.php'; </script>";
        } else {
            echo "<script>alert('Erro ao cadastra Usuario');window.location='../nice-html/ltr/usuarios.php'; </script>";
        }
    }

    //valida se o condominio ja esta aluagado
    public function mostraCincosUltimosMoradoresEntrou($bloco, $nivel, $apartamento)
    {
        $pdo = parent::get_instace();
        $sql01 = "SELECT * FROM tb_cadastro_morador WHERE bloco=:bloco and nivel=:nivel and apartamento=:apartamento";
        $sql01 = $pdo->prepare($sql01);
        $sql01->bindValue(":bloco", $bloco);
        $sql01->bindValue(":nivel", $nivel);
        $sql01->bindValue(":apartamento", $apartamento);
        $sql01->execute();
        if ($sql01->rowCount() > 0) {
            echo "<script>alert('Apartamento ja esta aluagdo');window.location='../nice-html/ltr/Cadastro_modador.php'; </script>";
            exit();
        };
    }


    //metodo para cadastra funcionario
    public function ValidaCadastrofuncionario($nome_completo, $cpf, $data_entrada_admisao, $cargo, $salario, $horario)
    {
        $pdo = parent::get_instace();
        $sql = "INSERT INTO tb_cadastro_funcionario(nome_completo,cpf,data_entrada_admisao,cargo,salario,horario) values
        (:nome_completo,:cpf,:data_entrada_admisao,:cargo,:salario,:horario)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":nome_completo", $nome_completo);
        $sql->bindValue(":cpf", $cpf);
        $sql->bindValue(":data_entrada_admisao", $data_entrada_admisao);
        $sql->bindValue(":cargo", $cargo);
        $sql->bindValue(":salario", $salario);
        $sql->bindValue(":horario", $horario);
        $sql->execute();

        if ($sql->rowCount() > 0) :
            echo "<script>alert('Cadastrado Com sucesso');window.location='../nice-html/ltr/Cadastro_funcionario.php'; </script>";
        else :
            echo "<script>alert('Algo Deu errado');window.location='../nice-html/ltr/Cadastro_funcionario.php'; </script>";
        endif;
    }

    public function contaFuncionarios()
    { //função para saber quantidade de fncionarios 
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM  tb_cadastro_funcionario";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        return $sql->rowCount();
    }

    public function valorSalario()
    { // função para somar valor dos salarios pagos
        $pdo = parent::get_instace();
        $sql = "SELECT sum(salario) FROM tb_cadastro_funcionario";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function valorAluguel()
    {
        // função para somar valor dos aluguel pago
        $pdo = parent::get_instace();
        $sql = "SELECT sum(aluguel) FROM tb_cadastro_morador";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function contamoradores()
    {
        //função para saber quantidade de fncionarios
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM  tb_cadastro_morador";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        return $sql->rowCount();
    }

//update de usuario logado, menso da imagem
    public function uoDatePerfilUsuarioLogado()
    {
        $pdo = parent::get_instace();
        $sql_update_banco_dados =
            "UPDATE tb_login SET  nome = '$this->nomeUsuario' , email = '$this->emailUsuario', senha = '$this->senhaUsuario' WHERE tb_login .id = $this->idUsuario";
        $sql_update_banco_dados = $pdo->prepare($sql_update_banco_dados);
        $sql_update_banco_dados->execute();
        if ($sql_update_banco_dados->rowCount() > 0) {
            $this->pegaAlteraçoesFeitasNosusuarioLogado($this->emailUsuario, $this->idUsuario);
            echo "<script>alert('Perfil Editado Com sucesso ');window.location='../nice-html/ltr/pages-profile.php'; </script>";
        } else {
            echo "<script>alert('Erro ao altera perfil');window.location='../nice-html/ltr/pages-profile.php'; </script>";
        }
    }

//    metodo edita perfil da imagem do usuario logado
    public function updadePerfilDaimagemDoUsuarioLogado()
    {
        if(empty($this->foto)){
            echo "<script>alert('E necessário selecinar uma fotot pro perfil');window.location='../nice-html/ltr/pages-profile.php'; </script>";
            exit();
        }
        $pdo = parent::get_instace();
        $sql_update_banco_dados =
            "UPDATE tb_login SET  foto = '$this->foto' WHERE tb_login .id = $this->idUsuario";
        $sql_update_banco_dados = $pdo->prepare($sql_update_banco_dados);
        $sql_update_banco_dados->execute();
        if ($sql_update_banco_dados->rowCount() > 0) {
//            $this->pegaAlteraçoesFeitasNosusuarioLogado($this->emailUsuario, $this->idUsuario);
            echo "<script>alert('Foto do perfil alterado com sucesso ');window.location='../nice-html/ltr/pages-profile.php'; </script>";
        } else {
            echo "<script>alert('Erro ao altera foto do perfil');window.location='../nice-html/ltr/pages-profile.php'; </script>";
        }
    }


// function para pega alteraçoes em usuarios.

    function pegaAlteraçoesFeitasNosusuarioLogado($email, $idUsuario)
    {
        $data_historico = date("Y-m-d H:i:s");
        $pdo = parent::get_instace();
        $sql_insetUsuarioEditado = "INSERT INTO tb_historico_editado_usuario(idUsuario,nome_completo,data_historico) VALUE (:idUsuario,:nome_completo,:data_historico)";
        $sql_insetUsuarioEditado = $pdo->prepare($sql_insetUsuarioEditado);
        $sql_insetUsuarioEditado->bindValue(":idUsuario", $idUsuario);
        $sql_insetUsuarioEditado->bindValue(":nome_completo", $email);
        $sql_insetUsuarioEditado->bindValue(":data_historico", $data_historico);
        $sql_insetUsuarioEditado->execute();
        if ($sql_insetUsuarioEditado->rowCount() > 0) {
            echo "<script>alert('Historico Não Criado ');window.location='../nice-html/ltr/pages-profile.php'; </script>";

        } else {
            echo "<script>alert('Historico Não Criado ');window.location='../nice-html/ltr/pages-profile.php'; </script>";
        }
    }

//mostra ultimas alteraçoes usuario logafo
    public
    function alteracoesFeitasNoPerfilEmUsuariosLogados($usuarioLogado)
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM  tb_historico_editado_usuario WHERE idUsuario = $usuarioLogado order by id desc limit 3";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() <= 0) {
            echo "Seu usuario não teve alteraçoes";
        }
        return $sql->fetchAll();

    }

    public
    function resetTesteIsael()
    {
        echo "Deu Certo a herança ";

    }

}
