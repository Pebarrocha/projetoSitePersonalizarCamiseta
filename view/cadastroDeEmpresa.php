<!--
 Autor: Renan Delfino
 Data da última modificação: 28/08/2018
-->


<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Cadastro de Empresa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adm.css">

    <style type="text/css">
    </style>

    <script>

    </script>

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
                              <a class="dropdown-item" href="cadastroDeEmpresa.php">CADASTRAR EMPRESA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroDeEstampa.php">CADASTRAR ESTAMPA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroDeFuncionario.php">CADASTRAR FUNCIONÁRIO</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroFotoCamisetaPersonalizada.php">CADASTRAR FOTO CAMISETA</a>
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

                    <li class="nav-item">
                    <a class="nav-link" href="consulta.php">CONSULTAR</a>
                    </li>

                <li class="nav-item">
                              <a class="nav-link" href="admVIEW.php">VOLTAR</a>
                            </li>
                <li class="nav-item">
                              <a class="nav-link" href="#">SAIR</a>
                            </li>
              </ul> </div></nav></div></div>
</head>

<body>

<nav class="navegacao">
    <ul>
<!--        <li><a href="cadastroDeFuncionario.php">Cadastrar </a>-->
<!--        <li><a href="consultaFuncionarioVIEW.php">Pesquisar</a>-->

    </ul>

</nav>


<div id="cadastro">
    <h1> CADASTRO DE EMPRESA </h1>
    <form action="#" name="form" id="form" method="post">

        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Funcionário"> <br><br>

        <label>CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ"> <br><br>

        <label>Nome Fantasia:</label>
        <input type="text" name="nomef" id="nomef" placeholder="Nome Fantasia"> <br><br>

        <label>Telefone:</label>
        <input type="text" name="tel" id="tel" placeholder="Telefone"> <br><br>

        <label>Rua:</label>
        <input type="text" name="rua" id="rua" placeholder="Rua"> <br><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" id="cidade" placeholder="Cidade"> <br><br>

        <label>CEP:</label>
        <input type="text" name="cep" id="cep" placeholder="CEP"> <br><br>

        <label>Bairro:</label>
        <input type="text" name="bairro" id="bairro" placeholder="Nome do Funcionário"> <br><br>

        <input type="button" name="button" id="button" value="Cadastrar" onclick="submitForm()">
        <input type="hidden" name="ok" id="ok">
</div>



<script type="text/javascript" src="../js/validarCadEmpresa.js"> </script>


<script type="text/javascript">

    function submitForm(){

        alert("esta a qui");
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