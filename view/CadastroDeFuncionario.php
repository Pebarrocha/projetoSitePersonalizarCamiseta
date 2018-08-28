<!--
 Autor: Renan Delfino
 Data da última modificação: 28/08/2018
-->

<?php
//Chamando o controller para o envio dos dados
require_once ('../controller/produtoPreDefinidoController.php');
//Manda o 'incluir' para o método e entra no switch case
Processo('incluir');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/cadastro-de-funcionario.css?13082018">
    <title>Cadastro de Funcionário</title>

    <style type="text/css">
        .msg-erro {color: red;}
    </style>

</head>

<body>

<!--
    Criação dos formularios para recebimento das informações digitadas pelo usuário
    O input do formulario (a entrada) é representada pelo seu "name", o valor do name do input será responsavel por enviar o valor do dado digitado pra o controller e depois para o banco de dados
-->
<div>
    <h1> CADASTRO DE FUNCIONÁRIO </h1>
    <form action="#" name="form" id="form" method="post">

        <label>Nome:</label>
        <input type="text" required name="nome" id="nome" placeholder="Nome do Funcionário"> <br>

        <label>CPF</label> <br>
        <input type="text" name="nome" id="nome" placeholder="CPF do Funcionário"> <br>

        <label>Senha</label> <br>
        <input type="text" name="nome" id="nome" placeholder="Senha do Funcionário a ser cadastrodo"> <br>

        <!--O primeiro button é visivel para o usuário. Quando ele é clicado ele aciona a função submitForm() do
        java script, que disparará os inputs dos forms para a página controller
        O segundo botão é invisivel, ele será ativado dentro da função, e o controller receberá ele para poder enfim liberar os inputs -->
        <input type="button" name="button" id="button" value="Cadastrar" onclick="submitForm()">
        <input type="hidden" name="ok" id="ok">
</div>


</form>


<script type="text/javascript" src="../js/validacao.js"> </script>

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
