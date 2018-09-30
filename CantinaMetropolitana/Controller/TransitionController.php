<?php
    include_once '../Helpless/Enum/EnumSystemPerson.php';       

    $_POST = array("Nome" =>$_POST['palavra'],
                   "RA" =>'',
                   "Senha" =>'',
                   "NR" =>'',
                   "TR" =>'',
                   "ER" =>'',
                   "tipo" => EnumSystemPerson::ALUNOS
            );
//     include_once 'CreatorController.php';
//    include_once '../Model/DAO/AbstractFunctionDAO.php';
//    echo'<p>sd</p>'.var_dump($objInsertion);
?>

<!--<p>SD</p>-->

<!--<tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    <td>@mdo</td>
</tr>-->