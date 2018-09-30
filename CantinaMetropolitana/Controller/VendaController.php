<?php

//
//

include_once '../Model/ProdutoModel.php';
include_once '../Model/DAO/ProdutoDAO.php';

$produtoDAO = new ProdutoDAO();
$catalogo = $produtoDAO->searchWith($_POST['Nome']);
$lengthi = count($catalogo);

echo '<table class = "table table-pesquisa">
        <thead class = "thead-dark">
            <tr>
                <th scope = "col">Código</th>
                <th scope = "col">Nome</th>
                <th scope = "col">Preco</th>
                <th scope = "col">Alterar</th>
            </tr>
        </thead>';

echo "<tbody>";
for ($i = 0; $i < $lengthi; $i++) {
    echo "<tr id=" . $catalogo[$i]['cod'] . ">";
    echo "<td>" . $catalogo[$i]['cod'] . "</td>";
    echo "<td>" . $catalogo[$i]['nome'] . "</td>";
    echo "<td class='valor'>R$" . $catalogo[$i]['preco'] . "</td>";
    echo "<td><button id=" . $catalogo[$i]['cod'] . " type='button' class='btn btn-success col-12 btn-add'>+</button></td>";
    echo'</tr>';
}
echo "</tbody>";
echo '<tfoot class = "thead-dark">
            <tr>
            <th scope = "col"></th>
            <th scope = "col"></th>
            <th scope = "col"></th>
            <th scope = "col"></th>
            </tr>
            </tfoot>';
//echo'<p>aqui</p>'
