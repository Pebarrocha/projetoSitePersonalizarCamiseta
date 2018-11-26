<!--
 Autor: Renan Delfino
 Data da última modificação: 28/08/2018
-->

<?php
//Chamando o controller para o envio dos dados
//require_once ('../controller/');
//Manda o 'incluir' para o método e entra no switch case
//Processo('incluir');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Cadastro de Estampa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adm.css">

    <style type="text/css">
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
                              <a class="dropdown-item" href="cadastroFotoCamisetaPersonalizadaVIEW.php">CADASTRAR FOTO CAMISETA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroProdutoPreDefinidoVIEW.php">CADASTRAR PRODUTO PRÉ-DEFINIDO</a>
                             
                            </div>
                          </li>
                                       <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RELATÓRIO
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="cadastroDeEmpresa.php">RELATÓRIO DE PERFIL DE CLIENTE</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroDeEstampa.php">RELATÓRIO DE VENDAS</a>
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
                              <a class="nav-link" href="#">SAIR</a>
                            </li>
                        </ul> </div></nav></div></div>

<div id="cadastro">
    <h1> CADASTRO DE ESTAMPA </h1>
    <form action="#" name="form" id="form" method="post">

        <label>Nome:</label>
        <input type="text" required name="nome" id="nome" placeholder="Nome da estampa"> <br>

        <label>Estampa:</label>
        <input type="text" required name="img" id="img"> <br>


        <input type="button" name="button" id="button" value="Cadastrar" onclick="validaCadastro()" >
        <input type="hidden" name="ok" id="ok">
</div>

<script type="text/javascript" src="../js/validarEstampa.js"> </script>

<script type="text/javascript">

    function submitForm(){
        validaCadastro();

        // var imag = document.getElementById("img").value();
        document.getElementById("ok").value = "true";
        document.getElementById("form").submit();
        //document.forms['form'].action = "../controller/produtoPreDefinidoController.php";
    }
</script>
    <script src="../jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>