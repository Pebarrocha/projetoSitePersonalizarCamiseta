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
		<link rel="stylesheet" type="text/css" href="css/cliente.css">
		<title>Cadastro de clientes</title>

		<style type="text/css">
		
		</style>
	</head>



<body>		

	<img class="teste" src="a.jpg">

	
<nav class="navegacao">
			<ul>
				<li><a href="#">INÍCIO</a>
				<li><a href="#">CAMISETAS MASCULINAS</a>
				<li><a href="#">CAMISETAS FEMININAS</a>	
				<li><a href="#">CONTATO</a>	
				<li><a href="#">SOBRE</a>		
				<form id="pesquisa" class="pesquisa">
					<input type="button54" value="BUSCAR">
					<input type="text" name="pesquisa" id="pesquisa" placeholder="Buscar produto..."> 
			    </form>			
			</ul>

		</nav>



		<div id=corpo>
				<h1> CADASTRO DE CLIENTE</h1>
			<form action="#" name="form" id="form" method="post"><br><br>
			
				<label>NOME COMPLETO:</label> 
				<input type="text2" name="nome" id="nome" placeholder="Nome completo...">

				<label>RUA:</label> 
				<input type="text2" name="rua" id="rua">

		
		<!--<p style="display: inline;">-->
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

				<input type="button2" name="button" id="button" value="CADASTRAR" onclick="submitForm()">
				<input type="hidden" name="ok" id="ok">	
		

		</form>
						
			</div> 

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
	<div id=fim>



</div>
</footer>


	</body>
</html>