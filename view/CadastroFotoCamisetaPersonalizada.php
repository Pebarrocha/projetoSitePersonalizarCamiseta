<!--Autor: Gustavo Sanches Pasqualini
 Data da última modificação: 04/09/2018

Descrição: Formulário para foto de camiseta que efetuarão compras no site. 
Esse formulário está na pasta VIEW. Ele controla apenas o visual e as entradas
digitadas pelo usuário na hora do cadastro.-->

<?php
//Chamando o controller para o envio dos dados
require_once ('../controller/produtoPreDefinidoController.php');
//Manda o 'incluir' para o método e entra no switch case
Processo('incluir');
?>

<!DOCTYPE html>

<html>
	<head lang="pt-br">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/CadastroFotoCamisetaPersonalizada.css">
		<title>Cadastro de Foto de Camisetas</title>

		<style type="text/css">
			.msg-erro {color: red;}
		</style>

	</head>

	<body>		

		<!-- 
			Criação dos formularios para recebimento das informações digitadas pelo usuário
			O input do formulario (a entrada) é representada pelo seu "name", o valor do name do input será responsavel por enviar o valor do dado digitado pra o controller e depois para o banco de dados
		-->			
		<div>
				<h1> Imagem Da Camiseta </h1>
				<form action="#" name="form" id="form" method="post">
	

				<label>Imagem:</label> <input type="file" name="imagem"><br>
				<br>
				
				
			

				<!--O primeiro button é visivel para o usuário. Quando ele é clicado ele aciona a função submitForm() do
				java script, que disparará os inputs dos forms para a página controller
					O segundo botão é invisivel, ele será ativado dentro da função, e o controller receberá ele para poder enfim liberar os inputs -->
				<input type="button" name="button" id="button" value="Enviar" onclick="submitForm()">
				<input type="hidden" name="ok" id="ok">	
		</div>

		</form>
						
			
			<script type="text/javascript" src="../js/validacao.js"> </script>

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