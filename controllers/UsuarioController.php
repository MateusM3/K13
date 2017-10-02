<?php
/**
 * Created by PhpStorm.
 * User: Mateus Monteiro
 * Date: 02/10/2017
 * Time: 08:48
 */


//INSTANCIANDO USUARIO
$usuario = new Usuario();


//---------CADASTRO DE USUARIOS -----------
if(isset($_POST['cadastrar'])):
    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];

    $usuario->setNome($nome);
    $usuario->setCidade($cidade);
    $usuario->setCep($cep);
    $usuario->setRua($rua);
    $usuario->setNumero($numero);
    $usuario->setComplemento($complemento);
    $usuario->setRua($rua);
    $usuario->setBairro($bairro);
    $usuario->setCidade($cidade);
    $usuario->setUf($uf);
    $usuario->setTelefone($telefone);
    $usuario->setCelular($celular);

    if ($usuario->insert()){
        echo '<div class="success callout" data-closable="slide-out-right">
            <h5>Cadastro Concluido</h5>
            <p>Usuario cadastrado Com Sucesso</p>
            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';;
    }
endif;

// -------------ATUALIZAR --------------
    if(isset($_POST['atualizar'])):
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];

        $usuario->setNome($nome);
        $usuario->setCidade($cidade);
        $usuario->setCep($cep);
        $usuario->setRua($rua);
        $usuario->setNumero($numero);
        $usuario->setComplemento($complemento);
        $usuario->setRua($rua);
        $usuario->setBairro($bairro);
        $usuario->setCidade($cidade);
        $usuario->setUf($uf);
        $usuario->setTelefone($telefone);
        $usuario->setCelular($celular);



        if($usuario->update($id)){
            echo '<div class="success callout" data-closable="slide-out-right">
            <h5>Atualização Comcluida</h5>
            <p>Usuario Atualizado Com Sucesso</p>
            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        }

    endif;
//        EXCLUIR USUARIO
    if (isset($_GET['acao'])&& $_GET['acao']== 'deletar'):
        $id = (int) $_GET['id'];
        if($usuario->delete($id)){
            echo "Usuario Excluido!!";
        }
    endif;


