<?php
require_once ('../controller/fotoCamisetaController.php');
Processo('incluir');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/CadastroFotoCamisetaPersonalizada.css">
    <title>Cadastro de Foto de Camiseta</title>

</head>
<body>

<nav class="navegacao">
    <ul>
        <li><a href="CadastroFotoCamisetaPersonalizada.php">Cadastrar Imagem</a>
        <li><a href="ConsultaFotoCamisetaVIEW.php">Pesquisar Imagem</a>
    </ul>
</nav>

<div id="normalc">
    <h1> Cadastro de Foto Camiseta </h1>
    <form enctype="multipart/form-data" action="#" name="form" id="form" method="post">
        <label>Nome:</label><br>
        <input type="text" required name="nome" id="nome" placeholder="Nome da Imagem"> <br><br>

        <label>Imagem:</label><br>
        <input type="file" required name="img" id="img"> <br><br>


        <input type="submit" name="button" id="button" value="Enviar" onclick="submitForm()" >
        <input type="hidden" name="ok" id="ok">
</div>

</form>
<script type="text/javascript" src="../js/validarImagem.js"> </script>

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
