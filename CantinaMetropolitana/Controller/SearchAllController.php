<?php

include_once '../Model/AlunoModel.php';
include_once '../Model/DAO/AlunoDAO.php';
include_once '../Model/DAO/VendaDAO.php';
include_once '../Model/VendaModel.php';

session_start();


$aluno = new AlunoModel('', '', $_SESSION['Senha'], '', '', $_SESSION['Nome']);
$alunoDAO = new AlunoDAO($aluno);
$raAluno = $alunoDAO->getRa();
$aluno->setRa($raAluno);

$vendas = new VendaModel($aluno);
$vendasDAO = new VendaDAO($vendas);

if (isset($_POST)) {
    if ($_POST['option'] == 1) {
        $result = $vendasDAO->getAllByRa();
    } else {
        $result = $vendasDAO->getAllAlunoWithDate($_POST['inicial'], $_POST['final']);
    }
}

global $value;
global $pendencias;
$lengthi = count($result);
echo'<div class="container-fluid">';
echo '<table class = "table table-pesquisa">
        <thead class = "thead-dark">
            <tr>
                <th scope = "col">Nome</th>
                <th scope = "col">Preco</th>
                <th scope = "col">Data</th>
                <th scope = "col">Pendencia</th>
            </tr>
        </thead>';

echo "<tbody>";
for ($i = 0; $i < $lengthi; $i++) {
//    echo "<tr>";
    if ($result[$i]['pendencia'] != "1") {
        echo "<tr class='table-danger'>";
        $GLOBALS['pendencias'] += $result[$i]['preco'];
    } else {
        echo "<tr>";
    }
    echo "<td>" . $result[$i]['nome'] . "</td>";
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
echo "</tbody>";
echo '<tfoot class = "thead-light">
            <tr>
            <th scope = "col">Valor total </th>
            <th></th>
            <th></th>
            <th>R$' . $value . '</th>
            </tr>
            </tfoot>';
echo'</div>';
?>
