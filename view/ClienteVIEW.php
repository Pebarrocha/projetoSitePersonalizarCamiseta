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
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/adm.css">




		<style type="text/css">
		
		</style>

	</head>

<header>
<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
					    <ul class="navbar-nav mr-auto">
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          CADASTRAR
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="ClienteVIEW.php">CADASTRAR CLIENTE</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="cadastroDeEmpresa.php">CADASTRAR EMPRESA</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CADASTRAR ESTAMPA</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CADASTRAR FUNCIONÁRIO</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CADASTRAR FOTO CAMISETA</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CADASTRAR FUNCIONÁRIO</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CADASTRAR PRODUTO PRÉ-DEFINIDO</a>
					         
					        </div>
					      </li>

					    <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          CONSULTAR
					        </a>
					          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">CONSULTAR CLIENTE</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CONSULTAR EMPRESA</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CONSULTAR ESTAMPA</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CONSULTAR FUNCIONÁRIO</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CONSULTAR FOTO CAMISETA</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CONSULTAR FUNCIONÁRIO</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">CONSULTAR PRODUTO PRÉ-DEFINIDO</a>
					        </div>
					      </li>
					 

  							<li class="nav-item">
                              <a class="nav-link" href="#">SAIR</a>
                            </li>







					    </ul>
					
					  </div>
					</nav></div></div>
</header>


<body>		
	<nav class="navegacao">
	<form id="formmain">
<ul>



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
				<div class=divisor><label>Nº:</label> 
				<input type="text4" name="numero" id="numero" required>

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
					validaCadastro();	
					alert("Teste view");		
					document.getElementById("ok").value = "true";					
					document.getElementById("form").submit();
					//document.forms['form'].action = "../controller/produtoPreDefinidoController.php";
			}		
			</script>
 	<script src="../jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

<footer>
	<div id=fim>
</div>
</footer>


	</body>
</html>