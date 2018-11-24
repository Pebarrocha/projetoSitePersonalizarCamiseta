

<?php
require_once ('../controller/fotoCamisetaController.php');
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
    <title>Cadastro de Estampa</title>

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

                <li class="nav-item">
                    <a class="nav-link" href="consulta.php">CONSULTAR</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">SAIR</a>
                </li>
            </ul> </div></nav></div></div>



<script src="../jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<!--<nav class="navegacao">
    <ul>
        <li><a href="cadastroEstampaVIEW.php">Cadastrar Estampa</a>
        <li><a href="consultaEstampaVIEW.php">Pesquisar Estampa</a>
    </ul>
</nav>-->

<br><br><div id="normalc">
    <h1> Cadastro de Estampa </h1>
    <form enctype="multipart/form-data" action="#" name="form" id="form" method="post">
        <label>Nome:</label><br>
        <input type="text" required name="nome" id="nome" placeholder="Nome da Imagem"> <br><br>

        <label>Estampa:</label><br>
        <input type="file" required name="img" id="img"> <br><br>


        <input type="submit" name="button" id="button" value="Cadastrar" onclick="submitForm()" >
        <input type="hidden" name="ok" id="ok">
</div>

</form>
<script type="text/javascript" src="../js/validarEstampa.js"> </script>

<script type="text/javascript">
    function submitForm(){
        validaCadastro();
        // $imagem = file_get_contents('a.jpg');
        // echo base64_encode($imagem);
        document.getElementById("ok").value = "true";
        document.getElementById("form").submit();
    }
</script>
</body>
</html>
