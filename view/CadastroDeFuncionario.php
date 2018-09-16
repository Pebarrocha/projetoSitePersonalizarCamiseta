<!--
 Autor: Renan Delfino
 Data da última modificação: 28/08/2018
-->

<?php
//Chamando o controller para o envio dos dados
//require_once ('../controller/');
//Manda o 'incluir' para o método e entra no switch case
//Processo('incluir');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/cadastroFuncinario.css">
    <title>Cadastro de Funcionário</title>

    <style type="text/css">
    </style>

    <script>
        function somenteNumeros(num) {
            var er = /[^0-9.]/;
            er.lastIndex = 0;
            var campo = num;
            if (er.test(campo.value)) {
                campo.value = "";
            }
        }
    </script>

</head>

<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroDeFuncionario.php">Cadastrar </a>
        <li><a href="x">Pesquisar</a>

    </ul>

</nav>

<!--
    Criação dos formularios para recebimento das informações digitadas pelo usuário
    O input do formulario (a entrada) é representada pelo seu "name", o valor do name do input será responsavel por enviar o valor do dado digitado pra o controller e depois para o banco de dados
-->
<div id="cadastro">
    <h1> CADASTRO DE FUNCIONÁRIO </h1>
    <form action="#" name="form" id="form" method="post">

        <label>Nome:</label>
        <input type="text" required name="nome" id="nome" placeholder="Nome do Funcionário"> <br>

        <label>CPF:</label> <br>
        <input type="text" name="cpf" id="cpf" placeholder="CPF do Funcionário" onkeyup="somenteNumeros(this)" /> <br>


        <label>Senha:</label> <br>
        <input type="text" name="senha" id="senha" placeholder="Senha do Funcionário a ser cadastrodo"> <br>

        <!--O primeiro button é visivel para o usuário. Quando ele é clicado ele aciona a função submitForm() do
        java script, que disparará os inputs dos forms para a página controller
        O segundo botão é invisivel, ele será ativado dentro da função, e o controller receberá ele para poder enfim liberar os inputs -->
        <input type="button" name="button" id="button" value="Cadastrar" onclick="validaCadastro(e)" >
        <input type="hidden" name="ok" id="ok">
</div>



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