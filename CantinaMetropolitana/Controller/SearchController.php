<?php

include_once '../Model/AlunoModel.php';
include_once '../Model/DAO/AlunoDAO.php';
include_once '../Model/DAO/VendaDAO.php';
include_once '../Model/VendaModel.php';

session_start();
if ($_POST['option'] == 2) {
    $aluno = new AlunoModel();
    $aluno->setRa($_POST['ra']);
//   var_dump($aluno);
} else {
    $aluno = new AlunoModel($_POST['Nome'], '', '', '', '', '');
    $alunoDAO = new AlunoDAO($aluno);
    $nomeAluno = $alunoDAO->getNomeByAlias();
    $raAluno = $alunoDAO->getRaByNome();
    $aluno->setRa($raAluno);
//    echo $aluno;
}

$vendas = new VendaModel($aluno);
$vendasDAO = new VendaDAO($vendas);

if (isset($_POST)) {
    if (($_POST['inicial'] == '') || ($_POST['final'] == '')) {
        if ($_POST['option'] == 1) {
            $result = $vendasDAO->getAllByRa();
        } else {
            $result = $vendasDAO->getAllByRa2();
//            echo '<pre>';
//            var_dump($result);
//            echo '</pre>';
        }
    } else {
        $result = $vendasDAO->getAllAlunoWithDate($_POST['inicial'], $_POST['final']);
    }
}

global $value;
global $pendencias;
$pendencias = 0;

$lengthi = count($result);

//cabeçalho
echo '<table class = "table table-pesquisa">
        <thead class = "thead-dark">
            <tr>
                <th scope = "col">Aluno</th>
                <th scope = "col">Produto</th>
                <th scope = "col">Preco</th>
                <th scope = "col">Data</th>
                <th scope = "col">Pendencia</th>
            </tr>
        </thead>';
echo "<tbody>";

for ($i = 0; $i < $lengthi; $i++) {
    if ($result[$i]['pendencia'] != "1") {
        echo "<tr class='table-danger'>";
        $GLOBALS['pendencias'] += $result[$i]['preco'];
    } else {
        echo "<tr >";
    }
    if ($_POST['option'] == 1) {
        echo "<td>" . $nomeAluno[0][0] . "</td>";
    }else{
        echo "<td>" . $result[$i][11]."</td>";
    }


    echo "<td>" . $result[$i][8] . "</td>";
    echo "<td>R$" . $result[$i]['preco'] . "</td>";
    $GLOBALS['value'] += $result[$i]['preco'];
    echo "<td>" . $result[$i]['data_vend'] . "</td>";
    if ($result[$i]['pendencia'] != "1") {
        echo "<td>PENDENTE</td>";
    } else {
        echo "<td>PAGO</td>";
    }
    echo'</tr>';
}
echo' <tr class="table-light">
            <th scope = "col" >Valor total Pendências</th>
            <th></th>
            <th></th>
            <th></th>
            <th>R$' . $pendencias . '</th>
            </tr>';
echo "</tbody>";
echo '<tfoot class ="thead-light">
            <tr>
            <th scope = "col">Valor total </th>
            <th></th>
            <th></th>
            <th></th>
            <th>R$' . $value . '</th>
            </tr>
            </tfoot>';
?>