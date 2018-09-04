<!--Autor: Felipe Santiago Procópio
 Data da última modificação: 28/08/2018

Descrição: Formulário para cadastro de cliente que efetuarão compras no site. 
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
		<link rel="stylesheet" type="text/css" href="css/cliente.css?28082018">
		<title>Cadastro de Camisetas Pré-Definidas</title>

		<style type="text/css">
			.msg-erro {color: red;}
		</style>

	</head>

	<body>		
<header>
    <h1>What Does WWF Do?</h1>
    <p>WWF's mission:</p>
  </header>
		<!-- 
			Criação dos formularios para recebimento das informações digitadas pelo usuário
			O input do formulario (a entrada) é representada pelo seu "name", o valor do name do input será responsavel por enviar o valor do dado digitado pra o controller e depois para o banco de dados
		-->			
		<div>
				<h1> CADASTRO DE CLIENTE</h1>
			<form action="#" name="form" id="form" method="post"><br><br>
			
				<label>NOME COMPLETO:</label> 
				<input type="text2" name="nome" id="nome" placeholder="Nome completo...">

				<label>RUA:</label> 
				<input type="text2" name="rua" id="rua">
<p style="display: inline;">
				<label>Nº:</label> 
				<input type="text4" name="numero" id="numero">

				<label>BAIRRO:</label> 
				<input type= "text4a" name="bairro" id="bairro">

				<label>CIDADE:</label> 
				<input type="text3" name="numero" id="numero">

				<label>CEP:</label> 
				<input type= "text3a" name="bairro" id="bairro"><br><br>
</p>				
				<label>COMPLEMENTO:</label> <br>
				<textarea name="descricao" id="descricao" rows="10" cols="30" placeholder="Digite a descrição da camiseta aqui!"></textarea><br>

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


	<footer>
		

<p>Posted by: Hege Refsnes</p>
  <p>Contact information: <a href="mailto:someone@example.com">
  someone@example.com</a>.</p>


		
	</footer>








	</body>
	


</html>