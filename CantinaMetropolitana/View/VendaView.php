    
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/cssPersonalizacao.css">
        <link rel="stylesheet" href="../css/Venda.css">

    </head>
    <body>
        <?php
        include_once '../Controller/HeaderController.php';
        include '../Helpless/Components/BSForms.php';
        include_once '../Helpless/Enum/EnumMethodsPay.php';
        ?>  

        <div class=" input-form  col-4 col-sm-12 col-md-12">


            <div class="container input-form">
                <div class="container-fluid">
                    <h3>Vendas</h3>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <input id="palavra" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" id="submit" type="button">Pesquisar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container vendas">
                <div class="col-12">
                    <table class="table table-pesquisa">
                    </table>
                </div>
            </div>


            <div class="container vendas">
                <div class="container-fluid">
                    <h3>Produtos selecionados</h3>
                </div>
                <div class="col-12">
                    <table class="table table-compra">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Alterar</th>
                                <th scope="col">Alterar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="thead-dark">
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tbody>
                        <tfoot class = "thead-light">
                            <tr id='ex'>
                                <th scope = "col">Valor Total</th>
                                <th scope = "col"></th>
                                <th scope = "col"></th>
                                <th scope = "col"></th>
                                <th scope = "col" id='total'>0</th>
                            </tr>
                        </tfoot>
                    </table>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                        Finalizar Compra
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Formulário de finalização</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    $bsDiv = 'col-10 offset-1 align-content';
                                    $bsinput = 'form-control col-12';
                                    BSForms::createInputWithId('ra', 'RA', 'RA', $bsDiv, $bsinput, 'text');
                                    BSForms::createInputWithId('senha', 'Senha', 'Senha', $bsDiv, $bsinput, 'password');

                                    $options = [EnumMethodsPay::A_VISTA => 'Á VISTA', EnumMethodsPay::A_PRAZO => 'FIADO'];
                                    BSForms::createSelect('Senha', $options, $bsDiv, $bsinput, 'option');
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button id="comprar" type="button" class="btn btn-primary c">Finalizer Compra</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--<script src="../js/jquery-3.3.1.min.js">-->
        <!--</script>-->
        <script src="../js/script_Venda.js"></script>

        <footer class="">aqui</footer>
    </body>
</html>

