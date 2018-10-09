

<?php
require_once ('../controller/estampaController.php');
Processo('incluir');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Cadastro de Estampa</title>

</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="cadastroEstampaVIEW.php">Cadastrar Estampa</a>
        <li><a href="consultaEstampaVIEW.php">Pesquisar Estampa</a>
    </ul>
</nav>

<div id="normalc">
    <h1> Cadastro de Estampa </h1>
    <form enctype="multipart/form-data" action="#" name="form" id="form" method="post">
        <label>Nome:</label><br>
        <input type="text" required name="nome" id="nome" placeholder="Nome da estampa"> <br><br>

        <label>Estampa:</label><br>
        <input type="file" required name="img" id="img"> <br><br>


        <input type="submit" name="button" id="button" value="Cadastrar" onclick="submitForm()" >
        <input type="hidden" name="ok" id="ok">
</div>

</form>
<script type="text/javascript" src="../js/validarEstampa.js"> </script>

<script type="text/javascript">
    function submitForm(){
        validaCadastro();
        // $imagem = file_get_contents('a.jpg');
        // echo base64_encode($imagem);
        document.getElementById("ok").value = "true";
        document.getElementById("form").submit();
    }
</script>
</body>
</html>
