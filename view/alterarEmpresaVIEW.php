
<?php

require_once ('../controller/empresaController.php');

Processo('alterar');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Alteração de Empresao</title>

</head>
<body>

<nav class="navegacao">
    <ul>
<!--        <li><a href="cadastroFuncionarioVIEW.php">Cadastrar Funcionário</a>-->
<!--        <li><a href="consultaFuncionarioVIEW.php">Pesquisar Funcionário</a>-->
    </ul>
</nav>

<div id="normal">
    <h1> Cadastro de Empresa </h1>
    <?php
    if(isset($rs)){
    while ($row = mysqli_fetch_array($rs)) {
    ?>
    <form action="#" name="form-alterar" id="form-alterar" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome da empresa" value="<?php echo $row['nome']; ?>"> <br>

        <label>CNPJ:</label> <br>
        <input type="text" name="cnpj" id="cnpj"  placeholder="CNPJ da empresa" value="<?php echo $row['cnpj']; ?>"> <br>

        <label>Nome Fantasia:</label> <br>
        <input type="text" name="nomef" id="nomef"  placeholder="Nome Fnatasia" value="<?php echo $row['nomeFantasia']; ?>"> <br>

        <label>Telefone:</label> <br>
        <input type="text" name="tel" id="tel"  placeholder="Telefone" value="<?php echo $row['telefone']; ?>"> <br>

        <label>Rua:</label> <br>
        <input type="text" name="rua" id="rua"  placeholder="Rua" value="<?php echo $row['rua']; ?>"> <br>

        <label>Cidade:</label> <br>
        <input type="text" name="cidade" id="cidade"  placeholder="Cidade" value="<?php echo $row['cidade']; ?>"> <br>

        <label>CEP:</label> <br>
        <input type="text" name="cep" id="cep"  placeholder="CEP" value="<?php echo $row['CEP']; ?>"> <br>

        <label>Bairro:</label> <br>
        <input type="text" name="bairro" id="bairro"  placeholder="Bairro" value="<?php echo $row['bairro']; ?>"> <br>


        <input type="button" name="button" id="button" value="Alterar" onclick="submitForm()">
        <input type="hidden" name="btnalterar" id="btnalterar">
</div>
</form>
<?php }
}?>
<script type="text/javascript" src="../js/validarCadEmpresa.js"> </script>
<script type="text/javascript">
    function submitForm(){

        validaCadastro();
        document.getElementById("btnalterar").value = "true";
        document.getElementById("form-alterar").submit();
    }
</script>
</body>
</html>