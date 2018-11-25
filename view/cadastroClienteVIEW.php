<!--Autor: Felipe Santiago Procópio-->
<!-- Data da última modificação: 28/08/2018-->
<!---->
<!--Descrição: Formulário para cadastro de cliente que efetuarão compras no site. -->
<!--Esse formulário está na pasta VIEW. Ele controla apenas o visual e as entradas-->
<!--digitadas pelo usuário na hora do cadastro.-->

<?php

//Chamando o controller para o envio dos dados
require_once ('../controller/clienteController.php');
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

<header>

<nav class="navegacao" >
<ul>
<form class="pesquisa">
<a href="loginPainel.php"><img src="ab.png"></a>
<input type="button" class="login" value="Carrinho de Compras" onclick="location. href='carrinho.php'">
<input type="button" class="login" value="Minha Conta" onclick="location. href='loginConta.php'">
</form>
</ul>
</nav>
</header>


<body>		

	<img class="teste" src="banner.jpg">
	<nav class="navegacao">
	<form id="formmain">
<ul>

<li><a href="main.php">INICIO</a>
<li><a href="masculino.php">CAMISETAS MASCULINAS</a>
<li><a href="feminino.php">CAMISETAS FEMININAS</a>
<li><a href="#">CONTATO</a>
<li><a href="#">SOBRE</a>
</ul>
</form>
</nav>

		<div id=corpo>
				<h1> CADASTRO DE CLIENTE</h1>
				<form action="#" name="form" id="form" method="post"><br><br>
			
				<label>NOME COMPLETO:</label> 
				<input type="text2" name="nome" id="nome" placeholder="Nome completo..." required>

				<p style="display: inline;"><div class=dados>
				<label>CPF:</label> 
				<input type="cpf" name="cpf" id="cpf" maxlength="11" onkeyup="somenteNumeros(this)" required>

				<label>RG:</label> 
				<input type="rg" name="rg" id="rg" required><br><br>

				<label>CELULAR:</label> 
				<input type="celular" name="celular" id="celular" required>

				<label>TELEFONE FIXO:</label> 
				<input type="fixo" name="fixo" id="fixo" required><br><br>
			</div>

				<label>RUA:</label> 
				<input type="rua" name="rua" id="rua" required></p><br>

		
		<p style="display: inline;">
				<div class=divisor>

				<label>Nº:</label> 
				<input type="text4" name="num" id="num" required>

				<label>BAIRRO:</label> 
				<input type= "text4a" name="bairro" id="bairro" required></div><br>

				<label>CIDADE:</label> 
				<input type="text3" name="cidade" id="cidade" required>

				<label>CEP:</label> 
				<input type= "text3a" name="cep" id="cep">
		</p>				<br>
		
				<label>COMPLEMENTO DE ENDEREÇO:</label> <br>
				<textarea name="descricao" id="descricao" rows="1" cols="20" placeholder="Complemento de endereço"></textarea><br>

				<div><BR><BR><label>E-MAIL:</label> 
				<input type="email" name="email" id="email" required></BR></BR></div>

				<label>SENHA:</label> 
				<input type="password" name="senha" id="senha" required><br><br>

				<label>CONFIRMAR SENHA:</label> 
				<input type="password" name="senha2" id="senha2"><br><br>

				<input type="button2" name="button" id="button" value="CADASTRAR" onclick="submitForm()">
				<input type="hidden" name="ok" id="ok">	
		</form>
			</div> 


			<script type="text/javascript" src="../js/validacaoCliente.js"> </script>

				<!--Script (javascript) para submeter as informações resgatadas nos inputs 
				Ele pega os ids 'ok' e 'form' e trabalha com eles. O elemento ok é passado a ser true, enquanto
				o elemento de id 'form' é submetido-->
			<script type="text/javascript">

				
				function submitForm(){	
					//validaCadastro();	
					alert("Teste view");		
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