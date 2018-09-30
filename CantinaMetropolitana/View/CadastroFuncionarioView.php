<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cssPersonalizacao.css">
  </head>
  <body>
    <?php
        include '../Helpless/Components/BSForms.php';
        include_once '../Helpless/Enum/EnumSystemPerson.php';
        include_once '../Controller/HeaderValidatorController.php';
        HeaderValidatorController::validar(EnumSystemPerson::FUNCIONARIOS);
    ?>  
      
      <div class="">
            <div class="container">
                <div class="container col-8 offset-2 form">
                    <div class="row title"><h2 class="col-8 offset-2">Cadastro de Funcionário</h2></div>
                    <form action="../Controller/InsertController.php" method="post">
                        <?php
                            $bsDiv= 'col-10 offset-1 align-content';
                            $bsinput= 'form-control col-12';
                            
                            BSForms::createInput('Nome', 'Nome', $bsDiv, $bsinput, 'text');
                            BSForms::createInput('cpf', 'cpf', $bsDiv, $bsinput, 'text');
                            BSForms::createInput('senha', 'senha', $bsDiv, $bsinput, 'password');
                            
                            echo "<input type='hidden' name='tipo' value='".EnumSystemPerson::FUNCIONARIOS."'>";
                            BSForms::createInputSubmit('Login', $bsDiv, $bsinput.'btn btn-secondary', 'submit');
                        ?>
                        <br>
                    </form>
              </div>
            </div>
        </div>  
                        <br>
                        <br>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <footer class="">aqui</footer>
  </body>
</html>
