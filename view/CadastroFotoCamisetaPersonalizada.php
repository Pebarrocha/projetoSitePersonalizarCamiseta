<?php
require_once ('../controller/fotoCamisetaController.php');
Processo('incluir');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estampa.css">
    <title>Cadastro de Foto de Camiseta</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adm.css">

</head>
<body>
<script src="../jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>


<div >
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
   <script src="../jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
