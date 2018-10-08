
<?php

require_once ('../controller/estampaController.php');

Processo('alterar');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Alteração de Estampa</title>

</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroEstampaVIEW.php">Cadastrar Estampa</a>
        <li><a href="consultaEstampaVIEW.php">Pesquisar Estampa</a>
    </ul>
</nav>

<div id="normal">
    <h1> Cadastro de Estampa </h1>
    <?php
    if(isset($rs)){
    while ($row = mysqli_fetch_array($rs)) {
    ?>
    <form action="#" name="form-alterar" id="form-alterar" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $row['nomeEstampa']; ?>"> <br>

        <label>Imagen:</label> <br>
        <input type="text" name="img" id="img" value="<?php echo $row['imagemEstampa']; ?>"> <br>


        <input type="button" name="button" id="button" value="Alterar" onclick="submitForm()">
        <input type="hidden" name="btnalterar" id="btnalterar">
</div>
</form>
<?php }
}?>
<script type="text/javascript" src="../js/validarEstampa.js"> </script>
<script type="text/javascript">
    function submitForm(){

        validaCadastro();
        document.getElementById("btnalterar").value = "true";
        document.getElementById("form-alterar").submit();
    }
</script>
</body>
</html>