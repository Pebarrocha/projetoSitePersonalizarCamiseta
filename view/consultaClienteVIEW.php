<?php

require_once ('../controller/clienteController.php');
Processo('consultar');


?>

<!DOCTYPE html>

<html lang="PT-BR">
<head>
    <title> Consulta de Cliente</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/cliente.css"/>
</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroClienteVIEW.php">Cadastrar Cliente</a>
        <li><a href="consultaClienteVIEW.php">Pesquisar Cliente</a>
    </ul>
</nav>

<div id="radio">
<form name="form-consulta" action="#" id="form-consulta" method="post">
    <input type="radio" name="tipo" value="nome">Nome
    <input type="radio" name="tipo" value="cpf">CPF
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
</body>
</html>