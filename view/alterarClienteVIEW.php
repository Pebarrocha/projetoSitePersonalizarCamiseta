<!--
Descrição: Formulário para alterar produtos pré definidos que estarão
a disposição para venda no site. Essa formulário está na pasta VIEW. Ele controla apenas o visual.
-->

<?php

require_once ('../controller/cadastroClienteController.php');

Processo('alterar');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/cliente.css">
    <title>Alteração de Cliente</title>

</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroDeCliente.php">Cadastrar Cliente</a>
        <li><a href="consultaClienteVIEW.php">Pesquisar Cliente</a>
    </ul>
</nav>

<div id="normal">
    <h1> Cadastro de Cliente </h1>
    <?php
    if(isset($rs)){
    while ($row = mysqli_fetch_array($rs)) {
    ?>
    <form action="#" name="form-alterar" id="form-alterar" method="post">

        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Funcionario" checked value="<?php echo $row['nome']; ?>"> <br>
        <label>CPF:</label> <br>
        <input type="text" name="cpf" id="cpf"  placeholder="CPF do Funcionario" value="<?php echo $row['cpf']; ?>"> <br>

        <label>senha:</label>
        <input type="text" name="senha" id="senha" placeholder="Senha" value="<?php echo $row['senha']; ?>"> <br>

        <input type="button76" name="button" id="button" value="Alterar" onclick="submitForm()">
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