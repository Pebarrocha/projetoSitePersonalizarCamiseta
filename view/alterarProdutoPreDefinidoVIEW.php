<!--
 ALTERAR PRODUTO PRE DEFINIDO VIEW
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 07/09/2018

Descrição: Formulário para alterar produtos pré definidos que estarão
a disposição para venda no site. Essa formulário está na pasta VIEW. Ele controla apenas o visual.
-->

<?php

require_once ('../controller/produtoPreDefinidoController.php');

Processo('alterar');
?>

<!DOCTYPE html>

<html>
<head lang="pt-br">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/predefinido.css?13082018">
<title>Alteração de Produtos Pré-Definidos</title>

</head>
<body>		
<div>
<h1> Cadastro de produtos pré-definidos </h1>
<?php 
if(isset($rs)){
while ($row = mysqli_fetch_array($rs)) { 
?>
<form action="#" name="form-alterar" id="form-alterar" method="post">
<!--<script> alert("Entrou PORRA");</script>-->
<label>Nome:</label> 
<input type="text" name="nome" id="nome" placeholder="Nome da camiseta aqui!" value="<?php echo $row['nome']; ?>"> <br>
<label>Descrição:</label> <br>
<textarea name="descricao" id="descricao" rows="10" cols="30" placeholder="Digite a descrição da camiseta aqui!" value = ""><?php echo $row['descricao']; ?></textarea><br>
<label>Tamanho:</label> <select name="tamanho" id="tamanho" value="<?php echo $row['tamanho']; ?>">
<option value="PP">PP</option>
<option value="P">P</option>	
<option value="M">M</option>		
<option value="G">G</option>
<option value="GG">GG</option>
</select><br>
<label>Imagem: <input type="text" name="imagem" value="<?php echo $row['imagem']; ?>">
 <br>
<label>Sexo:</label> <select name="sexo" id="sexo" value="<?php echo $row['sexo'];  ?>">
<option value="masculino">Masculino</option>
<option value="feminino">Feminino</option>
</select><br>
<label>Modelo:</label> <select name="modelo" id="modelo" value="<?php echo $row['modelo'];  ?>">
<option value="tshirt">T-shirt</option>
<option value="polo">Polo Feminina</option>
<option value="polo">Polo Masculina</option>
<option value="babylook">Baby Look</option>
<option value="cropped">Cropped</option>
</select><br>			

<label>Preço:</label>
<input type="text" name="preco" id="preco" placeholder="Digite o preço da camiseta" value="<?php echo $row['preco']; ?>">
<input type="button" name="button" id="button" value="Alterar" onclick="submitForm()">
<input type="hidden" name="btnalterar" id="btnalterar">	
</div>
</form>
<?php } 
}?>
<script type="text/javascript" src="../js/validacao.js"> </script>
<script type="text/javascript">
function submitForm(){	

validaCadastro();			
document.getElementById("btnalterar").value = "true";					
document.getElementById("form-alterar").submit();
}		
</script>
</body>
</html>