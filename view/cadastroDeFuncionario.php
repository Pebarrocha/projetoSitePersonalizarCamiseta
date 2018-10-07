<!--
 Autor: Renan Delfino
 Data da última modificação: 28/08/2018
-->


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

<
<div id="cadastro">
    <h1> CADASTRO DE FUNCIONÁRIO </h1>
    <form action="#" name="form" id="form" method="post">

        <label>Nome:</label>
        <input type="text" required name="nome" id="nome" placeholder="Nome do Funcionário"> <br>

        <label>CPF:</label> <br>
        <input type="text" name="cpf" id="cpf" placeholder="CPF do Funcionário" onkeyup="somenteNumeros(this)" /> <br>


        <label>Senha:</label> <br>
        <input type="text" name="senha" id="senha" placeholder="Senha do Funcionário a ser cadastrodo"> <br>


        <input type="button" name="button" id="button" value="Cadastrar" onclick="validaCadastro(e)" >
        <input type="hidden" name="ok" id="ok">
</div>



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