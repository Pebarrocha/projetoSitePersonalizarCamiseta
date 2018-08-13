<!--
 Autor: Pedro Barbosa Rocha
 Data da última modificação: 11/08/2018

Descrição: Formulário para cadastro dos produtos pré definidos que estarão
a disposição para venda no site. Essa formulário está na pasta VIEW. Ele controla apenas o visual e as entradas
digitadas pelo usuário na hora do cadastro.
-->

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
		<link rel="stylesheet" type="text/css" href="css/predefinido.css?13082018">
		<title>Cadastro de Camisetas Pré-Definidas</title>

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
			<h1> Cadastro de produtos pré-definidos </h1>
		<form action="#" name="form" id="form" method="post">
		
			<label>Nome:</label> 
			<input type="text" name="nome" id="nome" placeholder="Nome da camiseta aqui!"> <br>

			<label>Descrição:</label> <br>
			<textarea name="descricao" id="descricao" rows="10" cols="30" placeholder="Digite a descrição da camiseta aqui!"></textarea><br>

			<label>Tamanho:</label> <select name="tamanho" id="tamanho">
				<option value="PP">PP</option>
				<option value="P">P</option>	
				<option value="M">M</option>		
				<option value="G">G</option>
				<option value="GG">GG</option>
			</select><br>

			<label>Imagem:</label> <input type="file" name="imagem"><br>
			<br>
			<label>Sexo:</label> <select name="sexo" id="sexo">
				<option value="masculino">Masculino</option>
				<option value="feminino">Feminino</option>
			</select><br>

			<label>Modelo:</label> <select name="modelo" id="modelo">
				<option value="tshirt">T-shirt</option>
				<option value="polo">Polo Feminina</option>
				<option value="polo">Polo Masculina</option>
				<option value="babylook">Baby Look</option>
				<option value="cropped">Cropped</option>
			</select><br>			

			<label>Preço:</label>
				<input type="text" name="preco" id="preco" placeholder="Digite o preço da camiseta">

			<!--O primeiro button é visivel para o usuário. Quando ele é clicado ele aciona a função submitForm() do
			java script, que disparará os inputs dos forms para a página controller
				O segundo botão é invisivel, ele será ativado dentro da função, e o controller receberá ele para poder enfim liberar os inputs -->
			<input type="button" name="button" id="button" value="Cadastrar" onclick="submitForm()">
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