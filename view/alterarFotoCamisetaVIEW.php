
<?php

require_once ('../controller/fotoCamisetaController.php');

Processo('alterar');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/CadastroFotoCamisetaPersonalizada.css">
    <title>Alteração de Imagem</title>

</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="CadastroFotoCamisetaPersonalizada.php">Cadastrar Imagem</a>
        <li><a href="ConsultaFotoCamisetaVIEW.php">Pesquisar Imagem</a>
    </ul>
</nav>

<div id="normal">
    <h1> Cadastro de Imagem </h1>
    <?php
    if(isset($rs)){
    while ($row = mysqli_fetch_array($rs)) {
    $varImg = $row['fotoCamiseta'];
    ?>
    <form action="#" name="form-alterar" id="form-alterar" method="post">
        <label>Nome da Imagem:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $row['nomeCamiseta']; ?>"> <br>

        <input type="hidden" name="img" id="img" value="1">


        <input type="submit" width="30%" name="button" id="button" value="Alterar" onclick="submitForm()">
        <input type="hidden" name="btnalterar" id="btnalterar">
</div>
</form>
<?php }
}?>
<script type="text/javascript" src="../js/validarImagem.js"> </script>
<script type="text/javascript">
    function submitForm(){

        validaCadastro();
        document.getElementById("btnalterar").value = "true";
        document.getElementById("form-alterar").submit();
    }
</script>
</body>
</html>