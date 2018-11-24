<?php
require_once ('../controller/fotoCamisetaController.php');
Processo('incluir');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Cadastro de Foto de Camiseta</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adm.css">

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
                              <a class="dropdown-item" href="cadastroDeEmpresa.php">CADASTRAR EMPRESA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroEstampaVIEW.php">CADASTRAR ESTAMPA</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="cadastroFuncionarioVIEW.php">CADASTRAR FUNCIONÁRIO</a>
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



<div >
    <h1> Cadastro de Foto Camiseta </h1>
    <form enctype="multipart/form-data" action="#" name="form" id="form" method="post">
        <label>Nome:</label><br>
        <input type="text" required name="nome" id="nome" placeholder="Nome da Imagem"> <br><br>

        <label>Imagem:</label><br>
        <input type="file" required name="img" id="img"> <br><br>


        <input type="submit" name="button" id="button" value="Enviar" onclick="submitForm()" >
        <input type="hidden" name="ok" id="ok">
</div>

</form>
<script type="text/javascript" src="../js/validarImagem.js"> </script>

<script type="text/javascript">
    function submitForm(){
        validaCadastro();
        // $imagem = file_get_contents('a.jpg');
        // echo base64_encode($imagem);
        document.getElementById("ok").value = "true";
        document.getElementById("form").submit();
    }
</script>
   <script src="../jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
