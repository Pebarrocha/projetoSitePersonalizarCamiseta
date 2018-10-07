
<?php

require_once ('../controller/funcionarioController.php');

Processo('alterar');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/cadastroFuncinario.css">
    <title>Alteração de Funcionário</title>

</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroFuncionarioVIEW.php">Cadastrar Funcionário</a>
        <li><a href="consultaFuncionarioVIEW.php">Pesquisar Funcionário</a>
    </ul>
</nav>

<div id="normal">
    <h1> Cadastro de Funcionário </h1>
    <?php
    if(isset($rs)){
    while ($row = mysqli_fetch_array($rs)) {
    ?>
    <form action="#" name="form-alterar" id="form-alterar" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Funcionario" value="<?php echo $row['nome']; ?>"> <br>
        <label>CPF:</label> <br>
        <input type="text" name="cpf" id="cpf"  placeholder="CPF do Funcionario" value="<?php echo $row['cpf']; ?>"> <br>

        <label>senha:</label>
        <input type="text" name="senha" id="senha" placeholder="Senha" value="<?php echo $row['senha']; ?>"> <br>

        <input type="button" name="button" id="button" value="Alterar" onclick="submitForm()">
        <input type="hidden" name="btnalterar" id="btnalterar">
</div>
</form>
<?php }
}?>
<script type="text/javascript" src="../js/validarCadFuncionario.js"> </script>
<script type="text/javascript">
    function submitForm(){

        validaCadastro();
        document.getElementById("btnalterar").value = "true";
        document.getElementById("form-alterar").submit();
    }
</script>
</body>
</html>