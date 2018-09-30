<?php

include_once '../Model/AlunoModel.php';
include_once '../Model/FuncionarioModel.php';
include_once '../Model/ProdutoModel.php';
include_once '../Model/VendaModel.php';
include_once '../Model/DAO/VendaDAO.php';
include_once '../Model/DAO/AlunoDAO.php';
include_once '../Model/DAO/VendaDAO.php';
include_once '../Model/DAO/FuncionarioDAO.php';
include_once '../Model/DAO/ProdutoDAO.php';
include_once '../Helpless/Enum/EnumSystemPerson.php';
include_once '../pass-crypt-master/PassCrypt.php';

$features = $_POST;
global $obj;
global $objInsertion;
$parse = $_POST['tipo'];

createObj($features, $parse);

function cryptEncode() {
    $hash = new PassCrypt(8);
    $criptografada = $hash->hashSenha($_POST['senha']);
    $_POST['senha'] = $criptografada;
}

function validar($tentativa, $criptografada) {

    $hash = new PassCrypt(8);
    $criptografadaa = $hash->hashSenha($tentativa);
//    var_dump($criptografadaa);
    
    return ($hash->compareHash($tentativa, $criptografada));
    
}

function createObj($features, $type) {
//    var_dump($features);

    switch ($type) {
        case EnumSystemPerson::ALUNOS:
            cryptEncode();
//            echo $_POST['senha'];
            $GLOBALS['obj'] = new AlunoModel(
                    $features['Nome'], $features['RA'], $_POST['senha'], $features['NR'], $features['TR'], $features['ER']
            );
            $GLOBALS['objInsertion'] = new AlunoDAO($GLOBALS['obj']);
            break;

        case EnumSystemPerson::FUNCIONARIOS:
            cryptEncode();
            $GLOBALS['obj'] = new FuncionarioModel(
                    $features['Nome'], $features['cpf'], $_POST['senha']
            );
            $GLOBALS['objInsertion'] = new FuncionarioDAO($GLOBALS['obj']);

            break;

        case EnumSystemPerson::PRODUTOS:

            $GLOBALS['obj'] = new ProdutoModel(
                    $features['Nome'], $features['Preco']
            );
            $GLOBALS['objInsertion'] = new ProdutoDAO($GLOBALS['obj']);
            break;

        case EnumSystemPerson::VENDA:
            
            $ra = $_POST['ra'];
            $senha = $_POST['senha'];
            
//            var_dump($ra);
//            var_dump($senha);
//
            $DAO = new AlunoDAO();
            $result = $DAO->isExist($ra, $senha);
//            echo's';
//            var_dump($result);
            if (count($result) > 0) {
                if (validar($senha, $result[0]['senha'] )) {
//                    echo's';
                    $aluno = new AlunoModel('', $ra, $senha);

                    $GLOBALS['obj'] = new VendaModel($aluno, date('Y/m/d'), 's');
//
                    $GLOBALS['objInsertion'] = new VendaDAO($GLOBALS['obj']);
                }
            } else {
                echo 'CADxE';
            }
//            break;
    }
}
