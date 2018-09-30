    
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
        ?>  

        <!--<div class="row input-form">-->
        <div class="container vendas">
            <div class="container-fluid">
                <h3>Relatório</h3>
            </div>

            <div class="col-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Data Inicial</span>
                    </div>
                    <input type="date" class="form-control" id="inicial">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Data Final</span>
                    </div>
                    <input type="date" class="form-control" id="final">
                </div>
            </div>
        </div>
        <div class="container input-form">
            <div class="col-12">
                <div class="input-group">
                    <input id="palavra" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" id="submitRA" type="button">RA</button>
                        <button class="btn btn-outline-secondary x" id="submitNome" type="button">Nome</button>
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
        <!--</div>-->
        <br>
        <br>
        <br>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--<script src="../js/jquery-3.3.1.min.js">-->
        <!--</script>-->
        <script src="../js/script.js"></script>

        <!--</script>-->
        <footer class="">aqui</footer>
    </body>
</html>

