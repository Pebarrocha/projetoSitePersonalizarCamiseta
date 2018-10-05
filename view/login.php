<!--Autor: Felipe Santiago Procópio
 Data da última modificação: 28/08/2018

Descrição: Formulário para cadastro de cliente que efetuarão compras no site. 
Esse formulário está na pasta VIEW. Ele controla apenas o visual e as entradas
digitadas pelo usuário na hora do cadastro.-->

<?php

//Chamando o controller para o envio dos dados
require_once ('../controller/clienteController.php');
//Manda o 'incluir' para o método e entra no switch case
Processo('logar');
?>

<!DOCTYPE html>

<html>
	<head lang="pt-br">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<title>Cadastro de clientes</title>

		<style type="text/css">


        
    </script>
		
		</style>
	</head>

<header>

<nav class="navegacao" >
<ul>
<form class="pesquisa">
<input type="button" class="login" value="Carrinho de Compras">
<input type="button" class="login" value="Minha Conta">
<input type="button" class="login" value="Entrar" onclick="location. href='login.php'">
<div id="pesq">
<form id="pesquisa" >
<input type="button" class="botao" value="Pesquisar">
<input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui!">
</form>
</div>
</form>
</ul>
</nav>
</header>


<body>		

	<img class="teste" src="a.jpg">

	<nav class="navegacao">
	<form id="formmain">
<ul>
<!-- FAZENDO A CONSULTA - CONSULTA POR BOTAO INCOMPLETA -->
<li><a href="main.php">Início</a>
<li><a id = "sexo" name="masculino" value="masculino" onclick="submitPesquisaMasculina()">Camisetas Masculinas
<input type="hidden" id="btnconsultamasculina" name="btnconsultamasculina" ></a>
<!-- FAZENDO A CONSULTA - CONSULTA POR BOTAO INCOMPLETA -->
<li><a id = "sexo" name="feminino" value="feminino" onclick="submitPesquisaFeminina()">Camisetas Femininas
<input type="hidden" id="btnconsultafeminina" name="btnconsultafeminina"></a>

<li><a href="#">Contato</a>
<li><a href="#">Sobre</a>
</ul>
</form>
</nav>

		<div id=corpo>
				<h1> LOGIN</h1>
				<form action="#" name="form" id="form" method="post"><br><br>
			
				<label>EMAIL:</label> 
				<input type="text2" name="email" id="email" placeholder="Digite seu E-MAIL..."><br><br>

				<label>SENHA:</label> 
				<input type="password" name="senha" id="senha" placeholder="Senha"><br><br>

				<div id=label> <p> <a href="recuperacao.php" style="color:white">ESQUECI MINHA SENHA</a>  | <a href="cadastroClienteVIEW.php" style="color:white">CADASTRAR-SE</a></p></div><br><br>

				<input type="button2" name="button" id="button" value="ENTRAR" onclick="submitForm()">
				<input type="hidden" name="ok" id="ok">	
		

		</form>
						
			</div> 

			<script type="text/javascript" src="../js/validacaoLogin.js"> </script>

				<!--Script (javascript) para submeter as informações resgatadas nos inputs 
				Ele pega os ids 'ok' e 'form' e trabalha com eles. O elemento ok é passado a ser true, enquanto
				o elemento de id 'form' é submetido-->
			<script type="text/javascript">

				function submitForm(){	
					validaCadastro();	
					alert("ok");		
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