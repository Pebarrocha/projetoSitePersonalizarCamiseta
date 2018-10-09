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
    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Cadastro de Estampa</title>

    <style type="text/css">
    </style>

</head>


<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroEstampaVIEW.php">Cadastrar Estampa</a>
        <li><a href="consultaEstampaVIEW.php">Pesquisar Estampa</a>

    </ul>

</nav>

<div id="cadastro">
    <h1> CADASTRO DE ESTAMPA </h1>
    <form action="#" name="form" id="form" method="post">

        <label>Nome:</label>
        <input type="text" required name="nome" id="nome" placeholder="Nome da estampa"> <br>

        <label>Estampa:</label>
        <input type="text" required name="img" id="img"> <br>


        <input type="button" name="button" id="button" value="Cadastrar" onclick="validaCadastro()" >
        <input type="hidden" name="ok" id="ok">
</div>

<script type="text/javascript" src="../js/validarEstampa.js"> </script>

<script type="text/javascript">

    function submitForm(){
        validaCadastro();

        // var imag = document.getElementById("img").value();
        document.getElementById("ok").value = "true";
        document.getElementById("form").submit();
        //document.forms['form'].action = "../controller/produtoPreDefinidoController.php";
    }
</script>

</body>

</html>