
<?php

require_once ('../controller/funcionarioController.php');
Processo('consultar');


?>

<!DOCTYPE html>

<html lang="PT-BR">
<head>
    <title> Consulta de Funcionário </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css"/>
</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroFuncionarioVIEW.php">Cadastrar Funcionário</a>
        <li><a href="consultaFuncionarioVIEW.php">Pesquisar Funcionário</a>
    </ul>
</nav>

<div id="radio">
    <h1> CONSULTA DE FUNCIONÁRIO </h1><BR><BR>
<form name="form-consulta" action="#" id="form-consulta" method="post">
    <input type="radio" name="tipo" value="nome" checked>Nome
    <input type="radio" name="tipo" value="cpf">CPF
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
<th>Código</th>
<th>Nome</th>
<th>CPF</th>
<th>Senha</th>
</tr>";

    while($row = mysqli_fetch_array($rs)){

        echo "<tr>";
        echo "<td>" . $row['codFuncionario'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['cpf'] . "</td>";
        echo "<td>" . $row['senha'] . "</td>";

        ?>
        <td><form>
                <a href="alterarFuncionarioVIEW.php?id=<?php echo $row['codFuncionario']; ?>">
                    <input type="button" name="button" value="Alterar"></a><br>
                <a href="consultaFuncionarioVIEW.php?btnexcluir=true&id=<?php echo $row['codFuncionario']; ?>">
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