    
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/cssPersonalizacao.css">
        <link rel="stylesheet" href="../css/relatório.css">


    </head>
    <body>
        <?php
        include_once '../Controller/HeaderController.php';
        include '../Helpless/Components/BSForms.php';
        include_once '../Model/AlunoModel.php';
        include_once '../Model/VendaModel.php';
        include_once '../Model/ProdutoModel.php';
        include_once '../Model/DAO/AlunoDAO.php';
        include_once '../Model/DAO/VendaDAO.php';
        include_once '../Model/DAO/ProdutoDAO.php';
        ?>  

        <div class="">
            <div class="container">

                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Data Inicial</span>
                        </div>
                        <input type="date" class="form-control" id="inicial">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Data Final</span>
                        </div>
                        <input type="date" class="form-control" id="final">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" id="submit" type="button">Buscar</button>
                            <button class="btn btn-outline-secondary" id="All" type="button">Todos</button>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="col-12">
                        <table class="table table-pesquisa">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Preco</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Pendencia</th>
                                </tr>
                            </thead>
                            
                            
                        </table>
                    </div>
                </div>
                <div id="formget"></div>
            </div>
        </div>
        <br>
        <br>
        <br>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--<script src="../js/jquery-3.3.1.min.js">-->
        <!--</script>-->
        <script src="../js/script_Relatorio.js"></script>
        <footer class="">aqui</footer>
    </body>
</html>


