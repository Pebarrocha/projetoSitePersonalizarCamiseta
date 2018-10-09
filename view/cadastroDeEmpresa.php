<!--
 Autor: Renan Delfino
 Data da última modificação: 28/08/2018
-->


<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Cadastro de Funcionário</title>

    <style type="text/css">
    </style>

    <script>

    </script>

</head>

<body>

<nav class="navegacao">
    <ul>
<!--        <li><a href="cadastroDeFuncionario.php">Cadastrar </a>-->
<!--        <li><a href="consultaFuncionarioVIEW.php">Pesquisar</a>-->

    </ul>

</nav>

<
<div id="cadastro">
    <h1> CADASTRO DE EMPRESA </h1>
    <form action="#" name="form" id="form" method="post">

        <label>Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do Funcionário"> <br><br>

        <label>CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ"> <br><br>

        <label>Nome Fantasia:</label>
        <input type="text" name="nomef" id="nomef" placeholder="Nome Fantasia"> <br><br>

        <label>Telefone:</label>
        <input type="text" name="tel" id="tel" placeholder="Telefone"> <br><br>

        <label>Rua:</label>
        <input type="text" name="rua" id="rua" placeholder="Rua"> <br><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" id="cidade" placeholder="Cidade"> <br><br>

        <label>CEP:</label>
        <input type="text" name="cep" id="cep" placeholder="CEP"> <br><br>

        <label>Bairro:</label>
        <input type="text" name="bairro" id="bairro" placeholder="Nome do Funcionário"> <br><br>

        <input type="button" name="button" id="button" value="Cadastrar" onclick="submitForm()">
        <input type="hidden" name="ok" id="ok">
</div>



<script type="text/javascript" src="../js/validarCadEmpresa.js"> </script>


<script type="text/javascript">

    function submitForm(){

        alert("esta a qui");
        validaCadastro();
        document.getElementById("ok").value = "true";
        document.getElementById("form").submit();
    }
</script>


</body>


</html>