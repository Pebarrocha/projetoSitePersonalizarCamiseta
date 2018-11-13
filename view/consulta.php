<?php

require_once ('../controller/consultaController.php');
Processo('consultar');


?>

<!DOCTYPE html>

<html lang="PT-BR">
<head>
    <title>Consulta</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/consulta.css"/>
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


<br><br><p><b>&nbsp&nbsp&nbspESCOLHA O TIPO DE CONSULTA:</b></p>
<div id="radio">
<form name="form-consulta" action="#" id="form-consulta" method="post">
    <input type="radio" name="tipo" value="empresa"> Empresa
    <input type="radio" name="tipo" value="estampa"> Estampa
    <input type="radio" name="tipo" value="funcionario"> Funcionário
    <input type="radio" name="tipo" value="fotoCamiseta"> Foto de camiseta
    <input type="radio" name="tipo" value="produtoPreDefinido"> Produto Pré Definido

<!--    <input type="radio" name="tipo" value="tudo" checked>Todo o banco<br>-->
</div>
<div id="normal"><br>
    <input type="consulta" name="edconsulta" id="edconsulta" placeholder="Digite uma palavra para consultar">

    <input type="button2" name="button" id="button" value="Consultar" onclick="submitForm()">
    <input type="hidden" name="btnconsulta" id="btnconsulta">
</form>
</div>

<div id="consulta">
<?php

if (isset($rs)){

echo
"<br><table border=1 bgcolor=white width=10% cellpadding=4>
<tr>
<th>Código</th>
<th>Nome</th>
<th>CPF</th>
<th>RG</th>
<th>Celular</th>
<th>Fixo</th>
<th>Rua</th>
<th>Nº</th>
<th>Bairro</th>
<th>Cidade</th>
<th>Cep</th>
<th>Descrição</th>
<th>Email</th>
<th>Senha</th>
</tr>";

    while($row = mysqli_fetch_array($rs)){

        echo "<tr>";
        echo "<td>" . $row['codCliente'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['cpf'] . "</td>";
        echo "<td>" . $row['rg'] . "</td>";
        echo "<td>" . $row['celular'] . "</td>";
        echo "<td>" . $row['fixo'] . "</td>";
        echo "<td>" . $row['rua'] . "</td>";
        echo "<td>" . $row['numero'] . "</td>";
        echo "<td>" . $row['bairro'] . "</td>";
        echo "<td>" . $row['cidade'] . "</td>";
        echo "<td>" . $row['cep'] . "</td>";
        echo "<td>" . $row['descricao'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['senha'] . "</td>";
        
        ?>
        <td><form>
                <a href="alterarClienteVIEW.php?id=<?php echo $row['codCliente']; ?>">
                    <input type="button" name="button" value="Alterar"></a>
                <a href="consultaClienteVIEW.php?btnexcluir=true&id=<?php echo $row['codCliente']; ?>"><input type="button" name="button" value="Excluir"></a>
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