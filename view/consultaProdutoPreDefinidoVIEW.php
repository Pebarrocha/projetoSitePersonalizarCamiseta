<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 07/09/2018
-->

<?php

require_once ('../controller/produtoPreDefinidoController.php');
Processo('consultar');


?>

<!DOCTYPE html>

<html lang="PT-BR">
<head>
<title> Consulta de Produtos Pré Definidos </title>
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
<form name="form-consulta" action="#" id="form-consulta" method="post">
<input type="radio" name="tipo" value="nome" checked>Nome
<input type="radio" name="tipo" value="descricao">Descricao
<input type="radio" name="tipo" value="tamanho">Tamanho
<input type="radio" name="tipo" value="sexo">Sexo
<input type="radio" name="tipo" value="modelo">Modelo
<input type="radio" name="tipo" value="preco">Preço<br>

<input type="text" name="edconsulta" id="edconsulta" placeholder="Digite uma palavra para consultar">
<input type="button" name="button" id="button" value="Consultar" onclick="submitForm()">
<input type="hidden" name="btnconsulta" id="btnconsulta">
</form>
</div>
<div id="consulta">
<?php
echo 
"<table border=1>
<tr>
<th>Código</th>
<th>Nome</th>
<th>Descricao</th>
<th>Tamanho</th>
<th>Imagem</th>
<th>Sexo</th>
<th>Modelo</th>
<th>Foto Camiseta</th>
<th>Preco</th>
<th>Opcao</th>
</tr>";
if (isset($rs)){
while($row = mysqli_fetch_array($rs)){
    $varImg = $row['imagem'];
echo "<tr>";
echo "<td>" . $row['codCamisetaPreDefinida'] . "</td>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['descricao'] . "</td>";
echo "<td>" . $row['tamanho'] . "</td>";
echo "<td>  <img border=0 height='63px' src='data:image/jpeg;base64,$varImg'> </td>";
echo "<td>" . $row['sexo'] . "</td>";
echo "<td>" . $row['modelo'] . "</td>";
echo "<td>" . $row['FotoCamiseta_codFotoCamiseta'] . "</td>";
echo "<td>" . $row['preco'] . "</td>";		
?>
<td><form>
<a href="alterarProdutoPreDefinidoVIEW.php?id=<?php echo $row['codCamisetaPreDefinida']; ?>"><input type="button" name="button" value="Alterar"></a>
<a href="consultaProdutoPreDefinidoVIEW.php?btnexcluir=true&id=<?php echo $row['codCamisetaPreDefinida']; ?>"><input type="button" name="button" value="Excluir"></a>
</form></td>					
<?php
echo "</tr>";			
}
echo "</table>";
}
?>
<script type="text/javascript">

function submitForm(){

document.getElementById("btnconsulta").value = "true";
document.getElementById("form-consulta").submit();
}

</script></div>
   <script src="../jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>