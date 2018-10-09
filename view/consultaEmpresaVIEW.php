
<?php

require_once ('../controller/empresaController.php');
Processo('consultar');


?>

<!DOCTYPE html>

<html lang="PT-BR">
<head>
    <title> Consulta de Empresa </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css"/>
</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroEmpresaVIEW.php">Cadastrar Funcionário</a>
        <li><a href="consultaEmpresaVIEW.php">Pesquisar Funcionário</a>
    </ul>
</nav>

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
</body>
</html>