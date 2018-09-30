<?php

include_once '../Model/AlunoModel.php';
include_once '../Model/FuncionarioModel.php';
include_once '../Model/DAO/FuncionarioDAO.php';
include_once '../Model/DAO/AlunoDAO.php';
include_once '../Model/DAO/Conexao.php';
include_once '../Helpless/Enum/EnumSystemPerson.php';
include_once '../pass-crypt-master/PassCrypt.php';

if ($_POST) {
    global $user;
    global $senha;

//        $GLOBALS['user'] = $_POST['Nome'];
//        $GLOBALS['senha'] = $_POST['Senha'];
    $user = $_POST['Nome'];
    $senha = $_POST['Senha'];
    $tipo = $_POST['tipo'];

    switch ($tipo) {
        case EnumSystemPerson::ALUNOS :

            $aluno = new AlunoModel('', '', $GLOBALS['senha'], '', '', $GLOBALS['user']);
            $Pesq = new AlunoDAO($aluno);
            break;
        case EnumSystemPerson::FUNCIONARIOS:
            
            $func = new FuncionarioModel('', $GLOBALS['user'], $GLOBALS['senha']);
            $Pesq = new FuncionarioDAO($func);
            break;
    }

    $result = $Pesq->search();

    if (count($result) > 0) {
        var_dump($GLOBALS['senha']);
        var_dump($result[0][2]);
        if (validar($GLOBALS['senha'], $result[0][2])) {

            createSession($user, $senha, $tipo);

            if ($tipo == EnumSystemPerson::ALUNOS) {
                header('Location: ../View/RelatorioAlunoView.php');
            } else {
                header('Location: ../View/RelatorioView.php');
            }
        } else {

            header('Location: ../index.php');
        }
    } else {
        
        header('Location: ../index.php');
    }
}

function createSession($usuario, $password, $tipo) {
    session_start();

    $_SESSION['Nome'] = $usuario;
    $_SESSION['Senha'] = $password;
    $_SESSION['tipo'] = $tipo;
    $_SESSION['Logado'] = true;
}

function validar($tentativa, $criptografada) {

    $hash = new PassCrypt(8);
     $criptografadaa = $hash->hashSenha($tentativa);
     var_dump($criptografadaa);
    return ($hash->compareHash($tentativa, $criptografada));
}
