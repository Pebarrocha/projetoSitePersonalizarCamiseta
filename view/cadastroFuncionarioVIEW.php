

<?php
require_once ('../controller/funcionarioController.php');
Processo('incluir');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Cadastro de Camisetas Pré-Definidas</title>
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
    <form enctype="multipart/form-data" action="#" name="form" id="form" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Funcionário"> <br><br>
        <label>CPF:</label> <br>
        <input type="text" name="cpf" id="cpf" placeholder="CPF" maxlength="11" size="11"> <br><br>
        <label>Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Senha"> <br><br>


            <input type="button" name="button" id="button" value="Cadastrar" onclick="submitForm()">
            <input type="hidden" name="ok" id="ok">
</div>

</form>
<script type="text/javascript" src="../js/validarCadFuncionario.js"> </script>

<script type="text/javascript">
    function submitForm(){
        validaCadastro();
        document.getElementById("ok").value = "true";
        document.getElementById("form").submit();
    }
</script>
</body>
</html>
