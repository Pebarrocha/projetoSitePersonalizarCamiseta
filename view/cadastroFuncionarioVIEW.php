

<?php
require_once ('../controller/funcionarioController.php');
Processo('incluir');
?>

<!DOCTYPE html>

<html>


<head lang="pt-br">

    <title>Administração</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adm.css">


    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Cadastro de Camisetas Pré-Definidas</title>
    <script>
        function somenteNumeros(num) {
            var er = /[^0-9.]/;
            er.lastIndex = 0;
            var campo = num;
            if (er.test(campo.value)) {
                campo.value = "";
            }
        }
    </script>

    <style>.teste{height: 800px; background-color: #88c3e0; margin: 0px; padding: 0%;}
        .teste1{height: 30px; background-color: #424b54; margin: 0px; padding: 0%;}
        .main{width: 100%;}
    </style>
</head>
<body>

  <div class="row">
        <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              CADASTRAR
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="cadastroEmpresaVIEW.php">CADASTRAR EMPRESA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroEstampaVIEW.php">CADASTRAR ESTAMPA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroFuncionarioVIEW.php">CADASTRAR FUNCIONÁRIO</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroProdutoPreDefinidoVIEW.php">CADASTRAR PRODUTO PRÉ-DEFINIDO</a>
                             
                            </div>
                          </li>

<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CONSULTAR
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="consultaEmpresaVIEW.php">CONSULTA EMPRESA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="consultaEstampaVIEW.php">CONSULTA ESTAMPA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="consultaFuncionarioVIEW.php">CONSULTA FUNCIONÁRIO</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="consultaFotoCamisetaVIEW.php">CONSULTA FOTO CAMISETA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="consultaProdutoPreDefinidoVIEW.php">CONSULTA PRÉ-DEFINIDO</a>
                   
                  </div>
                </li>

                            <li class="nav-item">
                              <a class="nav-link" href="main.php">SAIR</a>
                            </li>
                        </ul> </div></nav></div></div>





<div id="normal">
    <h1> Cadastro de Funcionário </h1>
    <form enctype="multipart/form-data" action="#" name="form" id="form" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Funcionário"> <br><br>
        <label>CPF:</label> <br>
        <input type="text" name="cpf" id="cpf" placeholder="CPF" onkeyup=" somenteNumeros(this)" maxlength="11" size="11"> <br><br>
        <label>Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Senha"> <br><br>


            <input type="button" name="button" id="button" value="Cadastrar" onclick="submitForm()">
            <input type="hidden" name="ok" id="ok">
</div>

</form>
<script type="text/javascript" src="../js/validarCadFuncionario.js"> </script>

<script type="text/javascript">
    function submitForm(){
        validaCadastro();
        document.getElementById("ok").value = "true";
        document.getElementById("form").submit();
    }
</script>


<script src="../jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
