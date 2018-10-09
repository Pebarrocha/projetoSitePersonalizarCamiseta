
<?php

require_once ('../controller/estampaController.php');
Processo('consultar');


?>

<!DOCTYPE html>

<html lang="PT-BR">
<head>
    <title> Consulta de Estampa </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css"/>
</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroEstampaVIEW.php">Cadastrar Estampa</a>
        <li><a href="consultaEstampaVIEW.php">Pesquisar Estampa</a>
    </ul>
</nav>



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
<th bgcolor=\"#CCCCCC\"> Código</th>
<th bgcolor=\"#CCCCCC\">Nome</th>
<th bgcolor=\"#CCCCCC\">IMG</th>
</tr>";

    while($row = mysqli_fetch_array($rs)){
        $varImg = $row['imagemEstampa'];
//        echo "<img border=0 height='63px' src='data:image/jpeg;base64,$varImg'>";
        echo "<tr>";
        echo "<td>" . $row['codEstampaCamiseta'] . "</td>";
        echo "<td>" . $row['nomeEstampa'] . "</td>";
        echo "<td> <img border=0 height='63px' src='data:image/jpeg;base64,$varImg'> </td>";
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
</body>
</html>

