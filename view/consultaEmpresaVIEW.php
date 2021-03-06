
<?php

require_once ('../controller/empresaController.php');
Processo('consultar');


?>

<!DOCTYPE html>

<html lang="PT-BR">
<head>
    <title> Consulta de Empresa </title>
    <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/adm.css">
    <link rel="stylesheet" type="text/css" href="css/estampa.css"/>
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

<div id="radio">
    <h1> CONSULTA DE EMPRESA </h1><BR><BR>
<form name="form-consulta" action="#" id="form-consulta" method="post">
    <input type="radio" name="tipo" value="nome" checked>Nome
    <input type="radio" name="tipo" value="cnpj">CNPJ
    <input type="radio" name="tipo" value="nomeFantasia">Nome Fantasia
<!--    <input type="radio" name="tipo" value="todos" checked>Todos-->

<!--    <input type="radio" name="tipo" value="tudo" checked>Todo o banco<br>-->
</div>
<div id="normal">
    <input type="text" name="edconsulta" id="edconsulta" placeholder="Digite uma palavra para consultar">

    <input type="button" name="button" id="button" value="Consultar" onclick="submitForm()">
    <input type="hidden" name="btnconsulta" id="btnconsulta">
</form>
</div>

<div id="consulta">
<?php

if (isset($rs)){

echo
"<table border=1>
<tr>
<th>Codigo</th>
<th>Nome</th>
<th>CNPJ</th>
<th>Nome Fantasia</th>
<th>Telefone</th>
<th>Rua</th>
<th>Cidade</th>
<th>CEP</th>
<th>Bairro</th>
</tr>";

    while($row = mysqli_fetch_array($rs)){

        echo "<tr>";
        echo "<td>" . $row['codEmpresa'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['cnpj'] . "</td>";
        echo "<td>" . $row['nomeFantasia'] . "</td>";
        echo "<td>" . $row['telefone'] . "</td>";
        echo "<td>" . $row['rua'] . "</td>";
        echo "<td>" . $row['cidade'] . "</td>";
        echo "<td>" . $row['CEP'] . "</td>";
        echo "<td>" . $row['bairro'] . "</td>";

        ?>
        <td><form>
                <a href="alterarEmpresaVIEW.php?id=<?php echo $row['codEmpresa']; ?>">
                    <input type="button" name="button" value="Alterar"></a><br>
                <a href="consultaEmpresaVIEW.php?btnexcluir=true&id=<?php echo $row['codEmpresa']; ?>">
                    <input type="button" name="button" value="Excluir"></a>
            </form></td>
        <?php
        echo "</tr>";
    }
    echo "</table>";
}
?>
</div>
<script type="text/javascript">

    function submitForm(){

        document.getElementById("btnconsulta").value = "true";
        document.getElementById("form-consulta").submit();
    }

</script>

    <script src="../jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>