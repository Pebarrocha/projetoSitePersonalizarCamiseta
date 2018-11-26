
<?php

require_once ('../controller/estampaController.php');
Processo('consultar');


?>

<!DOCTYPE html>

<html lang="PT-BR">
<head>
    <title> Consulta de Estampa </title>
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



<form name="form-consulta" action="#" id="form-consulta" method="post">
<!--    <input type="radio" name="todos" value="todos" checked>Todos-->
    <input type="hidden" name="tipo" value="nomeEstampa" checked>


<!--    <input type="radio" name="tipo" value="tudo" checked>Todo o banco<br>-->

<div id="normal">
    <h1> CONSULTA DE ESTAMPA </h1><BR><BR>
    <input type="text" name="edconsulta" id="edconsulta" placeholder="Digite o nome da estampa">

    <input type="button" name="button" id="button" value="Consultar" onclick="submitForm()">
    <input type="hidden" name="btnconsulta" id="btnconsulta">
</form>
</div>

<div id="consulta">
<?php

if (isset($rs)){

echo
"
<table border=1>
<tr>
<th bgcolor=\"#CCCCCC\">Código</th>
<th bgcolor=\"#CCCCCC\">Nome</th>
<th bgcolor=\"#CCCCCC\">IMG</th>
</tr>";

    while($row = mysqli_fetch_array($rs)){
        $varImg = $row['imagemEstampa'];
//        echo "<img border=0 height='63px' src='data:image/jpeg;base64,$varImg'>";
        echo "<tr>";
        echo "<td>" . $row['codEstampaCamiseta'] . "</td>";
        echo "<td>" . $row['nomeEstampa'] . "</td>";
        echo "<td>  <img border=0 height='63px' src='data:image/jpeg;base64,$varImg'> </td>";
        ?>
        <td bgcolor="#CCCCCC" ><form>
                <a href="alterarEstampaVIEW.php?id=<?php echo $row['codEstampaCamiseta']; ?>">
                    <input type="button"  name="button" value="Alterar"></a><br>
                <a href="consultaEstampaVIEW.php? btnexcluir=true&id=<?php echo $row['codEstampaCamiseta']; ?>"><input type="button" name="button" value="Excluir"></a>
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

