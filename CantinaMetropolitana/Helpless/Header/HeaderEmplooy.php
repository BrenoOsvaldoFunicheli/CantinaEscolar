<?php

include_once 'Header.php';

//include_once '../Enum/EnumSystemPerson.php';
//include_once '../Helpless/Enum/EnumSystemPerson.php';

class HeaderEmplooy implements Header {

    //put your code here
    public function create() {
//        if ($_POST['tipo'] == 2) {
        echo'
            <div class="agroup">
            <div class="label"><h1>Metropolitana</h1> </div>
            <ul class="nav nav-pills">
              <li class="nav-item  col-sm-12 col-lg-3 ">
                <a class="nav-link " href="VendaView.php">Venda</a>
              </li>
              <li class="nav-item dropdown col-sm-12 col-lg-3">
                <a class="col-sm-12 nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cadastro</a>
                <div class="dropdown-menu menudrop">
                  <a class="dropdown-item" href="CadastroFuncionarioView.php">Cadastro Funcionários</a>
                  <a class="dropdown-item" href="CadastroAlunosView.php">Cadastro de Aluno</a>
                  <a class="dropdown-item" href="CadastroProdutosView.php">Cadastro de Produtos</a>
                </div>
              </li>
              <li class="nav-item col-sm-12 col-lg-3">
                <a class="nav-link" href="RelatorioView.php">Relatório</a>
              </li>
              <li class="nav-item col-sm-12 col-lg-3">
                <a class="nav-link disabled a" href="../index.php">Sair</a>
              </li>
            </ul>
            </div>
';      
//        } else {
//            header("location: ../../index.php");
//        }
    }

}
