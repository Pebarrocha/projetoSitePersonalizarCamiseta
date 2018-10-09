<?php

require_once ('../controller/clienteController.php');

Processo('alterar');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/cliente.css">
    <title>ALTERAÇÃO DE CLIENTE</title>

</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroClienteVIEW.php">Cadastrar Cliente</a>
        <li><a href="consultaClienteVIEW.php">Pesquisar Cliente</a>
    </ul>
</nav>

<div id="normal">
    <h1>Cadastro de Cliente</h1>
    <?php
    if(isset($rs)){
    while ($row = mysqli_fetch_array($rs)) {
    ?>
    <form action="#" name="form-alterar" id="form-alterar" method="post">

        <label>NOME:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Funcionario" value="<?php echo $row['nome']; ?>"> <br>

        <label>CPF:</label>
        <input type="text" name="cpf" id="cpf" placeholder="cpf do Funcionario" value="<?php echo $row['cpf']; ?>"> <br>
        

        <label>RG:</label>
        <input type="text" name="rg" id="rg" placeholder="rg do Funcionario" value="<?php echo $row['rg']; ?>"> <br>
        

        <label>CELULAR:</label>
        <input type="text" name="celular" id="celular" placeholder="celular do Funcionario" value="<?php echo $row['celular']; ?>"> <br>
        

        <label>FIXO:</label>
        <input type="text" name="fixo" id="fixo" placeholder="fixo do Funcionario" value="<?php echo $row['fixo']; ?>"> <br>
        

        <label>RUA:</label>
        <input type="text" name="rua" id="rua" placeholder="rua do Funcionario" value="<?php echo $row['rua']; ?>"> <br>
        

        <label>Nº:</label>
        <input type="text" name="numero" id="numero" placeholder="numero do Funcionario" value="<?php echo $row['numero']; ?>"> <br>
        

        <label>BAIRRO:</label>
        <input type="text" name="bairro" id="bairro" placeholder="bairro do Funcionario" value="<?php echo $row['bairro']; ?>"> <br>
        

        <label>CIDADE:</label>
        <input type="text" name="cidade" id="cidade" placeholder="cidade do Funcionario" value="<?php echo $row['cidade']; ?>"> <br>
        

        <label>CEP:</label>
        <input type="text" name="cep" id="cep" placeholder="cep do Funcionario" value="<?php echo $row['cep']; ?>"> <br>

        <label>DESCRIÇÃO:</label>
        <input type="text" name="descricao" id="descricao" placeholder="descricao do Funcionario" value="<?php echo $row['descricao']; ?>"> <br>

        <label>EMAIL:</label>
        <input type="text" name="email" id="email" placeholder="email do Funcionario" value="<?php echo $row['email']; ?>"> <br>

        <label>SENHA:</label>
        <input type="text" name="senha" id="senha" placeholder="senha do Funcionario" value="<?php echo $row['senha']; ?>"> <br>

        <label>SENHA:</label>
        <input type="text" name="senha2" id="senha2" placeholder="senha do Funcionario" value="<?php echo $row['senha']; ?>"> <br>

        <input type="button2" name="button" id="button" value="Alterar" onclick="submitForm()">
        <input type="hidden" name="btnalterar" id="btnalterar">

</div>
</form>

<?php }
}?>
<script type="text/javascript" src="../js/validacaoCliente.js"> </script>
<script type="text/javascript">
    function submitForm(){
        validaCadastro();
        document.getElementById("btnalterar").value = "true";
        document.getElementById("form-alterar").submit();
    }
</script>
</body>
</html>