<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 07/09/2018

Descrição: Formulário para cadastro dos produtos pré definidos que estarão
a disposição para venda no site. Essa formulário está na pasta VIEW. Ele controla apenas o visual e as entradas
digitadas pelo usuário na hora do cadastro.
-->

<?php
//Chamando o controller para o envio dos dados
require_once ('../controller/funcionarioController.php');
//Manda o 'incluir' para o método e entra no switch case
Processo('incluir');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/cadastroFuncinario.css">
    <title>Cadastro de Camisetas Pré-Definidas</title>
</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroFuncionarioVIEW.php">Cadastrar Funcionário</a>
        <li><a href="consultaFuncionarioVIEW.php">Pesquisar Funcionário</a>
    </ul>
</nav>
<!--
Criação dos formularios para recebimento das informações digitadas pelo usuário
O input do formulario (a entrada) é representada pelo seu "name", o valor do name do input será responsavel por enviar o valor do dado digitado pra o controller e depois para o banco de dados
-->
<div id="normal">
    <h1> Cadastro de Funcionário </h1>
    <form enctype="multipart/form-data" action="#" name="form" id="form" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Funcionário"> <br>
        <label>Descrição:</label> <br>
        <input type="text" name="cpf" id="cpf" placeholder="CPF" maxlength="11" size="11"> <br>
        <label>Tamanho:</label>
        <input type="text" name="senha" id="senha" placeholder="Senha"> <br>

            <!--O primeiro button é visivel para o usuário. Quando ele é clicado ele aciona a função submitForm() do
            java script, que disparará os inputs dos forms para a página controller
            O segundo botão é invisivel, ele será ativado dentro da função, e o controller receberá ele para poder enfim liberar os inputs -->
            <input type="button" name="button" id="button" value="Cadastrar" onclick="submitForm()">
            <input type="hidden" name="ok" id="ok">
</div>

</form>
<script type="text/javascript" src="../js/validarCadFuncionario.js"> </script>
<!--Script (javascript) para submeter as informações resgatadas nos inputs
Ele pega os ids 'ok' e 'form' e trabalha com eles. O elemento ok é passado a ser true, enquanto
o elemento de id 'form' é submetido-->
<script type="text/javascript">
    function submitForm(){
        validaCadastro();
        document.getElementById("ok").value = "true";
        document.getElementById("form").submit();
//document.forms['form'].action = "../controller/produtoPreDefinidoController.php";
    }
</script>
</body>
</html>
