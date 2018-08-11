<?php
require_once ('../controller/produtoPreDefinidoController.php');
Processo('incluir');
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo_cadastro_cliente.css">
		<title>Cadastro de Camisetas Pré-Definidas</title>
	</head>

	<body>

		<h1> Cadastro de produtos pré-definidos </h1>

		<form action="#" name="form" id="form" method="post">
			Sigla:
			<input type="text" name="sigla" id="sigla"><br>
			Nome: 
			<input type="text" name="nome" id="nome"> <br>			
			<input type="button" name="button" id="button" value="Cadastrar" onclick="submitForm()">
			<input type="hidden" name="ok" id="ok">		
			
		</form>		

			<script type="text/javascript">
				function submitForm(){		
		
					document.getElementById("ok").value = "true";					
					document.getElementById("form").submit();
					//document.forms['form'].action = "../controller/produtoPreDefinidoController.php";

			}		
			</script>
	</body>
	


</html>