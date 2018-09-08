<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 07/09/2018
-->



<?php

require_once ('../controller/produtoPreDefinidoController.php');
Processo('consultar');


?>

<!DOCTYPE html>

<html lang="PT-BR">
<head>
<title> Consulta de Produtos Pré Definidos </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/predefinido.css"/>
</head>
<body>
		
<form name="form-consulta" action="#" id="form-consulta" method="post">
<input type="radio" name="tipo" value="nome">Nome
<input type="radio" name="tipo" value="descricao">Descricao
<input type="radio" name="tipo" value="tamanho">Tamanho
<input type="radio" name="tipo" value="sexo">Sexo
<input type="radio" name="tipo" value="modelo">Modelo
<input type="radio" name="tipo" value="preco">Preço<br>

<input type="text" name="edconsulta" id="edconsulta" placeholder="Digite uma palavra para consultar">
<input type="button" name="button" id="button" value="Consultar" onclick="submitForm()">
<input type="hidden" name="btnconsulta" id="btnconsulta">
</form>

<?php
echo 
"<table border=1>
<tr>
<th>Código</th>
<th>Nome</th>
<th>Descricao</th>
<th>Tamanho</th>
<th>Imagem</th>
<th>Sexo</th>
<th>Modelo</th>
<th>Foto Camiseta</th>
<th>Preco</th>
<th>Opcao</th>
</tr>";
if (isset($rs)){
while($row = mysqli_fetch_array($rs)){
								
echo "<tr>";
echo "<td>" . $row['codCamisetaPreDefinida'] . "</td>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['descricao'] . "</td>";
echo "<td>" . $row['tamanho'] . "</td>";
echo "<td>" . $row['imagem'] . "</td>";
echo "<td>" . $row['sexo'] . "</td>";
echo "<td>" . $row['modelo'] . "</td>";
echo "<td>" . $row['FotoCamiseta_codFotoCamiseta'] . "</td>";
echo "<td>" . $row['preco'] . "</td>";		
?>
<td><form>
<a href="alterarProdutoPreDefinidoVIEW.php?id=<?php echo $row['codCamisetaPreDefinida'] ?>"><input type="button" name="button" value="Alterar" onclick="submitForm()"></a>
<input type="hidden" name="btnconsulta" id="btnconsulta">

<a href="consultaProdutoPreDefinidoVIEW.php?id=<?php echo $row['codCamisetaPreDefinida'] ?>"><input type="button" name="button" value="Excluir" onclick="exclusaoForm()"></a>
<input type="hidden" name="btnexcluir" id="btnexcluir">
</form></td>					
<?php
echo "</tr>";			
}
echo "</table>";
}
?>
<script type="text/javascript">

function exclusaoForm(){
alert("Entrou na exclusão");
document.getElementById("btnexcluir").value = "true";	
document.getElementById("form-consulta").submit();
}

function submitForm(){
document.getElementById("btnconsulta").value = "true";
document.getElementById("form-consulta").submit();
}
</script>
</body>
</html>